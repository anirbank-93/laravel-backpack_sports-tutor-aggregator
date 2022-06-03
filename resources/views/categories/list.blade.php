<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <div><a href="/create-category" class="btn btn-success">New Category +</a></div>            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Sl.No.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $category->title }}</td>
          <td>{{ $category->description }}</td>
          <td>
          <a href="/edit-category/{{ $category->id }}" class="btn btn-sm btn-info">Edit</a>
          <button type="button" class="btn btn-sm btn-danger">Delete</button>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
