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
    <form method="POST" action="/category-update/{{ $category->id }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="categoryName">Category name</label>
            <input type="text" class="form-control" id="categoryName" name="categoryName" value="{{ $category->title }}" placeholder="Enter category name">
        </div>
        <div class="form-group">
            <label for="categoryDesc">Category description</label>
            <input type="text" class="form-control" id="categoryDesc" name="categoryDesc" value="{{ $category->description }}" placeholder="Category description">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <input type="number" value="1" hidden> -->
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-info">Reset</button>
    </form>
    </div>
</body>
</html>
