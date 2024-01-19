<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        return response()->json($cartItems);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $itemId = $request->input('itemId');
        $quantity = $request->input('quantity');

        // Update or create cart item
        Cart::updateOrCreate(
            ['user_id' => $user->id, 'item_id' => $itemId],
            ['quantity' => $quantity]
        );

        // Fetch updated cart items
        $cartItems = Cart::where('user_id', $user->id)->get();

        return response()->json($cartItems);
    }
}
