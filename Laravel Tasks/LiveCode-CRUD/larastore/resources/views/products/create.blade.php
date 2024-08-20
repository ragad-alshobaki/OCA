<!DOCTYPE html>
<html>
<head>
    <title>Create Products</title>
</head>
<body>
    <h1>Create New Products</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="p_name">Name:</label>
        <input type="text" id="p_name" name="p_name" required>

        <label for="p_descrption">Description:</label>
        <input type="text" id="p_descrption" name="p_descrption" required>

        <label for="p_price">Price:</label>
        <input type="number" id="p_price" name="p_price" required>

        <button type="submit">Create</button>
    </form>
</body>
</html>