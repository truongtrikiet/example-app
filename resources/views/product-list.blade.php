<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <p><h2>Product List</h2></p>
    <p><a href="{{url("product-add")}}" class="btn btn-light">Add</a></p>
    <a href="{{asset("index-admin")}}">Return to AdminPage</a>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID Product</th>
            <th>Product Name</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Image</th>
            <th>Describe</th>
        </tr>
        </thead>
        <tbody>
    @foreach($data as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->brand_name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->image}}</td>
        <td>{{$product->description}}</td>
        <td>
            <a href="{{url("product-edit/".$product->id)}}" class="fa-solid fa-pen"></a> &nbsp;|
            <a href="{{url("product-delete/".$product->id)}}" class="fa-solid fa-trash"></a>
        </td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
