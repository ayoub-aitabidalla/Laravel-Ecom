<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Support\Facades\DB;

class CartItemController extends Controller
{
    public function removeFromCart($itemId)
    {
        DB::transaction(function () use ($itemId) {
            $item = CartItem::findOrFail($itemId);
            $this->decreaseCartTotal($item);
            $item->delete();
        });
    
        return redirect()->back()->with('success', 'Item removed from cart successfully.');
    }
    
    private function decreaseCartTotal(CartItem $item)
    {
        $cart = $item->cart;
        $product = $item->product;
    
        $cart->total -= $product->price * $item->quantity;
        $cart->save();
    }
}
