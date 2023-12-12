<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js")}}"></script>
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css")}}" rel="stylesheet">
</head>


<body>
<div class="container mt-4">
    <h2>Edit product</h2>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <form action="{{url("product-update")}}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label>Product ID:</label>
            <input type="text" class="form-control"
                   placeholder="Enter product id" name="id" value="{{$data->id}}">
            @error('id')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Product Name:</label>
            <input type="text" class="form-control"
                   placeholder="Enter product name" name="product_name" value="{{$data->product_name}}">
        </div>
        @error('product_name')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <div class="mb-3" href="{{asset("img/product")}}">
            <label>Image:</label>
            <input  type="file" name="image" value="{{$data->image}}">
        </div>
        <div class="mb-3">
            <label>Brands:</label>
            <select type=""  class="form-control" name="brand_name">
                <option>----</option>
                <option {{$data->brand_name == "Nike" ? 'selected' : ''}}>Nike</option>
                <option {{$data->brand_name == "Adidas" ? 'selected' : ''}}>Adidas</option>
                <option {{$data->brand_name == "Puma" ? 'selected' : ''}}>Puma</option>
                <option {{$data->brand_name == "Mizuno" ? 'selected' : ''}}>Mizuno</option>
                <option {{$data->brand_name == "Umbro" ? 'selected' : ''}}>Umbro</option>
                <option {{$data->brand_name == "Thuong Dinh" ? 'selected' : ''}}>Thuong Dinh</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Price:</label>
            <input type="price" row="5" name="price" value="{{$data->price}}">
        </div>
        <div class="mb-3">
            <label>Describe:</label>
            <textarea class="form-control" type="text" name="description"><?php echo $data->description; ?></textarea>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Update</button>
        <button class="btn btn-dark" type="reset">Reset</button>
        <a href="{{url('product-list')}}"  class="btn btn-danger">Cancel</a>
    </form>
</div>

</body>
</html>
