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
                <a href="{{ route('employees.index') }}" class=" btn btn-primary">List</a>
            </div>
        </div>
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter address"
                            class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
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
                    </div>

                </div>
            </div>
            <button class="btn btn-primary mt-3">Save Employee</button>
        </form>


    </div>

</body>

</html>
