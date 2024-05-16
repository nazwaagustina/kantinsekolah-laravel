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
            color: black;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="img/cf.png" alt="Logo Kantin Wikrama">
            <h1>Kantin Wikrama</h1>
            <ul>
                <li><a href="#">Menu Makanan</a></li>
                <li><a href="#">Menu Minuman</a></li>
            </ul>
            
        </div>
        <div class="main-content">
            <div class="search-bar">
                <input type="text" placeholder="Ketik disini">
                <button><i class="fa fa-search"></i> Cari</button>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="img/nasi ayam bumbu.jpeg" alt="Nasi Ayam Bumbu">
                    <div class="details">
                        <h3>Nasi Ayam Bumbu</h3>
                        <p>Rp.10.000</p>
                        <button onclick="addToCart('Nasi Ayam Bumbu', 10000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/kue soes.jpeg" alt="Kue Soes">
                    <div class="details">
                        <h3>Kue Soes</h3>
                        <p>Rp.2.000</p>
                        <button onclick="addToCart('kue soes', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/brownies.jpeg" alt="brownies">
                    <div class="details">
                        <h3>Brownies</h3>
                        <p>Rp.3.000</p>
                        <button onclick="addToCart('brownies', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/onigiri.jpeg" alt="onigiri">
                    <div class="details">
                        <h3>Onigiri</h3>
                        <p>Rp.3.000</p>
                        <button onclick="addToCart('onigiri', 3000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/jus.jpg" alt="jus">
                    <div class="details">
                        <h3>Jus</h3>
                        <p>Rp.5.000</p>
                        <button onclick="addToCart('jus', 5000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/dimsum.jpg" alt="dimsum">
                    <div class="details">
                        <h3>Dimsum</h3>
                        <p>Rp.2.000</p>
                        <button onclick="addToCart('dimsum', 2000)">Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="img/martabak.jpg" alt="martabak">
                    <div class="details">
                        <h3>Martabak</h3>
                        <p>Rp.2.000</p>
                        <button onclick="addToCart('martabak', 2000)">Tambah</button>
                    </div>
                </div>
                    <div class="menu-item">
                    <img src="img/bakwan.jpg" alt="bakwan">
                    <div class="details">
                        <h3>Bakwan</h3>
                        <p>Rp.1.000</p>
                        <button onclick="addToCart('bakwan', 1000)">Tambah</button>
                    </div>
                    </div>
                    <div class="menu-item">
                    <img src="img/pie.jpg" alt="pie">
                    <div class="details">
                        <h3>Pie</h3>
                        <p>Rp.2.000</p>
                        <button onclick="addToCart('pie', 2000)">Tambah</button>
                    </div>
                    </div>
                    <div class="menu-item">
                    <img src="img/putu ayu.jpg" alt="putu ayu">
                    <div class="details">
                        <h3>Putu Ayu</h3>
                        <p>Rp.1.000</p>
                        <button onclick="addToCart('putu ayu', 1000)">Tambah</button>
                    </div>
                    </div>
                    <div class="menu-item">
                    <img src="img/risol.jpg" alt="risol">
                    <div class="details">
                        <h3>Risol</h3>
                        <p>Rp.3.000</p>
                        <button onclick="addToCart('risol', 3000)">Tambah</button>
                    </div>
                    </div>
                    <div class="menu-item">
                    <img src="img/sosis.jpg" alt="sosis">
                    <div class="details">
                        <h3>Sosis Bakar</h3>
                        <p>Rp.2.000</p>
                        <button onclick="addToCart('sosis', 2000)">Tambah</button>
                    </div>
                    </div>
                    <div class="sidebar">
    <div id="cart">
        <h2>Keranjang</h2>
        <ul id="cart-items">
        </ul>
        <p>Total: <span id="cart-total">Rp. 0</span></p>
    </div>
</div>
<script>
    function addToCart(itemName, price) {
        var newItem = document.createElement('li');
        newItem.textContent = itemName + ': Rp.' + price;
        var cartTotal = parseInt(document.getElementById('cart-total').textContent.replace('Rp.', ''));
        cartTotal += price;
        document.getElementById('cart-total').textContent = 'Rp.' + cartTotal;

        document.getElementById('cart-items').appendChild(newItem);
    }
</script>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
