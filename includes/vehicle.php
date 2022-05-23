<?php
require_once('includes/init.php');


class Vehicle
{
	private $vehicle_id;
	private $make;
	private $model;
	private $year;
	private $price;

	function __construct($vehicle_id, $make, $model, $year, $price)
	{
		$this->vehicle_id = $vehicle_id;
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		$this->price = $price;
	}

	public function get_vehicle_id()
	{
		return $this->vehicle_id;
	}

	public function get_make()
	{
		return $this->make;
	}

	public function get_model()
	{
		return $this->model;
	}

	public function get_year()
	{
		return $this->year;
	}

	public function get_price()
	{
		return $this->price;
	}

	// public function add_to_favorites()
	// {
	// 	function not emplemented;
	// }

	static function display_product_slide($queryInventory)
	{
		global $inventoryImagePath;
		//$product = array();
		//$info = array();
		$loopCounter = 0;
		$item = 1;
		while($row = $queryInventory->fetch_assoc())
		{
			$product[$loopCounter] = new Vehicle($row['vehicleID'], $row['make'], $row['model'], $row['year'], $row['price']);

		echo <<<_SLIDE
        <div class="col">
          <div class="card shadow-sm">
            <!-- <img width='100%' height='100%' src={$inventoryImagePath}car{$item}-large.jpg></img> -->
			<a href='../productpage.php?car={$product[$loopCounter]->get_vehicle_id()}
										&make={$product[$loopCounter]->get_make()}
										&model={$product[$loopCounter]->get_model()}
										&year={$product[$loopCounter]->get_year()}
										&price={$product[$loopCounter]->get_price()}
				'><img width='100%' height='100%' src={$inventoryImagePath}car{$product[$loopCounter]->get_vehicle_id()}-large.jpg></img></a>
            <div class="card-body">
              <p class="card-text">Click on vehcile for a larger image and more information, including Make, Model, and Price.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Add To Favorites</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
_SLIDE;
$item++;
$loopCounter++;
		}
	}

}
?>
