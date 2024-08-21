@extends('main')

@section('content')
    <h1>Edit Category</h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method("put")
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name"  value="{{$category->category_name}}"  required>

        <label for="category_description">Category Description:</label>
        <input type="text" name="category_description"  value="{{$category->category_description}}" required>

        <button type="submit">Save</button>
    </form>
@endsection