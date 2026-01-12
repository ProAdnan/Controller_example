<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{

    public function index()
    {


        return View('product.index');

    }

    public function create()
    {



    }

    public function store(Request $request)
    {

        product::create([

            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'category_id' => $request->category



        ]);

        return redirect()->route('/home');

    }

    public function edit($id)
    {

        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));

    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update(
            $request->only(
                [

                    'name',
                    'price',
                    'quantity',
                    'description'

                ]
            )
        );

        return redirect()->route('product.all_products');

    }

    public function destroy($id)
    {

        $product=product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.all_products');


    }

    public function show()
    {

        $products = product::all();

        return view('product.all_product', compact('products'));

    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('product.view', compact('product'));


    }




}
