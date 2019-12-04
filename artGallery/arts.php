<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
?>	
	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body text-center">
                    <p class="about_us_info">
						Here's a sneek peek of more art!
                    </p>
                    <div class="container recent_product_container">
                              <div class="row recent_img">
                                <div class="col-md-6"><img src="images/painting1.jpg"  alt="Cinque Terre"></div>
                                <div class="col-md-6"><img src="images/painting2"  alt="Cinque Terre"></div>
                           
                              </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-6">Timeless Beauty</div>
                                    <div class="col-md-6">My Dear</div>
                                   
                                </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-6"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    <div class="col-md-6"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    
                                </div>
                            </div>

                  </div>
                </div>
                </div>
            <?php
				require('right_side_cart.php');
			?> 
		  </div>
		  
<?php
	require('footer.php');
?>