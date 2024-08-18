<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
     <style>
        table,th,td {
            border: 1px solid;
        }
     </style>
</head>
<body>
    <div>
        <h1>Products List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <!-- <th>Quantity</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <!-- <td>{{ $product->quantity }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
