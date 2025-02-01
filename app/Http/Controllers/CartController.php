<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;


class CartController extends Controller
{

    public function index()
    {
        return view('cart.index', [
            'items' => $this->getUserCartItems(1),
            'totalPrice' => $this->getUserCartTotal(1),
        ]);
    }

    private function getUserCartItems($userId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        if ($cart) {
            return $cart->items;
        }

        return collect();
    }

    /**
     * Get the cart total for the authenticated user.
     */
    private function getUserCartTotal($userId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        return $cart ? $cart->total : 0;
    }


    public function addToCart($productId)
    {
        $userId = 1;

        DB::beginTransaction();

        try {
            $cart = $this->getOrCreateCart($userId);
            $this->addOrUpdateCartItem($cart, $productId);
            $this->updateCartTotal($cart);

            DB::commit();

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Failed to add product to cart: ' . $e->getMessage());
        }
    }

    // Find or create a cart for the user.

    private function getOrCreateCart($userId)
    {
        return Cart::updateOrCreate(
            ['user_id' => $userId],
            ['total' => 0]
        );
    }

    // Add or update a cart item for the given product.

    private function addOrUpdateCartItem($cart, $productId)
    {
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
    }


    // Recalculate and update the cart total.
    private function updateCartTotal($cart)
    {
        $total = CartItem::where('cart_id', $cart->id)
            ->join('products', 'cart_items.product_id', '=', 'products.id')
            ->selectRaw('SUM(cart_items.quantity * products.price) as total')
            ->value('total');

        $cart->total = $total ?? 0;
        $cart->save();
    }


}
