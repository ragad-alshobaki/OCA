{{-- @include('main') --}}
@extends('main')

@section('content')
    <div>
        <h1>All Products</h1>
        <a id="addBtn" class="btn btn-success" href=" {{route('product.create')}} ">Add Product</a>
    </div>
    <div class="prod_ctr">
        @foreach($product as $item )
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->category->category_id}}</h6>
                  <h5 class="card-title">{{$item->product_name}}</h5>
                  <p class="card-text">{{$item->product_description}}</p>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->product_price}}</h6>
                  <a class="btn btn-info" href=" {{route('product.edit', $item->id )}} ">Edit</a>
                  <form action="{{route('product.destroy' , $item->id)}}" method="post">
                      @csrf
                      @method('Delete')
                        {{-- <a class="btn btn-danger">Delete</a> --}}
                        <button class="btn btn-danger" type=submit> Delete </button> 
                  </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection