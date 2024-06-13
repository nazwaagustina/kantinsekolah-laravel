<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kantin Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
        }
        .sidebar {
            background-color: #d2691e;
            color: #fff;
            width: 250px;
            padding: 30px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .sidebar img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px; 
        }
        .sidebar h1 {
            font-size: 40px;
            color: #fff;
            margin-bottom: 40px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar ul li {
            margin: 20px 0;
            font-size: 18px;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .main-content {
            flex: 1;
            padding: 100px;
        }
        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar input[type="text"] {
            width: 87%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 50px;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .menu-item .details {
            padding: 10px;
            text-align: center;
        }
        .menu-item .details h3 {
            margin: 10px 0;
            font-size: 18px;
        }
        .menu-item .details p {
            margin: 0;
            color: #d2691e;
            font-weight: bold;
        }
        .menu-item .details button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #d2691e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .menu-item .details button.detail-btn {
            margin-right: 5px;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #d2691e;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .menu-item .details button:active {
            background-color: #555; 
            color: #fff;
        }
        .search-cart-container {
            display: flex;
            align-items: center;
        }
        .cart-icon {
            margin-left: 10px;
            position: relative;
            display: flex;
            align-items: center;
        }
        .cart-icon img {
            width: 24px;
            height: 24px;
        }
        .cart-count {
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            position: absolute;
            top: -10px;
            right: -10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="img/cf.png" alt="Logo Kantin Wikrama">
            <h1>Kantin Wikrama</h1>
        </div>
        <div class="main-content">
            <div class="search-bar">
                <input type="text" placeholder="Ketik disini">
                <button><i class="fa fa-search"></i> Cari</button>
                <a href="{{ route('cart.index') }}" class="cart-icon">
                    <img src="{{ asset('img/keranjang.png') }}" alt="Keranjang">
                    @if(session('cart'))
                        <span class="cart-count">{{ count(session('cart')) }}</span>
                    @else
                        <span class="cart-count">0</span>
                    @endif
                </a>
            </div>
            <div class="menu-grid">
         
                <div class="menu-item">                
                    <img src="img/nasi ayam bumbu.jpeg" alt="Nasi Ayam Bumbu">
                    <div class="details">
                        <h3>Nasi Ayam Bumbu</h3>
                        <p>Rp 10.000</p>
                        <button class="detail-btn" onclick="showDetails('Nasi Ayam Bumbu', 'Nasi dengan ayam dan bumbu spesial.', 'img/nasi ayam bumbu.jpeg')">Detail</button>
                        <button id="tambah-nasi-ayam" onclick="addToCart(1)">Tambah</button>
                        

                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/kue soes.jpeg" alt="Kue Soes">
                    <div class="details">
                        <h3>Kue Soes</h3>
                        <p>Rp 2.000</p>
                        <button class="detail-btn" onclick="showDetails('Kue Soes', 'Kue soes yang lembut dengan isian krim.','img/kue soes.jpeg')">Detail</button>
                        <button id="tamabah-kue-soes" onclick="addToCart('kue soes', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/brownies.jpeg" alt="brownies">
                    <div class="details">
                        <h3>Brownies</h3>
                        <p>Rp 3.000</p>
                        <button class="detail-btn" onclick="showDetails('Brownies', 'Brownies cokelat yang lezat dan moist.','img/brownies.jpeg')">Detail</button>
                        <button id="tambah-brownies" onclick="addToCart('brownies', 3000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/onigiri.jpeg" alt="onigiri">
                    <div class="details">
                        <h3>Onigiri</h3>
                        <p>Rp 3.000</p>
                        <button class="detail-btn" onclick="showDetails('Onigiri', 'Nasi kepal khas Jepang dengan isian tuna.','img/onigiri.jpeg')">Detail</button>
                        <button id="tambah-onigiri" onclick="addToCart('onigiri', 3000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/jus.jpg" alt="jus">
                    <div class="details">
                        <h3>Jus</h3>
                        <p>Rp 5.000</p>
                        <button class="detail-btn" onclick="showDetails('Jus', 'Jus buah segar pilihan.','img/jus.jpg')">Detail</button>
                        <button id="tambah-jus" onclick="addToCart('jus', 5000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/dimsum.jpg" alt="dimsum">
                    <div class="details">
                        <h3>Dimsum</h3>
                        <p>Rp 2.000</p>
                        <button class="detail-btn" onclick="showDetails('Dimsum', 'Dimsum dengan isian ayam yang lezat.','img/dimsum.jpg')">Detail</button>
                        <button id="tambah-dimsum" onclick="addToCart('dimsum', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/martabak.jpg" alt="martabak">
                    <div class="details">
                        <h3>Martabak</h3>
                        <p>Rp 2.000</p>
                        <button class="detail-btn" onclick="showDetails('Martabak', 'Martabak manis dengan isian cokelat.','img/martabak.jpg')">Detail</button>
                        <button id="tambah-martabak" onclick="addToCart('martabak', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/bakwan.jpg" alt="bakwan">
                    <div class="details">
                        <h3>Bakwan</h3>
                        <p>Rp 1.000</p>
                        <button class="detail-btn" onclick="showDetails('Bakwan', 'Bakwan sayur yang gurih dan renyah.','img/bakwan.jpg')">Detail</button>
                        <button id="tambah-bakwan" onclick="addToCart('bakwan', 1000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/pie.jpg" alt="pie">
                    <div class="details">
                        <h3>Pie</h3>
                        <p>Rp 2.000</p>
                        <button class="detail-btn" onclick="showDetails('Pie', 'Pie buah dengan isian apel.','img/pie.jpg')">Detail</button>
                        <button id="tambah-pie" onclick="addToCart('pie', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/putu ayu.jpg" alt="putu ayu">
                    <div class="details">
                        <h3>Putu Ayu</h3>
                        <p>Rp 1.000</p>
                        <button class="detail-btn" onclick="showDetails('Putu Ayu', 'Kue tradisional dengan taburan kelapa.','img/putu ayu.jpg')">Detail</button>
                        <button id="tambah-putu-ayu" onclick="addToCart('putu ayu', 1000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/risol.jpg" alt="risol">
                    <div class="details">
                        <h3>Risol</h3>
                        <p>Rp 3.000</p>
                        <button class="detail-btn" onclick="showDetails('Risol', 'Risol dengan isian ragout ayam.','img/risol.jpg')">Detail</button>
                        <button id="tambah-risol" onclick="addToCart('risol', 3000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/sosis.jpg" alt="sosis">
                    <div class="details">
                        <h3>Sosis Bakar</h3>
                        <p>Rp 2.000</p>
                        <button class="detail-btn" onclick="showDetails('sosis bakar', 'sosis bakar dengan saus barberque','img/sosis.jpg')">Detail</button>
                        <button id="tambah-sosis" onclick="addToCart('sosis', 2000)">Tambah</button>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <img id="modal-image" src="" alt="Detail Gambar" style="width:100%;border-radius:10px;">
                        <h3 id="modal-title"></h3>
                        <p id="modal-description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showDetails(title, description, imageUrl) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-description').innerText = description;
            document.getElementById('modal-image').src = imageUrl;
            document.getElementById('myModal').style.display = "block";
        }

        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName('close')[0];

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        function addToCart(id) {
    fetch('/cart/add/' + id, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            updateCartCount(); // Perbarui jumlah keranjang di header
        } else {
            alert('Gagal menambahkan produk ke keranjang.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}



function updateCartCount() {
    fetch('/cart/count')
    .then(response => response.json())
    .then(data => {
        document.querySelector('.cart-count').innerText = data.count; // Perbarui jumlah keranjang
        alert('Produk ditambahkan ke keranjang!');
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


    </script>
</body>
</html>