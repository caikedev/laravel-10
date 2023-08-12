<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale='1.0'">
    <title>Create a Product</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf 
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="qtd">Quantity</label>
            <input type="text" name="qtd" placeholder="Quantity"> 
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Save">
    </form>
</body>
</html>