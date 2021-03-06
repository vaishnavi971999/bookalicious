<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Bookalicious</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="#">Bookalicious</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>

            <!--dropdown bar
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Science</a></li>
                <li><a href="#">Fiction</a></li>
                <li><a href="#">Comics</a></li>
                <li role="separator" class="divider"></li>
            </ul>
            <li><a href="#">Contact</a></li>
                
              </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">
              <spam class="glyphicon glyphicon-search"></spam>
              </button>
            </form>
          
            <ul class="nav navbar-nav navbar-right">
              <li><a class="glyphicon glyphicon-shopping-cart" href="#"></a></li>
              <li href="login.php"><a class="glyphicon glyphicon-user" href="#"></a></li>
            </ul>-->
          

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        
      
        <h1 style="color:#582273;">Welcome to the world of books!</h1>
        <p class="lead" style="color:#582273;">Click on admin if you are an admin and user if you are the user.</p>
        <div class="btn-group" role="group" aria-label="...">
        <button  id="admin" type="button" class="btn btn-default" onclick="document.location = 'admin_login.php'">Admin</button><br><br>
        <button id="user" type="button" class="btn btn-default" onclick="document.location = 'user_login.php'">User</button>
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
       
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
