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
    $items = json_decode(file_get_contents('kontakt.json')); //dekodiranje i dohvacanje json, pretvara json u array
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
    <h1 class="display-4 text-center mb-5"><?php echo $items->lokacija; ?></h1>

        <iframe width="100%" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="<?php echo $items->src; ?>" alt="<?php $item->lokacija; ?>"></iframe>
        <div>
            <?php echo $items->adresa;?>
        </div>
        <div>
            <?php $items->broj; ?>
        </div> 
        <span>
        <?php echo $items->mjesto; ?>
        </span>
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