<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Infinite Loop - Bootstrap 4.0 HTML Template</title>
      <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
      <link rel="stylesheet" href="slick/slick.css">
      <link rel="stylesheet" href="slick/slick-theme.css">
      <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="playlist.php">Playlists</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="search.php">Search</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Music Database</h1>
        <p class="lead">Some text.<br> Some text.</p>
          <hr>
          <h3> Welcome</h3>

          <!-- first, establish a connection -->

          <?php
            include 'conf/connection.php'; // establish connection


            $sql = "SELECT * from paper";

            $result = $conn->query($sql);

            if ($result -> num_rows > 0) {
                echo " <table class='table-sm table-striped'>
                          <tbody>
                          <tr>
                              <td>pid</td>
                              <td>title</td>
                          </tr>
                      ";

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>$row[pid] </td>
                            <td>$row[title] </td>
                          </tr>
                         ";
                }
                echo "</tbody></table>";

            }else {
                echo "<p class='lead'> No results available </p>";
            }
            $conn->close();


          ?>


      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
