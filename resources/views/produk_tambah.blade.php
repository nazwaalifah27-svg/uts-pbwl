<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UTS Laravel</a>
    </div>
  </nav>

  <div class="container my-5">
    <h1 class="fw-bold text-center mb-4">Form Tambah Produk</h1>

    <form action="#" method="POST" class="p-4 bg-white rounded shadow-sm">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Kode Produk</label>
          <input type="text" class="form-control" name="kode" placeholder="Masukkan kode produk">
        </div>

        <div class="col-md-6">
          <label class="form-label">Nama Produk</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama produk">
        </div>

        <div class="col-md-6">
          <label class="form-label">Jenis Produk</label>
          <select class="form-select" name="jenis">
            @foreach($jenis_produk as $jenis)
              <option value="{{ $jenis }}">{{ $jenis }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Harga</label>
          <input type="number" class="form-control" name="harga" placeholder="Masukkan harga">
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success px-5">Simpan</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>