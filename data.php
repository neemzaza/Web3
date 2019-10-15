<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="../test/css/bootstrap-4.3.1.css" rel="stylesheet">
	  <link href="css/stylewowwow.css" rel="stylesheet">
  </head>
  <body>
  <header>
	  <div class="content">
      <center>
		  <br><br><br><br><br><br><br>
		  <img src="images/ImgResponsive_Placeholder.png" class="rounded-circle img-fluid" alt="Placeholder image">
		  <h1>HELLO WORLD</h1>
		  </center>
	  </div>
	  <div class="overlay"></div>
	  </header>
  
	  <section class="site">
	    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Navbar</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		      <ul class="navbar-nav mr-auto">
		        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
		        <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
		        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
		          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="#">Something else here</a> </div>
	            </li>
		        <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
	          </ul>
		      <form class="form-inline my-2 my-lg-0">
		        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	          </form>
	      </div>
	    </nav>
		  <p>Your Email:</p><?php echo $_GET['email1']; ?><br><br>
		  <p>Your Password:</p><?php echo $_GET['email12']; ?>
		  <!-- card ปลื้มและมิ้นช่วยกันจำ -->
	  </section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../test/js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../test/js/popper.min.js"></script> 
  <script src="js/style.js"></script> 
  <script src="../test/js/bootstrap-4.3.1.js"></script>
</body>
</html>