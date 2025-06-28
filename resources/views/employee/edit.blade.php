<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMS</title>
    <link rel="stylesheet" href="{{ asset('assets\assets\css\bootstrap.min.css') }}">
</head>

<body>
    <div class="bg-dark py-3">
        <div class="container">

            <div class="h4 text-white"> Employee Management System</div>
        </div>

    </div>
    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h5">Edit Employee</div>
            <div>
                <a href="{{ route('employees.index') }}" class=" btn btn-primary">List</a>
            </div>
        </div>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $employee->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $employee->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter address"
                            class="form-control @error('address') is-invalid @enderror">{{ old('address', $employee->address) }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label><br>
                        <input type="file" name="image" id="image"
                            class="@error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="pt-3">
                            @if ($employee->image && file_exists(public_path('uploads/employees/' . $employee->image)))
                                <label class="form-label mt-2">Current Image:</label><br>
                                <img src="{{ url('uploads/employees/' . $employee->image) }}" width="100"
                                    height="100">
                            @endif


                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary my-5">Update Employee</button>
        </form>


    </div>

</body>

</html>
