<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale='1.0'">
    <title>Edit a Product</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.update', ['p' => $p]) }}">
        @csrf 
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $p->name }}">
        </div>
        <div>
            <label for="qtd">Quantity</label>
            <input type="text" name="qtd" value="{{ $p->qtd }}"> 
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $p->price }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{ $p->description }}</textarea>
        </div>
        <input type="submit" value="Update">
    </form>
</body>
</html>