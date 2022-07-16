<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Edit category : <span>{{ $category->title }}</span></h1>
            <a href="{{ route('categories.index') }}" class="btn btn-dark w-25">All Posts</a>
        </div>

        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $category->title) }}" />
                @error('title')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-info px-5">Update</button>
        </form>
    </div>
</body>
</html>
