<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Prove - Shopping Cart | CSE341 - Back End Development II</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&Oswald&display=swap" rel="stylesheet">
</head>

<body>
        <div id="product-display">
            <h2 class="title"><a href="shop.php">Our Products</a></h2>
        </div>
        <p id="cart_button" onclick="show_cart();">
            <img src="images/products/cart-icon-823x669.png">
            <input type="button" id="total_items" value="">
        </p>
        <div id="mycart">
        </div>
    <main>
        
        <div id="item_div">
            <form class="items" id="item1" action="#" onclick="return addToCart(this);">
                <img src="images/products/bomb.png">
                <p>Bomb</p>
                <p>Price - $200</p>
                <input type="button" value="Add To CART" onclick="cart('item1')">
                <input type="hidden" id="item1_name" value="Bomb">
                <input type="hidden" id="item1_price" value="$200">
            </form>
        </div>
        <div class="items" id="item2">
            <img src="product2.jpg">
            <p>Trendy T-Shirt With Back Design</p>
            <p>Price - $105</p>
            <input type="button" value="Add To CART" onclick="cart('item2')">
            <input type="hidden" id="item2_name" value="Trendy T-Shirt With Back Design">
            <input type="hidden" id="item2_price" value="$105">
        </div>
        <div class="items" id="item3">
            <img src="product3.jpg">
            <p>Two Color Half-Sleeves T-Shirt</p>
            <p>Price - $120</p>
            <input type="button" value="Add To CART" onclick="cart('item3')">
            <input type="hidden" id="item3_name" value="Two Color Half-Sleeves T-Shirt">
            <input type="hidden" id="item3_price" value="$120">
        </div>
        <div class="items" id="item4">
            <img src="product4.jpg">
            <p>Stylish Grey Chinos For Mens</p>
            <p>Price - $140</p>
            <input type="button" value="Add To CART" onclick="cart('item4')">
            <input type="hidden" id="item4_name" value="Stylish Grey Chinos For Mens">
            <input type="hidden" id="item4_price" value="$140">
        </div>
        <div class="items" id="item5">
            <img src="product5.jpg">
            <p>Comfortable Pants For Working</p>
            <p>Price - $130</p>
            <input type="button" value="Add To CART" onclick="cart('item5')">
            <input type="hidden" id="item5_name" value="Comfortable Pants For Working">
            <input type="hidden" id="item5_price" value="$130">
        </div>
        <div class="items" id="item6">
            <img src="product6.jpg">
            <p>Slim Track Pant For Jogging</p>
            <p>Price - $90</p>
            <input type="button" value="Add To CART" onclick="cart('item6')">
            <input type="hidden" id="item6_name" value="Slim Track Pant For Jogging">
            <input type="hidden" id="item6_price" value="$90">
        </div>
        </div>
    </main>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>