@extends('main')

@section('content')
    <h1>Create New Category</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" required>

        <label for="category_description">Category Description:</label>
        <input type="text" name="category_description" required>

        {{-- <a type="submit" class="btn btn-success">Create</a> --}}
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection