<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
</head>
<body>
    <h1>Products</h1>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    <div>
        <a href="{{ route('product.create') }}">New</a>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->qtd }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->description }}</td>
                        <td>
                            <a href="{{ route('product.edit', ['p' => $p]) }}">Edit</a>
                            <form method="post" action="{{route('product.destroy', ['p' => $p])}}">
                                @csrf 
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>