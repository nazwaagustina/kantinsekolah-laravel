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
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 20px 0;
            font-size: 18px;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar input[type="text"] {
            width: 80%;
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
            gap: 20px;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .menu-item img {
            width: 100%;
            height: 150px;
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
                <!-- Contoh Item Menu -->
                <div class="menu-item">
                    <img src="imgs/nasi ayam bumbu.jpeg" alt="Nasi Ayam Bumbu">
                    <div class="details">
                        <h3>Nasi Ayam Bumbu</h3>
                        <p>Rp.10.000</p>
                        <button>Tambah</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="imgs/kue soes.jpeg" alt="Kue Soes">
                    <div class="details">
                        <h3>Kue Soes</h3>
                        <p>Rp.2.000</p>
                        <button>Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
            <button><i class="fa fa-shopping-cart"></i> 0 Item</button>
        </div>
        <div>
            Total: <strong>Rp. 0,00</strong>
        </div>
    </div>
</body>
</html>
