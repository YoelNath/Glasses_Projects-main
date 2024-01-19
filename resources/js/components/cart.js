import React, { useState, useEffect } from 'react';

const Cart = () => {
    const [cartItems, setCartItems] = useState([]);

    useEffect(() => {
        // Fetch cart items from Laravel API
        fetch('/api/cart')
            .then(response => response.json())
            .then(data => setCartItems(data))
            .catch(error => console.error('Error fetching cart items:', error));
    }, []);

    const handleQuantityChange = (itemId, quantity) => {
        // Update cart item quantity in Laravel API
        fetch('/api/cart/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ itemId, quantity }),
        })
            .then(response => response.json())
            .then(data => setCartItems(data))
            .catch(error => console.error('Error updating cart item:', error));
    };

    return (
        <div>
            <h2>Shopping Cart</h2>
            <ul>
                {cartItems.map(item => (
                    <li key={item.id}>
                        {item.name} - ${item.price} - Quantity: {item.quantity}
                        <button onClick={() => handleQuantityChange(item.id, item.quantity + 1)}>+</button>
                        <button onClick={() => handleQuantityChange(item.id, Math.max(0, item.quantity - 1))}>-</button>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default Cart;
