<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel administrativo</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <!-- <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css"> -->
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="" class="navbar-brand">Administrativo</a>
            <spn class="navbar-text">
                Painel administrativo!
            </spn>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-40"><small>Menu</small>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Páginas</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Usuários</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>
    
    </div>

    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/resources/trix/trix.js"></script>
    <!-- <script src="/resources/pnotify/pnotify.custom.min.js"></script> -->
    <script>
        <?php flash(); ?>
    </script>
  </body>
</html>