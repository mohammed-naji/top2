<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-dark w-25">Add New Post</a>
        </div>
        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
        @endif
        <div class="my-3">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="s" class="form-control" placeholder="Search about any post.." value="{{ request()->s }}">
                    </div>
                    <div class="col-md-2">
                        {{-- {{ request()->count }} --}}
                        <select class="form-select" name="count">
                            <option {{ request()->count == 10 ? 'selected' : '' }} value="10">10</option>
                            <option {{ request()->count == 15 ? 'selected' : '' }} value="15">15</option>
                            <option {{ request()->count == 20 ? 'selected' : '' }} value="20">20</option>
                            <option {{ request()->has('count') ? '' : 'selected' }} {{ request()->count == 25 ? 'selected' : '' }} value="25">25</option>
                            <option {{ request()->count == 'all' ? 'selected' : '' }} value="all">All</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Search</button>
                    </div>
                </div>


            </form>
        </div>
        <table class="table table-bordered table-striped table-hover mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                {{-- <th>Body</th> --}}
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                {{-- <td>{!! $post->body !!}</td> --}}
                <td>{{ $post->created_at->format('d F, Y | H:s:i a') }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    {{-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}
                    <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- @if (request()->has('count') && request()->count != 'all') --}}
            {{ $posts->appends($_GET)->links() }}
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
