<?php 
class Fruit {
	private $color;
	private $price;
	private $season;


	public function getColor(){
		return $this->color;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getSeason(){
		return $this->season;
	}
	public function setColor($color){
		return $this->color = $color;
	}
	public function setPrice($price){
		return $this->price = $price;
	}
	public function setSeason($season){
		return $this->season = $season;
	}

function __construct($color = 'somecolor', $price = 'someprice', $season = 'someseason'){

		$this->color = $color;
		$this->price = $price;
		$this->season = $season;

	}
}

$Apple = new Fruit('red', 10, 'autumn');
$Pear = new Fruit('yellow', 20, 'winter');
$Waterlemon = new Fruit('green', 30, 'summer');

$list_fruits = [
	"Apple" => array('color'=>'red', 'price'=>10, 'season'=>'autumn'),
	"Pear" => array('color'=>'yellow','price'=>20, 'season'=>'winter'),
	"Waterlemon" => array('color'=>'green', 'price'=>30, 'season'=>'summer')
];

if($_POST){
		$Name = $_POST['fruitname'];
		$Color = $_POST['fruitcolor'];
		$Price = $_POST['fruitprice'];
		$Season = $_POST['fruitseason'];
		

		if(!array_key_exists($Name, $list_fruits) && ($Name != $key)){

			$newfruit = new Fruit ($Color, $Price, $Season);

			$list_fruits[$Name] = array('color'=>$_POST['fruitcolor'], 'price'=>$_POST['fruitprice'], 'season'=>$_POST['fruitseason']);

			$newfruit = $list_fruits[$Name];

			}else{

			 echo "sorry this " . $Name . " is exist, please try another one";
			
		}
}			
?>

<!DOCTYPE html>
<html ang="en">
<head>
	<meta charset="UTF-8">
	<title>Fruit List</title>
	<style type="text/css">
		.red {
			color: red;
		}
		.yellow {
			color: yellow;
		}
		.green {
			color: green;
		}
		.orange {
			color: orange;
		}
		
	</style>
	
</head>
<body>
	<h1>This is CSS and HTML and PHP assignment</h1>
	<h2>
		<?php 
		echo '<ul>';
		foreach($list_fruits as $key => $value){
			// echo '<li style="color:' . $value['color'] . '">' . $key;
			echo '<li class="' . $value['color'] . '">' . $key;
			
			echo '<ul>';

			foreach($value as $type => $fruit){

				echo '<li>' . $type . ": " . $fruit . '</li>';
				
			}
			echo '</ul>';
			echo '</li>';
		}
		echo'</ul>';
	?>
	</h2>
	
	<form action="" method="post">
		<label for="fruit_name">Name:</label>
		<input type="text" id="fruit_name" name="fruitname">
		<br>
		<label for="fruit_color">Color:</label>
		<input type="text" id="fruit_color" name="fruitcolor">
		<br>
		<label for="fruit_price">Price:</label>
		<input type="text" id="fruit_price" name="fruitprice">
		<br>
		<label for="fruit_season">Season:</label>
		<input type="text" id="fruit_season" name="fruitseason">
		<br>
		<input type="submit" name="GO!">
	</form>
</body>
</html>







