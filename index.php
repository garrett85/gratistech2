<?php
require_once('includes/init.php');

?>

<!doctype html>
<html lang="en">

<?php
require('./header.php');

?>
<main>
<?php
	if(!isset($_SESSION['userSignedIn']))
		echo "<div style='text-align: right'><a href='login.php'>Log In</a></div>";
	else
	{
		echo "<div sytle='text-align: right'>{$_SESSION['userSignedIn']}</div>";
		echo "Sign Out";
	}
?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Our Cars</h1>
        <p class="lead text-muted">Demo dealership, php and MySQL generated content.</p>
        <p>
          <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php
		Vehicle::display_product_slide($queryInventory);

// foreach($product as $car)
// 	echo $car->get_price()."<br>";
?>

      </div>
    </div>
  </div>

</main>

<?php
require './footer.php';
 ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
