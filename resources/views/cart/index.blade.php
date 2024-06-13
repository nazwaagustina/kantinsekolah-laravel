<!DOCTYPE html>
<html lang="id">
<head>
    <title>Keranjang Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color:  #d2691e;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
        }
        .cart-items {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .cart-item {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            padding: 20px;
            width: 80%;
            max-width: 800px;
            align-items: center;
        }
        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
        }
        .cart-item div {
            flex: 1;
        }
        .cart-item h4 {
            margin: 0 0 10px 0;
            color: #333;
        }
        .cart-item p {
            margin: 5px 0;
            color: #666;
        }
        .cart-item form {
            margin-left: 20px;
        }
        .cart-item button {
            background-color: #ff9800;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .cart-item button:hover {
            background-color: #e68900;
        }
        .empty-cart {
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <header>
        <h1>Keranjang Belanja Anda</h1>
    </header>
    <div class="cart-items">
        @forelse ($cart as $id => $details)
            <div class="cart-item">
                <img src="{{ asset('path/to/products/' . $details['image']) }}" alt="{{ $details['name'] }}">
                <div>
                    <h4>{{ $details['name'] }}</h4>
                    <p>Harga: {{ $details['price'] }}</p>
                    <p>Jumlah: {{ $details['quantity'] }}</p>
                </div>
                <form action="{{ route('cart.remove', $id) }}" method="POST">
                    @csrf
                    <button type="submit">Hapus</button>
                </form>
            </div>
        @empty
            <p class="empty-cart">Keranjang Anda kosong!</p>
        @endforelse
    </div>
</body>
</html>
