<?php
require_once('includes/init.php');
?>

<!doctype html>
<html lang="en">

<?php
require('./header.php');
$car = $_GET['car'];
$make = $_GET['make'];
$model = $_GET['model'];
$price = $_GET['price'];


echo "<div style='text-align:top'>$make, $model</div>";
echo "<img src='{$inventoryImagePath}car{$_GET['car']}-large.jpg'></img>";
echo "<div style='postion: bottom'>$$price</div>";

require './footer.php';
?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
