@extends('main')

@section('content')
    <h1> Show All Products " Deleted " </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            {{-- <th scope="col">Date of Deleted</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach($product as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_description}}</td>
                <td>{{$item->product_price}}</td>
                {{-- <td>{{$item->deleted_at}}</td> --}}
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection