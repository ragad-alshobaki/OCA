@extends('main')

@section('content')
    <h1>Create New Product</h1>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>

        <label for="product_description">Product Description:</label>
        <input type="text" name="product_description" required>

        <label for="product_price">Product Price:</label>
        <input type="number" name="product_price" required>

        {{-- <a type="submit" class="btn btn-success">Create</a> --}}
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection