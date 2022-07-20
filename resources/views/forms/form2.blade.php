<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Register new account</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('form2_data') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control">
        </div>

        <div class="mb-3">

            {{ old('gender') }}
            <label>Gender</label> <br>
            <label><input type="radio" {{ old('gender') == 'Male' ? 'checked' : '' }} name="gender" value="Male" > Male</label> <br>
            <label><input type="radio" {{ old('gender') == 'Female' ? 'checked' : '' }} name="gender" value="Female" > Female</label>
        </div>

        <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}" placeholder="Age" class="form-control">
        </div>


        <div class="text-center">
            <button class="btn btn-info w-25">Add</button>
        </div>
    </form>

    </div>

</body>
</html>
