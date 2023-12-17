<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allProductList(Request $request){
        $products = DB::table('products')->get();
       // dd($products);
        return view('all-products', compact('products'));
    }
    public function newProduct(){
        return view('new-product');
    }
    public function addNewProduct(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
        ]);
    
        // Using Query Builder to insert data into the 'products' table
        DB::table('products')->insert([
            'name' => $validatedData['name'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect('all-products')->with('success', 'Product added successfully!');
    }


    //Edit Products
    public function getProductDetails($productId)
{
    $product = DB::table('products')->where('id', $productId)->first();

    return response()->json($product);
}
// Sell and Edit Products
public function handleProductAction(Request $request)
{
    $action = $request->input('action');

    if ($action === 'sell') {
        $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    // Get product details to calculate total amount
    $product = DB::table('products')->where('id', $productId)->first();
    $productPrice = $product->price;

    // Calculate total amount
    $totalAmount = $quantity * $productPrice;

    // Insert into 'sales' table
    DB::table('sales')->insert([
        'product_id' => $productId,
        'quantity_sold' => $quantity,
        'total_amount' => $totalAmount,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Update product quantity in 'products' table
    DB::table('products')->where('id', $productId)->decrement('quantity', $quantity);

    return redirect()->back()->with('success', 'Product sold successfully!');
    } elseif ($action === 'edit') {
        $productId = $request->input('product_id');
    $productName = $request->input('editProductName');
    $productPrice = $request->input('editProductPrice');
    $productQuantity = $request->input('editProductQuantity');

    // Update product details in the 'products' table
    DB::table('products')
        ->where('id', $productId)
        ->update([
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $productQuantity,
            'updated_at' => now(),
        ]);

    return redirect()->back()->with('success', 'Product updated successfully!');
    } elseif($action === 'delete'){
        $productId = $request->input('product_id');
        $product = DB::table('products')->where('id', $productId)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        DB::table('products')->where('id', $productId)->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
}
