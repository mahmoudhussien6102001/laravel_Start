<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('post.index') }}">PostApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2>All Posts</h2>
    <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Description</th>
          <th>Creator</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->description }}</td>
          <td>{{ $post->creator }}</td>
          <td>
            <a href="{{ route('post.show' ,['post' =>$post]) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route ('post.edit' ,['post' =>$post]) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('post.destroy' ,['post' =>$post]) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
