<h1> Show All Products </h1>

<table>

    <th>ID</th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Price</th>
    <th>Action</th>


    @foreach($products as $product )
    <tr> 
        <td> {{$product->id}}</td>
        <td> {{$product->p_name}}</td>
        <td> {{$product->p_descrption}}</td>
        <td> {{$product->p_price}}</td>
        <td>
            <a href="{{route('products.edit', $product->id )}}" > Edit </a> <br>
            <form action="{{route('products.destroy' , $product->id)}}" method="post">
                @csrf
                @method('Delete')
                    <button type=submit> Delete </button> 
            </form>
            
        </td>
    <tr> 

    @endforeach

    <a href="{{ route('products.create') }}" >Create Product</a>
</table>