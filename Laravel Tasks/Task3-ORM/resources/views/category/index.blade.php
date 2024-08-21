{{-- @include('main') --}}
@extends('main')

@section('content')
    <div>
        <h1>All Categories</h1>
        <a id="addBtn" class="btn btn-success" href=" {{route('category.create')}} ">Add Category</a>
    </div>
    <div class="cat_ctr">
        @foreach($category as $cat_item )
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$cat_item->category_name}}</h5>
                  <p class="card-text">{{$cat_item->category_description}}</p>
                  <a class="btn btn btn-outline-secondary" href=" {{route('product.index', $cat_item->id )}} ">Explore more</a>
                  <a class="btn btn-info" href=" {{route('category.edit', $cat_item->id )}} ">Edit</a>
                  <form action="{{route('category.destroy' , $cat_item->id)}}" method="post">
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