<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel React Shopping Cart</title>
</head>
<body>
    <div id="cart">as</div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        import React from 'react';
        import ReactDOM from 'react-dom';
        import Cart from './components/cart';

        ReactDOM.render(<Cart />, document.getElementById('cart'));
    </script>
</body>
</html>
