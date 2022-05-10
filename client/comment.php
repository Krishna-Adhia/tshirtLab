<div class="row">
<div class="col-lg-12">
		
	<div class="col-lg-6" style="float:right;">
		<div class="review_box">
			<?php
							$ProductsID = $_GET['ProductID'];


							//Code to select data from comment table
							
							$con = mysqli_connect("localhost","root","","tshirt_design") or die('Unable to connect to DataBase');
							?>
			<h4>Add a Comment</h4>
			 <form  class="form-contact form-review mt-3" method="POST" action = "Con_AddComment.php?ProductID=<?php echo $ProductsID ?>">
			 	 <div class="form-group">
                  		
                  			<textarea class="form-control different-control w-100" name="Comment" cols="30" rows="5" placeholder="Enter Comment" required></textarea>
                   </div>

                     <div class="form-group text-center text-md-right mt-3">

                  				<button class="btn btn-outline-primary">Post Comment</button>
                  	</div>
			 </form>
		</div>
	</div>


	<div class="col-lg-6" style="float:left">
			<div class="review_list">
				
						<?php
							$query = "SELECT * FROM comment WHERE ProductID = '$ProductsID'";
							$result = mysqli_query($con,$query);
							foreach($result as $row)
								//code ended here to select the data from comment table
							{
						

						?>	
						<h4><?php echo ($row['UserName']);?></h4>
				
								<div class="review_item">
									<!-- <div class="media">
										<div class="media-body">
											
										</div>
									</div> -->
									<p><?php echo $row['ProductComment'];?></p>
									<?php
									}
									?>
								</div>
			</div>
		</div>

</div>
</div>