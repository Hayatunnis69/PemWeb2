<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }

    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer', compact('customers'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Produk berhasil disimpan');
    }

    public function edit(Product $products)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('produk.admin')->with('delete', 'Produk berhasil dihapus');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());
        return redirect()->route('product.admin')->with('update', 'Product Update succesfully');
    }

}
