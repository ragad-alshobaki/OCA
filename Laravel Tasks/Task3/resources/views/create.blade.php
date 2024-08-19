@extends('layout')

@section('content')
    <h1>Add Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_name">Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ old('product_name') }}">
        </div>
        <div class="form-group">
            <label for="product_description">Description</label>
            <textarea name="product_description" id="product_description" class="form-control">{{ old('product_description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_price">Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" value="{{ old('product_price') }}">
        </div>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
@endsection
