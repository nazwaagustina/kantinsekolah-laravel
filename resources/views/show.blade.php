<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="menu-detail">
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->description }}</p>
        <p>Harga: Rp {{ number_format($item->price, 2) }}</p>
        <a href="/">Kembali ke Daftar Menu</a>
    </div>
</body>
</html>
