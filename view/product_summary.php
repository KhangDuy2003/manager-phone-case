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
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small> <?php echo count($ShoppingCart); ?>
	Item(s) </small>]<a href="home.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	
			
	<table class="table table-bordered">
              <thead>
                <tr>
					<th></th>
                  <th>Product</th>
				  <th>Title</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th style="display:block">Total</th>
				</tr>
              </thead>
              <tbody>
			  <?php foreach($ShoppingCart as $item) {?>
                <tr>
				
				<td><a href="./cart.php?de=<?php echo $item['cartId']; ?>" style="display: flex;align-item:center; justify-content: center;"><img style="width:30px; height:30px; object-fit:contain" src="./themes/images/bin.png" alt=""></a></td>
                  <td><img width="60" src="themes/images/products/<?php echo $item['image']; ?>" alt=""/></td>
				  <td ><?php echo $item['name']; ?></td>
                  <td ><span class="content-custom"><?php echo $item['description']; ?></span></td>
				  <td>
					<div class="input-append"><input readonly class="span1" style="max-width:34px" value="<?php echo $item['quantity']; ?>" placeholder="1" id="appendedInputButtons" size="16" type="text">
					</div>
				  </td>
                  <td><?php echo $item['price']; ?></td>
                  <td style="max-width:50px"><?php echo $item['cost']; ?></td>
                </tr>
            <?php } ?>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?php echo $_SESSION['PRICE']; ?> </strong></td>
                </tr>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>
			
			<table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include 'footer.php';?>