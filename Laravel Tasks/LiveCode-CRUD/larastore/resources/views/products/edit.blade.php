<!DOCTYPE html>
<html>
<head>
    <title>Edit Products</title>
</head>
<body>
    <h1>Edit Products</h1>
    <form action="{{ route('products.update', $products->id) }}" method="POST">
        @csrf
        @method("put")
        <label for="p_name">Name:</label>
        <input type="text" id="p_name" name="p_name"  value="{{$products->p_name}}"  required>

        <label for="p_descrption">Description:</label>
        <input type="text" id="p_descrption" name="p_descrption"  value="{{$products->p_descrption}}" required>

        <label for="p_price">Price:</label>
        <input type="number" id="p_price" name="p_price"  value="{{$products->p_price}}" required>

        <button type="submit">Save</button>
    </form>
</body>
</html>