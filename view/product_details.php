<?php include 'header.php';?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="themes/images/products/<?php echo $phonecasedata["image"]; ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
				<h3><?php echo $phonecasedata["name"]; ?> </h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" action="./insertCart.php" method="post" >
				  <div class="control-group">
					<label class="control-label"><span><?php echo $phonecasedata["price"]; ?> </span></label>
					<div class="controls">
					<input type="hidden" name="phonecaseid" value="<?php echo $phonecasedata["id"]; ?>">
					<?php if($phonecasedata["value"] > 0) {?>
						<input type="hidden" class="root-quantity-js" name="originQuatity" value="<?php echo $phonecasedata["value"]; ?>">
						<input type="number" name="amount" value="<?php echo $phonecasedata["value"]; ?>" class="span1 quantity-js" placeholder="Qty."/>
						<button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					<?php } ?>
					<?php if($phonecasedata["value"] <= 0) {?>
						<img src="./themes/images/sold_out.jpg" style="width:200px; height:160px; object-fit:contain" alt="Out of stock">
						<!-- <input type="number" readonly name="amount" value="Out of stock" class="span1" placeholder="Out of stock"/> -->
						<button type="button" disabled class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					<?php } ?>
					
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4></h4>
				
				<hr class="soft clr"/>
				<p>
				<?php echo $phonecasedata["description"]; ?>
				
				</p>
				<a class="btn btn-small pull-right" href="#detail">More Details</a>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			
				
			
			
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<script>
	const rootQuantity = document.querySelector(".root-quantity-js").value;
	const quantity = document.querySelector(".quantity-js");
	quantity.addEventListener('change', (event) => {
		if(event.target.value > rootQuantity){
			quantity.value = rootQuantity;
		}
		if(event.target.value <= 1){
			quantity.value = 1;
		}
});

</script>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include 'footer.php';?>