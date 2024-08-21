<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraStore Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #EEEEEE;
        }

        nav {
            display: flex;
            background-color: #31363F;
            overflow: hidden;
        }

        nav a {
            display: block;
            color: #EEEEEE;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: #76ABAE;
        }

        nav a.active {
            background-color: #76ABAE; /* Green color for active link */
            color: #EEEEEE;
        }
        section {
            padding: 20px;
        }
        #addBtn {
            float: right;
        }
        .prod_ctr, .cat_ctr {
            display: flex;
            flex-direction: row;
            gap: 7px;
        }
    </style>
</head>
<body>
    <nav>
        {{-- <a class="active" href="#home">Home</a> --}}
        <a class="active">LaraStore</a>
        <a href=" {{ route('category.index') }} ">Category</a>
        <a href=" {{ route('product.index') }} ">Product</a>
    </nav>
    <section>
        @yield('content')
    </section>
</body>
</html>