<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PostApp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
  <div class="container mt-5">
    <h2>Edit Post</h2>
    <form action="{{ route('post.update' ,['post' =>$post]) }}" method="POST">
      <!-- Title Field -->
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required value="{{ $post->title }}">
      </div>
      
      <!-- Description Field -->
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter post description" required>{{ $post->description }}</textarea>
      </div>
      
      <!-- Creator Field -->
      <div class="mb-3">
        <label for="creator" class="form-label">Creator</label>
        <input type="text" class="form-control" id="creator" name="creator" placeholder="Enter creator's name" required value="{{ $post->creator }}">
      </div>
      
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
