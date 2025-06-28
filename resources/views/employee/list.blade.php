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
    <div class="contrainer ">
        <div class="d-flex justify-content-between py-3">
            <div class="h5">Employee</div>
            <div>
                <a href="{{ route('employees.create') }}" class=" btn btn-primary">Create</a>
            </div>
        </div>
        @if (Session::has('success'))
            <div class=" alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>

                    </tr>
                    @if ($employees->isNotEmpty())
                        @foreach ($employees as $employee)
                            <tr valign="middle">
                                <td>{{ $employee->id }}</td>
                                <td>
                                    @if ($employee->image && file_exists(public_path('uploads/employees/' . $employee->image)))
                                        <img src="{{ url('uploads/employees/' . $employee->image) }}" alt=""
                                            width="40" height="40" class="rounded-circle">
                                    @else
                                        <img src="{{ url('assets/assets/images/no-image.png') }}" alt=""
                                            width="40" height="40" class="rounded-circle">
                                    @endif
                                </td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <a href="javascript:void(0);" onclick="deleteEmployee({{ $employee->id }})"
                                        class="btn btn-danger btn-sm">Delete</a>

                                    <form id="employee-delete-form-{{ $employee->id }}"
                                        action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Record Not Found</td>
                        </tr>
                    @endif

                </table>
            </div>

        </div>

        <div class="mt-3">
            {{ $employees->links() }}
        </div>


    </div>


</body>

</html>
<script>
    function deleteEmployee(id) {
        if (confirm('Are you sure you want to delete this employee?')) {
            document.getElementById('employee-delete-form-' + id).submit();
        }
    }
</script>
