<h1> Show All Products " Soft Delete " </h1>

<table>

    <th>ID</th>
    <th>Name</th>
    <th>Descreption</th>
    <th>Price</th>


    @foreach($products as $product )
    <tr> 
        <td> {{$product->id}}</td>
        <td> {{$product->p_name}}</td>
        <td> {{$product->p_descrption}}</td>
        <td> {{$product->p_price}}</td>
    </tr>
    @endforeach

</table>

 