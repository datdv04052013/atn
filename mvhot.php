<?php

		include "admin/connect.php";
	 	
         if( isset($_GET['search']) ){
            $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
            $sql = "select * from songs, artists where songs.artist_id = artists.id and name = '$name'";
		 }
		 else{
			$sql = "select * from songs, artists where songs.artist_id = artist.id ";
		 }
	 	$result = $con->query($sql);



?>

<!-- list product -->


<div class="container">
		<div class="row mt-4">
			<h2 class="list-product-title">Best Seller</h2>
			<div class="list-product-subtitle">
				<p>All the best seller toys today</p>
			</div>
			<div class="product-group">
				<div class="row">
					<?php
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div class="col-md-3 col-sm-6 col-12">
						<div class="card card-product mb-3">
							<img class="card-img-top" src="images/<?php  echo $row['image'];?>">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['name'];?></h5>
								<p class="card-text">Brand: <?php  echo $row['artist_name'];?></p>
								<p class="card-price">Price: $<?php echo $row['price'];?></p>
								<audio id='audio_1' controls style="width: 220px;" preload="none" autostart="0">
									<source src='images/<?php echo $row['sound'];?>' />
								</audio>

								<input type="submit"  class="btn btn-danger btn-block "name="addCart" value="Add To Cart">
							</div>
						</div>
					</div>	
					<?php  } ?>		
				</div>
			</div>
		</div>
		
		

</div>
<!-- end list product -->
