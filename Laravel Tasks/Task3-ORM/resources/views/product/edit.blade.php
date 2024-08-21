@extends('main')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method("put")
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name"  value="{{$product->product_name}}"  required>

        <label for="product_description">Product Description:</label>
        <input type="text" name="product_description"  value="{{$product->product_description}}" required>

        <label for="product_price">Product Price:</label>
        <input type="number" name="product_price"  value="{{$product->product_price}}" required>

        <button type="submit">Save</button>
    </form>
@endsection