<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan.'], 404);
        }
        
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
    
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Produk ditambahkan ke keranjang!']);
    }
}    