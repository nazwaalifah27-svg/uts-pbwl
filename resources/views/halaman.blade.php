<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel - Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding: 20px;
        }
        .header-left {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f1f1f1;
            color: #000;
            padding: 12px 20px;
            font-size: 1.2rem;
            font-weight: normal;
            z-index: 1030;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header-right {
            position: fixed;
            top: 10px;
            right: 20px;
            z-index: 1030;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .main-content {
            padding-top: 60px;
            text-align: center;
        }

        .main-content h1 {
            font-weight: bold;
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 300px;
            background: white;
            box-shadow: -2px 0 5px rgba(0,0,0,.3);
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1040;
            padding: 20px;
        }
        .sidebar-overlay.active {
            transform: translateX(0);
        }

        .sidebar-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: bold;
            cursor: pointer;
            font-size: 20px;
        }

        .sidebar-menu a {
            display: block;
            margin-bottom: 10px;
            color: #000;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .sidebar-menu a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="header-left">
        UTS Laravel
    </div>

    <div class="header-right" id="sidebarToggle" aria-label="Open Menu" role="button" tabindex="0">
        &#9776; <!-- Icon garis 3 -->
    </div>

    <div class="main-content">
        <h1>Halaman Home</h1>
    </div>

    <div class="sidebar-overlay" id="sidebar">
        <div class="sidebar-close" id="sidebarClose" aria-label="Close Menu" role="button" tabindex="0">&times;</div>
        <h5>UTS Laravel</h5>
        <div class="sidebar-menu">
            <a href="/home">Home</a>
            <a href="/produk">Produk</a>
        </div>
        <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarClose = document.getElementById('sidebarClose');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.add('active');
        });

        sidebarClose.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });

        window.addEventListener('click', function(e) {
            if (sidebar.classList.contains('active') && !sidebar.contains(e.target) && e.target !== sidebarToggle) {
                sidebar.classList.remove('active');
            }
        });

        sidebarToggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                sidebar.classList.add('active');
            }
        });

        sidebarClose.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>
</html>