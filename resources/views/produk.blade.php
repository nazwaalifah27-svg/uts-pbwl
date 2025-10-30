<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Halaman Produk | UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

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
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .header-right {
      position: fixed;
      top: 10px;
      right: 20px;
      z-index: 1031;
      cursor: pointer;
      font-size: 1.8rem;
      user-select: none;
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
    .container, .main-content {
  margin-top: 100px !important;
    }
  </style>
</head>
<body>

  <div class="header-left">UTS Laravel</div>
  <div class="header-right" id="sidebarToggle">&#9776;</div>

  <div class="sidebar-overlay" id="sidebar">
    <div class="sidebar-close" id="sidebarClose">&times;</div>
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

  <div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1 class="fw-bold">Halaman Produk</h1>
      <a href="{{ route('produk.tambah') }}" class="btn btn-success">Tambah Produk</a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-primary text-center">
          <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jenis Produk</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          @if(!empty($products) && count($products) > 0)
            @foreach($products as $p)
              <tr>
                <td>{{ $p['kode'] }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['jenis'] }}</td>
                <td>{{ $p['harga'] }}</td>
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="4" class="text-center text-muted">Tidak ada produk.</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
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

    window.addEventListener('click', (e) => {
      if (sidebar.classList.contains('active') && !sidebar.contains(e.target) && e.target !== sidebarToggle) {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>