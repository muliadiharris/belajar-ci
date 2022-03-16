<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body>
  <!-- <h1>Ini Halaman Saya 
    <a href="<?php echo base_url('Dashboard'); ?>">Home</a>
    <a href="<?php echo base_url('Dashboard/About'); ?>">About</a>
    <a href="<?php echo base_url('Dashboard/Contact'); ?>">Contact</a>
    <h1> -->
  <div class="container-fluid">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('Dashboard'); ?>">Home</a>
              <a class="nav-link" href="<?php echo base_url('Dashboard/About'); ?>">About</a>
              <a class="nav-link" href="<?php echo base_url('Dashboard/Contact'); ?>">Contact</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-12">

            <a class="btn btn-primary" href="<?= base_url('crud/tambah_data') ?>">tambahdata</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tempat_Tanggal_Lahir</th>
                  <th scope="col">No_Telepon</th>
                  <th scope="col">Password</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>RthNrhyti@gmail.com</td>
                  <td>Ratih Nurhayati</td>
                  <td>Jl. Jelambar</td>
                  <td>Jakarta 02,03,2005</td>
                  <td>081314238553</td>
                </tr>
                <?php foreach ($data as $row) {

                ?>

                  <tr>
                    <th scope="row">2</th>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['no_telepon']; ?></td>
                  </tr>
                <?php }
                ?>
          </div>
        </div>
      </div>
      </tbody>
      </table>
</body>

</html>