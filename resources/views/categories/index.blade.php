<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>All Categories</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-dark w-25">Add New Category</a>
        </div>
        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->created_at->format('d F, Y | H:s:i a') }}</td>
                <td>{{ $category->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    {{-- <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}
                    <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- @if (request()->has('count') && request()->count != 'all') --}}
            {{ $categories->appends($_GET)->links() }}
        {{-- @endif --}}

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        setTimeout(() => {
           $('.alert').fadeOut();
        }, 2000);
    </script>

</body>
</html>
