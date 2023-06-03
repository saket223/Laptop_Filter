<?php
  require 'config.php';
  if (isset($_POST['action'])){
  	$sql = "SELECT * FROM info WHERE BRAND !=''";

  if (isset($_POST['brand'])){
  	$brand = implode("','",$_POST['brand']);
  	$sql .="AND BRAND IN('".$brand."')";
  }
  if (isset($_POST['processor'])){
    $processor = implode("','",$_POST['processor']);
    $sql .="AND PROCESSOR IN('".$processor."')";
  }
  if (isset($_POST['ram'])){
  	$ram = implode("','",$_POST['ram']);
  	$sql .="AND RAM IN('".$ram."')";
  }
  if (isset($_POST['display'])){
  	$display = implode("','",$_POST['display']);
  	$sql .="AND DISPLAY IN('".$display."')";
  }
  if (isset($_POST['storage'])){
  	$storage = implode("','",$_POST['storage']);
  	$sql .="AND DISK_SPACE IN('".$storage."')";
  }
  if (isset($_POST['cache'])){
    $cache = implode("','",$_POST['cache']);
    $sql .="AND CACHE IN('".$cache."')";
  }
  if (isset($_POST['os'])){
    $os = implode("','",$_POST['os']);
    $sql .="AND OS IN('".$os."')";
  }
  $result = $conn->query($sql);
  $output='';
  if($result->num_rows>0){
  	while($row = $result->fetch_assoc()){
      $output .='<div class="col-md-4 mb-3">
           	<div class="card-deck">
           		<div class="card">
           	<div class="card-border-danger">
           	<img src="'.$row['IMAGE'].'" width="500" height="275" class="card-img-top">
           	<div class="card-img-overlay">
           		<h6 style="margin-top: 250px;"class="text-light bg-info text-center rounded p-1">'.$row['MODEL'].'</h6>
           	</div>
           	<div class="card-body">
           		<h4 class="card-title text-danger">Price:'.($row['PRICE']).'/-</h4>
           		<p>
           			BRAND:'.$row['BRAND'].'<br>
           			PROCESSOR:'.$row['PROCESSOR'].'<br>
           			RAM:'.$row['RAM'].'<br>
           			STORAGE:'.$row['DISK_SPACE'].'<br>
           			GRAPHIC CARD:'.$row['GRAPHIC_CARD'].'<br>
           			DISPLAY:'.$row['DISPLAY'].'inches<br>
                CACHE MEMORY:'.$row['CACHE'].'<br>
                OPERATING SYSTEM:'.$row['OS'].'<br>
           		</p>
           		<div class="main">
                <ul>
                <li><a href="'.$row['BUY_NOW'].'">BUY NOW</a></li> 
                </ul>
                </div>
                </p>

           		<style>
           			.card-body 
           			{
           				font-weight: bold;
           				text-align: left;
           				font-size: 14.2px;
           				font-color:black;
           			}
           			.card
           			{
           				border-width: 3px;
           				border-color: black;
           			}
           			.main
                    {
                    font-family: century gothic;
                    transform: translate(13%,25%);
                    font-size: 25px;
                    
                    }
ul{
    list-style-type: none;
}
ul li{
    display: inline;
}
ul li a{
    background-color: red;
    text-decoration: none;
    color: white;
    padding: 5px 20px;
    border-radius: 10px;
    border: 2px solid black;  
}
ul li a:hover{
    background color: yellow;
    color: yellow;
}
           		</style>
           	</div>
           	</div>
           	</div>
           </div>
           </div>';
   }	
  }
  else{
  	$output = "<h3>NO PRODUCTS FOUND!</h3>";
  }
  echo $output;
 }
?>