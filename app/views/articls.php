<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page avec Navbar et Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
    }

    .sidebar a:hover {
      background-color: #575d63;
    }

    .main-content {
      margin-left: 250px;
      padding: 20px;
    }

    .navbar {
      margin-left: 250px;
    }

    .card {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#">Accueil</a>
    <a href="#">Articles</a>
    <a href="#">À propos</a>
    <a href="#">Contact</a>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mon Site</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/loginForm">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <h1>Articles Récents</h1>
    
    <!-- Bouton Ajouter un article -->
    <a href="/getCategory" class="btn btn-success mb-3">Ajouter un article</a>

    <div class="row">
      <?php
     

      foreach ($articls[0] as $article) {
        echo "
        <div class='col-md-4'>
          <div class='card'>
            <img src='https://via.placeholder.com/300' class='card-img-top' alt=''>
            <div class='card-body'>
              <h5 class='card-title'>" . htmlspecialchars($article['title']) . "</h5>
              <p class='card-text'>" . htmlspecialchars($article['content']) . "</p>
              <a href='/updateFormulaire?id=" . htmlspecialchars($article['id']) . "' class='btn btn-primary'>Modifier</a>
              <a href='/deleteArticle?id=" . htmlspecialchars($article['id']) . "' class='btn btn-danger'>Supprimer</a>
            </div>
          </div>
        </div>
        ";
      }
      ?>
    </div>
  </div>
  <div style="display: flex;justify-content: center" class="pagination">

<nav aria-label='Page navigation example'>
    <ul class='pagination'>

        <?php

        for ($i = 1; $i <= $articls[1]; $i++) {
          
            echo "
        <li class='page-item'><a class='page-link' href='/?page=$i'>$i</a>&nbsp</li>
";
        }
        ?>

    </ul>
</nav>




</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
