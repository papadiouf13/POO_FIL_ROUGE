<!doctype html>
<html lang="en">

<head>
  <title>ATELIER TAILLEUR</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">ATELIER DE COUTURE</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="<?=WEB_URL . "?path=categorie"?>" aria-current="page">Categorie <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?=WEB_URL . "?path=appro"?>" aria-current="page">Approvisionnement <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
             
              <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Article
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?=WEB_URL . "?path=form-article"?>">Creer</a></li>
                  <li><a class="dropdown-item" href="<?=WEB_URL . "?path=article"?>">Liste</a></li>
                </ul>
              </div>
            </li>

          </ul>

        </div>
      </div>
    </nav>

  </header>
  <main>
    <?= $content_for_view ?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>