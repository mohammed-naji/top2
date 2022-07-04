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

        <div class="alert alert-success">
            <h3>Welcome, {{ $name }}</h3>
            <p>Your email is : {{ $email }}</p>
            <p>Your gender is : {{ $gender }}</p>
            <p>Your age is : {{ $age }}</p>
        </div>

    </div>

</body>
</html>
