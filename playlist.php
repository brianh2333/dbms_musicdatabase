<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

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
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="playlist.php">Playlists <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deleteSample.php">Search </a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <p class="lead">Text.<br> Text.</p>
        <hr>

        <h3> Create Playlists</h3>

        <form method="post" action="helperFunctions.php">

            <div class="form-group">
                <label for="exampleFormControlInput1">Paper I.D. </label>
                <input type="text" class="form-control" name="pid" id="exampleFormControlInput1" placeholder="e.g., 1234">

                <label for="exampleFormControlInput2">Paper Title </label>
                <input type="text" class="form-control" name="paperTitle" id="exampleFormControlInput2" placeholder="e.g., DBMS">

            </div>
            <button type="submit" name="insertIntoPaper" class="btn btn-primary">Submit</button>

            <div
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

        </form>

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
