@extends('layouts.app')

@section('content')

<!--content-->
 <div class="panel panel-default text-center" >
           <div class="panel-heading">
		<h2><b>FEATURE PRODUCTS:</b></h2>
	</div>
	
</div>


	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="buy_cards"> <img src="images/waecresult.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>WAEC CARDS</h2>
            <p>BUY WAEC Result Checker</p>
						<div class="button"><span><a href="buy_data">Buy Now</a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="buy_cards"><img src="images/necochecker.jpg" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>NECO CARDS</h2>
              <p>BUY NECO Result Checker</p>
						  <div class="button"><span><a href="buy_cards">Buy Now</a></span></div>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="buy_cards"> <img src="images/nabtebchecker.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>BUY NABTEB CARDS </h2>
						<p>BUY NABTEB Result Checker</p>
						<div class="button"><span><a href="buy_cards">Buy Now</a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="buy_cards"><img src="images/waecgce.jpg" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>WAEC||NECO GCE</h2>
              <p>Registration Card</p>
						  <div class="button"><span><a href="buy_cards">Buy Now</a></span></div>
					</div>
				</div>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	

</div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="dashboard"><img src="images/buy_data.jpg" alt="" /></a>
           <h2>DATABUNDLE</h2>
					 <p>ALL NETWORK AT CHEAPER RATE</p>
					 <p><span class="price">MTN 1GB #750 </span><span class="price">2GB #1500</span></p>
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="dashboard" class="cart-button">Buy Now</a></span> </div>
				     <div class="button"><span><a href="dashboard" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="dashboard"><img src="images/startime.jpg" alt="" /></a>
					 <h2>START TIME</h2>
					 <p>At Cheaper Rate</p>
					 <p><span class="price">#640.89</span><span class="price">#620.87</span></p>
				     <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="dashboard" class="cart-button">Sub Now</a></span> </div>
				     <div class="button"><span><a href="dashboard" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="dashboard"><img src="images/gotv.jpg" alt="" /></a>
					 <h2>GoTv</h2>
					 <p>At Cheaper Rate</p>
					 <p><span class="price">#240.66</span><span class="price">#220.97</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="dashboard" class="cart-button">Sub Now</a></span> </div>
				     <div class="button"><span><a href="#" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<img src="images/dstv.jpg" alt="" />
					 <h2>DSTV</h2>
					 <p>At Cheaper Rate</p>
					 <p><span class="price">#436.22</span><span class="price">#415.54</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="dashboard" class="cart-button">Sub Now</a></span> </div>
				     <div class="button"><span><a href="dashboard" class="details">Details</a></span></div>
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="/access"><img src="images/web.jpg" alt="" /></a>
					 <div class="discount">
					 <span class="percentage">20%</span>
					</div>
					 <h2>WEB DEVELOPER </h2>
					 <p><span class="price">ANDROID</span><span class="price">lots more</span></p>
				     <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="/access" class="cart-button">Apply Now</a></span> </div>
				     <div class="button"><span><a href="/access" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="access"><img src="images/liberty_graphics.jpg" alt="" /></a>
					 <div class="discount">
					 <span class="percentage">22%</span>
					</div>
					 <h2>GRAPHIC DESIGN</h2>
					 <p><span class="price">Banner|Sticker</span><span class="price">Poster</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="access" class="cart-button">Order Now</a></span></div>
				     <div class="button"><span><a href="preview-4.html" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="access"><img src="images/computer_training.jpg" alt="" /></a>
					<div class="discount">
					 <span class="percentage">30%</span>
					</div>
					 <h2>COMPUTER TRAINING</h2>
					 <p><span class="price">3|6-MONTHS</span><span class="price">1-YEARS</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="access" class="cart-button">APPY Now</a></span> </div>
				     <div class="button"><span><a href="/access" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="images/giphy.gif" alt="" />
				  <div class="discount">
					 <span class="percentage">20%</span>
					</div>
					 <h2>UPDATE/BUY/SELL</h2>					 
					 <p><span class="price">JAMB|PUTME</span><span class="price">ADVERT</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="#" class="cart-button">Read More</a></span> </div>
				     <div class="button"><span><a href="access" class="details">Details</a></span></div>
				</div>
			</div>
    </div>
 </div>
</div>

@endsection
