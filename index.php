<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/33bde986c6.js" crossorigin="anonymous"></script>
  <title>XMl projekt!</title>

</head>

<body>
  <?php
    $pedale = json_decode(file_get_contents('pedale.json')); //dekodiranje i dohvacanje json podataka, pretvara json u array
  ?>
  <nav class="p-4 navbar-expand-lg navbar-light pozadina">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="pocetna.php">Početna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Ponuda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>
    </ul>
  </nav>
  <main class="container py-5">
    <h1 class="display-4 text-center mb-5">Pedale i efekti za gitaru</h1>

    <div class="row">
      <?php foreach($pedale as $pedala): ?>
      <div class="col-12 col-md-4">
        <div class="card p-4 mb-5">
          <h3 class="h3 mb-3">
            <?php echo $pedala->ime; ?>
          </h3>
          <img src="<?php echo $pedala->slika; ?>" alt="<?php $pedala->ime; ?>">

          <p class="lead">
            <?php echo ucfirst($pedala->stanje); ?>
          </p>
          <span>
            <?php echo $pedala->cijena ?>
          </span>

        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
  <footer>
    <div class="kontejner">
      <div id="prvi">
        Patrik Poštek
      </div>
      <div>
         2022 &copy;
      </div>
    </div>
  </footer>
</body>

</html>