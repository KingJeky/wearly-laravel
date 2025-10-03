<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement
{

    //add item to chart
    static public function addItemToCart($product_id) {
        $cart_items = self::getCartItemsFromCookie();

        $existing_item = null;

        foreach($cart_items as $key => $item){
            if($item['product_id'] == $product_id){
                $existing_item = $key;
                break;
            }
        }

if ($existing_item !== null) {
    $cart_items[$existing_item]['quantity']++;
    $cart_items[$existing_item]['total_amount'] = $cart_items[$existing_item]['quantity'] *
    $cart_items[$existing_item]['unit_amount'];
        } else {
            $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images']);
            if($product){
                $cart_Items[] = [
                    'product_id' => $product_id,
                    'name' => $product->name,
                    'image' => $product->images[0],
                    'quantity' => 1,
                    'unit_amount' => $product->price,
                    'total_amount' => $product->price
                ];
            }
        }
        self::addCartItemsToCookie($cart_Items);
        return count($cart_Items);
    }

    //remove item from chart
    static public function removeCartItem($product_id){
        $cart_Items = self::getCartItemsFromCookie();

        foreach($cart_Items as $key => $item){
            if($item['product_id'] == $product_id){
                unset($cart_Items[$key]);
            }
        }
        self::addCartItemsToCookie($cart_Items);

        return $cart_Items;
    }

    //add cart items to cookie
    static public function addCartItemsToCookie($cartItems)
    {
        Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 *30);
    }

    //clear cart items from cookie
    static public function clearCartItems()
    {
        Cookie::queue(Cookie::forget('cart_items'));
    }

    //get all cart items from cookie
    static public function getCartItemsFromCookie()
    {
        $cart_Items = json_decode(Cookie::get('cart_items'), true);
        if(!$cart_Items){
             $cart_Items = [];
        }
        return $cart_Items;
    }

    //increment item quantity
    static public function incrementItemQuantity($product_id){
        $cart_Items = self::getCartItemsFromCookie();

        foreach($cart_Items as $key => $item){
            if($item['product_id'] == $product_id){
                $cart_Items[$key]['quantity']++;
                $cart_Items[$key]['total_amount'] = $cart_Items[$key]['quantity'] * $cart_Items[$key]['unit_amount'];
                break;
            }
        }
        self::addCartItemsToCookie($cart_Items);
        return $cart_Items;
    }

    //decrement item quantity
    static public function decrementItemQuantity($product_id){
        $cart_Items = self::getCartItemsFromCookie();

        foreach($cart_Items as $key => $item){
            if($item['product_id'] == $product_id){
                if($cart_Items[$key]['quantity'] > 1){
                    $cart_Items[$key]['quantity']--;
                    $cart_Items[$key]['total_amount'] = $cart_Items[$key]['quantity'] * $cart_Items[$key]['unit_amount'];
                }
            }
        }
        self::addCartItemsToCookie($cart_Items);

        return $cart_Items;
    }

    //calculate grand total
    static public function calculateGrandTotal($items){
        return array_sum(array_column($items, 'total_amount'));
    }

}
