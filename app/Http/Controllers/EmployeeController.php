<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::orderBy('id', 'DESC')->paginate(5);
        return view('employee.list', ['employees' => $employee]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'nullable|string',
            'image' => 'sometimes|file|mimes:jpg,jpeg,png,gif,webp|max:2048', // 2MB max
        ]);
        if ($validator->fails()) {
            return redirect()->route('employees.create')
                ->withErrors($validator)
                ->withInput();
        }
        //save data here
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        /*
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug($file->getClientOriginalName(), '_');
            $path = $file->storeAs('uploads/employees', $filename, 'public'); 
            $employee->image = $path;
        }*/
        if ($request->hasFile('image')) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . uniqid() . '.' . $ext;
            $destinationPath = public_path('uploads/employees');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $request->image->move($destinationPath, $newFileName);
            $employee->image = $newFileName;
            $employee->save();
        }

        $employee->save();

        $request->session()->flash('success', 'Employee added successfully!');
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // Fetch employee or show 404
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'nullable|string',
            'image' => 'sometimes|file|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($employee->image && File::exists(public_path('uploads/employees/' . $employee->image))) {
                File::delete(public_path('uploads/employees/' . $employee->image));
            }

            // Save new image
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . uniqid() . '.' . $ext;
            $destinationPath = public_path('uploads/employees');

            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            $request->image->move($destinationPath, $newFileName);
            $employee->image = $newFileName;
        }

        $employee->save();

        $request->session()->flash('success', 'Employee updated successfully!');
        return redirect()->route('employees.index');
    }

    public function destroy($id, Request $request)
    {
        $employee = Employee::findOrFail($id);

        // Delete image file if it exists
        if ($employee->image && File::exists(public_path('uploads/employees/' . $employee->image))) {
            File::delete(public_path('uploads/employees/' . $employee->image));
        }

        $employee->delete();

        $request->session()->flash('success', 'Employee deleted successfully.');
        return redirect()->route('employees.index');
    }
}
