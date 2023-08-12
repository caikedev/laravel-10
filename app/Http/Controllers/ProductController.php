<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'qtd'           => 'required|numeric',
            'price'         => 'required|decimal:0,2',
            'description'   => 'nullable',
        ]);

        $prod = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $p)
    {
        return view('products.edit', ['p' => $p]);
    }

    public function update(Product $p, Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'qtd'           => 'required|numeric',
            'price'         => 'required|decimal:0,2',
            'description'   => 'nullable',
        ]);

        $p->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Sucessffully');
    }

    public function destroy(Product $p)
    {
        $p->delete($p);

        return redirect(route('product.index'))->with('success', 'Product Deleted Successffully');
    }
}
