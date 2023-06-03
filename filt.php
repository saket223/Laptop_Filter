<?php
  require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADVANCED PRODUCT FILTER</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h3 class="text-center text-light bg-info p-3">WE WILL LOOK FOR THE BEST ACCORDING TO YOUR NEED</h3>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-2">
		  <h5>FILTER PRODUCT</h5>
		  <hr>
		  <h5 class="text-info">Select BRAND</h5>
		  <ul class="list-group"style="border: 0.5px solid gray">
		  	<?php
		  	$sql="SELECT DISTINCT BRAND FROM info ORDER BY BRAND";
		  	$result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
             	<div class="form-check">
             		<label class="form-check-label">
             			<input type="checkbox" class="form-check-input product_check" 
             			value="<?= $row['BRAND']; ?>" id="brand"><?= $row['BRAND']; ?>
             		</label>
             		<style>
             			.form-check-label 
             			{
                    margin-left: -13px;
             			}
             		</style>
             	</div>
             </li>
         <?php } ?>
		  </ul>
      <h5 class="text-info">Select PROCESSOR</h5>
      <ul class="list-group"style="border: 0.5px solid gray">
      <?php
        $sql="SELECT DISTINCT PROCESSOR FROM info ORDER BY PROCESSOR";
        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input product_check" 
                  value="<?= $row['PROCESSOR']; ?>" id="processor"><?= $row['PROCESSOR']; ?>
                </label>
              </div>
             </li>
         <?php } ?>
      </ul>

		  <h5 class="text-info">Select RAM</h5>
		  <ul class="list-group"style="border: 0.5px solid gray">
		  	<?php
		  	$sql="SELECT DISTINCT RAM FROM info";
		  	$result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
             	<div class="form-check">
             		<label class="form-check-label">
             			<input type="checkbox" class="form-check-input product_check"
             			value="<?= $row['RAM']; ?>" id="ram"><?= $row['RAM']; ?>
             		</label>
             	</div>
             </li>
         <?php } ?>
		  </ul>
            <h5 class="text-info">Select CACHE MEMORY</h5>
      <ul class="list-group"style="border: 0.5px solid gray">
        <?php
        $sql="SELECT DISTINCT CACHE FROM info";
        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input product_check"
                  value="<?= $row['CACHE']; ?>" id="cache"><?= $row['CACHE']; ?>
                </label>
              </div>
             </li>
         <?php } ?>
      </ul>
            <h5 class="text-info">Select OPERATING SYSTEM</h5>
      <ul class="list-group"style="border: 0.5px solid gray">
        <?php
        $sql="SELECT DISTINCT OS FROM info";
        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input product_check"
                  value="<?= $row['OS']; ?>" id="os"><?= $row['OS']; ?>
                </label>
              </div>
             </li>
         <?php } ?>
      </ul>

		  <h5 class="text-info">Select DISPLAY(inches)</h5>
		  <ul class="list-group"style="border: 0.5px solid gray">
		  	<?php
		  	$sql="SELECT DISTINCT DISPLAY FROM info ORDER BY DISPLAY";
		  	$result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
             	<div class="form-check">
             		<label class="form-check-label">
             			<input type="checkbox" class="form-check-input product_check" 
             			value="<?= $row['DISPLAY']; ?>" id="display"><?= $row['DISPLAY']; ?>
             		</label>
             	</div>
             </li>
         <?php } ?>
		  </ul>

		  <h5 class="text-info">Select STORAGE</h5>
		  <ul class="list-group"style="border: 0.5px solid gray">
		  	<?php
		  	$sql="SELECT DISTINCT DISK_SPACE FROM info ORDER BY DISK_SPACE";
		  	$result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
             <li class="list-group-item">
             	<div class="form-check">
             		<label class="form-check-label">
             			<input type="checkbox" class="form-check-input product_check" 
             			value="<?= $row['DISK_SPACE']; ?>" id="storage"><?= $row['DISK_SPACE']; ?>
             		</label>
             	</div>
             </li>
         <?php } ?>
		  </ul>
    </div>
	<div class="col-lg-10">
		<h5 class="text-center" id="textChange">ALL PRODUCTS</h5>
		<hr>
		<div class="text-center">
			<img src="img/loader.gif" id="loader" width="200" style="display:none;">
	</div>
		<div class="row" id="result">
			<?php
			$sql="SELECT * FROM info";
		  	$result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            ?>
           <div class="col-md-4 mb-3">
           	<div class="card-deck">
           		<div class="card">
           	<div class="card-border-danger">
           	<img src="<?= $row['IMAGE']; ?>" width="500" height="275" class="card-img-top">
           	<div class="card-img-overlay">
           		<h6 style="margin-top: 250px;"class="text-light bg-info text-center rounded p-1"><?= $row['MODEL']; ?></h6>
           	</div>
           	<div class="card-body">
           		<h4 class="card-title text-danger">Price: <?= ($row['PRICE']); ?>/-</h4>
           		<p>
           			BRAND: <?= $row['BRAND']; ?><br>
           			PROCESSOR: <?= $row['PROCESSOR']; ?><br>
           			RAM: <?= $row['RAM']; ?><br>
           			STORAGE: <?= $row['DISK_SPACE']; ?><br>
           			GRAPHIC CARD: <?= $row['GRAPHIC_CARD']; ?><br>
           			DISPLAY: <?= $row['DISPLAY']; ?> inches<br>
           		  CACHE MEMORY: <?= $row['CACHE']; ?><br>
                OPEARTING SYSTEM: <?= $row['OS']; ?><br>
              
           		<div class="main">
                <ul>
                <li><a href="<?= $row['BUY_NOW']; ?>">BUY NOW</a></li> 
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
           </div>
           <?php } ?>
		</div>
    </div>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
          $(".product_check").click(function(){
         	$("#loader").show();
         	var action = 'data';
         	var brand = get_filter_text('brand');
         	var ram = get_filter_text('ram');
         	var display = get_filter_text('display');
         	var storage = get_filter_text('storage');
          var cache = get_filter_text('cache');
          var os = get_filter_text('os');
          var processor = get_filter_text('processor');
            
            $.ajax({
            	url:'action.php',
            	method:'POST',
            	data:{action:action,brand:brand,ram:ram,display:display,storage:storage,cache:cache,os:os,processor:processor},
            	success:function(response){
            		$("#result").html(response);
            		$("#loader").hide();
            		$("#textChange").text("FILTERED PRODUCTS");
            	}
            })
         });

			function get_filter_text(text_id){
				var filterData = [];
				$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());
				});
				return filterData;
			}

		});
	</script>
</body>
</html>