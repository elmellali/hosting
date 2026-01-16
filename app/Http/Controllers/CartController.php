<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        return view('pages.checkout', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'domain' => 'required|string',
            'price' => 'nullable|numeric', // We can add price calculation later
            'type' => 'required|string', // e.g., 'domain', 'hosting'
        ]);

        $cart = session()->get('cart', []);

        $item_id = md5($request->domain . $request->type); // Simple unique ID

        $cart[$item_id] = [
            "name" => $request->domain,
            "type" => $request->type,
            "price" => $request->price ?? 9.99, // Default price if not sent
            "quantity" => 1
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully!');
    }

    public function removeFromCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Item removed successfully');
        }
    }
}
