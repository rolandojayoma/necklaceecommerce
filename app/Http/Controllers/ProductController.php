<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Assuming you have some logic to fetch products from the database
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/', // Validating decimal with up to 2 decimal places
        ]);

        // Create a new product instance
        $newProduct = Products::create($data);

        // Redirect to the product index page
        return redirect()->route('product.index');
    }
}
