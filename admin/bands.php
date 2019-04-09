<?php

include("connection.php");



$check = "SELECT Id,name,email FROM bandauth";
$check2 = "SELECT * FROM songs";

//echo "$num_rows Rows\n";
$result = mysqli_query($conn,$check);
$result2 = mysqli_query($conn,$check2);
$num_rows =mysqli_num_rows($result);
$num_rows2 =mysqli_num_rows($result2);

$i = 1;

if(mysqli_num_rows($result)>0){

while($row = mysqli_fetch_assoc($result)){

    $id[$i] = $row['Id'];
    $name[$i] = $row['name'];
    $email[$i] = $row['email'];

    $i = $i + 1;
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Bands </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UGN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="bands.php">Bands</a></li>
            <li><a href="songs.php">Songs</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Bands <small> Manage Site Bands</small></h1>
          </div>
      
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Bands</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              
              <a href="songs.php" class="list-group-item"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Songs <span class="badge"> <?php echo $num_rows2; ?></span></a>
              <a href="bands.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Bands <span class="badge"> <?php echo $num_rows; ?></span></a>
            </div>

            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Bands</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Search Bands...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                      <?php for ($i = 1; $i <= $num_rows; $i++){

                      echo '<td>'.$id[$i].'</td>
                        <td>'.$name[$i].'</td>
                        <td>'.$email[$i].'</td>
                        
                      </tr>';} ?>

                      
                    </table>
                  
                     
                        

              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
    

    <footer id="footer">
      <p>Copyright Underground Nation, &copy; 2019</p>
    </footer>

    

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
