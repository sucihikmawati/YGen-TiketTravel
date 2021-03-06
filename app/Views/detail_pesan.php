<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>TIKET TRAVEL</h1>
<span>Cek Dan Pesan Tiket Anda Disini</span>
<br>
</div>
<ul class="nav nav-tabs">
    <li class="nav-item">
    <a class="nav-link disabled" href="home" tabindex="-1" aria-disabled="true">Pesawat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_kereta" tabindex="-1" aria-disabled="true">Kereta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_kapal" tabindex="-1" aria-disabled="true">Kapal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_bus" tabindex="-1" aria-disabled="true">Bus</a>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="auth/login" tabindex="-1" aria-disabled="true">Login</a>
  </li>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="auth/register" tabindex="-1" aria-disabled="true">Register</a>
  </li>
</ul>

<div class="jumbotron">
<div class="container">
  <table class="table table-bordered">
  <thead>
    <tr bgcolor="#8e8eff">
      <th scope="col">Info perjalanan</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">
        <div class="mb-3">
          <label for="inputPesawat" class="form-label">Penyedia</label>
          <input type="text" class="form-control" id="inputPesawat" style="background-color: #e9ecef" disabled>
        </div>
        <div class="mb-3">
          <label for="inputWaktu" class="form-label">Waktu</label>
          <input type="text" class="form-control" id="inputWaktu" style="background-color: #e9ecef" disabled>
        </div>
        <div class="mb-3">
          <label for="inputJurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="inputJurusan" style="background-color: #e9ecef" disabled>
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">Kelas</label>
          <input type="text" class="form-control" id="inputKelas" style="background-color: #e9ecef" disabled>
        </div>
        <div class="mb-3">
          <label for="inputPenumpang" class="form-label">Jumlah penumpang</label>
          <input type="text" class="form-control" id="inputPenumpang" style="background-color: #e9ecef" disabled>
        </div>
      </th>
    </tr>
  </tbody>
<table class="table table-bordered">
  <p><b>Penumpang</b></p>
  <thead>
    <tr bgcolor="#8e8eff">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">1</th>
      <td> 
        <input type="Nama" class="form-control" id="inputNama">
      </td>
      <td><input type="IdKTP" class="form-control" id="inputKtp"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> 
        <input type="Nama" class="form-control" id="inputNama">
      </td>
      <td><input type="IdKTP" class="form-control" id="inputKtp"></td>
    </tr>
  </tbody>
</table>
<a href="checkout" class="btn btn-success">checkout</a>
</div>
</div>


<?= $this->endSection(); ?>