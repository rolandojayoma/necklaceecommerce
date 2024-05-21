<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cart-container">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-details">
                        <img src="{{ asset('assets/images/2.jpeg') }}" alt="Product 1">
                        <div class="product-info">
                            <p class="product-title">Double Cross Gold Necklace</p>
                            <p class="product-description">Introducing the Double Cross Gold Necklace, a timeless symbol of grace and strength. Crafted with precision and passion, this exquisite piece marries classic design with contemporary elegance.</p>
                        </div>
                    </td>
                    <td class="product-price">$200</td>
                    <td class="product-quantity">
                        <input type="number" value="1">
                    </td>
                    <td class="product-subtotal">$200</td>
                    <td class="product-actions">
                        <button class="update-btn">🔄</button>
                        <button class="delete-btn">🗑️</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="cart-footer">
            <a href="{{url('welcome')}}"><button class="continue-shopping-btn">&lt; Continue Shopping</button></a>
            <div class="total-price">
                Total $ 200
            </div>
            <button class="checkout-btn">Checkout &gt;</button>
        </div>
    </div>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.cart-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.cart-table th, .cart-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.cart-table th {
    background-color: #f0f0f0;
}

.product-details {
    display: flex;
    align-items: center;
}

.product-details img {
    width: 100px;
    height: 100px;
    margin-right: 10px;
}

.product-info {
    flex: 1;
}

.product-title {
    font-weight: bold;
}

.product-description {
    font-size: 0.9em;
    color: #666;
}

.product-price, .product-subtotal {
    text-align: center;
}

.product-quantity input {
    width: 50px;
    text-align: center;
}

.product-actions {
    display: flex;
    justify-content: center;
    gap: 5px;
}

.product-actions button {
    border: none;
    background: none;
    cursor: pointer;
}

.update-btn {
    color: #00aaff;
}

.delete-btn {
    color: #ff4444;
}

.cart-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    border-top: 1px solid #ddd;
}

.continue-shopping-btn, .checkout-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

.continue-shopping-btn {
    background-color: #ffa500;
    color: #fff;
}

.checkout-btn {
    background-color: #28a745;
    color: #fff;
}

.total-price {
    font-size: 1.2em;
    font-weight: bold;
}

</style>