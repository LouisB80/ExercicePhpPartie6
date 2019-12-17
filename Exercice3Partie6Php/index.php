<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 3 Partie 6 PHP</title>
</head>
<body>
  <h1>Exercice 3 Partie 6 PHP</h1>
  <div class="container">
      <div class="row">
          <p class="col"><a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Test</a></p>    
      </div>
      <div class="row">
          <p class="col">
              <?php  
              if(isset($_GET['startDate'], $_GET['endDate']))
              {
                  echo 'startDate : ' . $_GET['startDate'] . '</br>endDate : ' . $_GET['endDate'];                  
              }
              else
              {
                  echo 'Il manque un paramètre';
              }
              ?>
          </p>          
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>