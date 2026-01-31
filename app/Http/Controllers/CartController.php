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
            'type' => 'required|string', // e.g., 'domain', 'hosting'
        ]);

        $cart = session()->get('cart', []);

        $item_id = md5($request->domain . $request->type); // Simple unique ID

        // Calculate price based on TLD
        $price = 9.99; // Default fallback
        if ($request->type === 'domain') {
            $parts = explode('.', $request->domain);
            $tld = end($parts);
            $price = config("domain_prices.{$tld}", 9.99); // default to 9.99 if TLD not found
        } elseif ($request->has('price')) {
            $price = $request->price; // Allow passed price for non-domains (e.g. hosting)
        }

        $cart[$item_id] = [
            "name" => $request->domain,
            "type" => $request->type,
            "price" => $price,
            "quantity" => 1
        ];

        session()->put('cart', $cart);

        if (!auth()->check()) {
            session(['url.intended' => route('checkout')]);
            return redirect()->route('register'); // Removed success message to avoid confusion on register page
        }

        return redirect()->route('checkout')->with('success', 'Item added to cart successfully!');
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
