<!-- resources/views/products/create.blade.php -->
@extends('admin.layout')


@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>Create Product</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="Name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="Description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="Price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select name="CategoryID" class="form-control" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->CategoryID }}">{{ $category->Name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" multiple name="Images[]" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
