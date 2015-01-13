<?php 
		$pageName = "SupplyZone | Home Page";
		require 'inc/header.php';
?>


	<div class = "icons">
		<!--Icon Description Begins-->
		<div class = " container">
			<div class = "icon-list">
				<ul>
					<li class = "icon-col-1"> 
						<!--First Icon-->
						
							<img class = "icons-icon" src = "img/onestop.png" /> 
							<h3> One Stop Solution </h3>
							<p> Lorem ipsum dolor sit amet, 
								consectetur adipiscing elit. 
								Proin magna justo, mollis 
								nec sollicitudin non, 
								Suspendisse bibendum in
							 
							</p>
						
					</li>
					<li class = "icon-col-2"> 
						<!--second Icon-->
						<img class = "icons-icon" src = "img/airplane.png" /> 
						<h3> Scope Of Delivery </h3>
						<p> Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. 
							Proin magna justo, mollis 
							nec sollicitudin non, 
							Suspendisse bibendum in  
							 
						</p>
					</li>
					<li class = "icon-col-3"> 
						<!--third Icon-->
						<img class = "icons-icon" src = "img/time.png" /> 
						<h3> Dependable Business</h3>
						<p> Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. 
							Proin magna justo, mollis 
							nec sollicitudin non, 
							Suspendisse bibendum in
							
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
		<!--Icon Description ends-->

		<!--CLientele begins-->
		<div class = "clientele">	
			<div class = "container">
				<div class = "client-wrap">
					<h2> Clientele </h2>
					<ul>
						<li > <img class = "left" src = "img/arrow-left.png"> </li>
							<div class = "client-images">
								<li  class = "f-left"> <img src = "img/client1.png"> </li>
								<li  class = "f-left"> <img src = "img/client2.png"> </li>
								<li  class = "f-right"> <img src = "img/client3.png"> </li>
								<li  class = "f-right" > <img class = "last-image" src = "img/client3.png"> </li>
							</div>
						<li> <img class = "right" src = "img/arrow-right.png"> </li>
					</ul>
				</div>

				<div class = "client-images-small">
					<ul>
						<li  class= "small-img" class = "f-left-small"> <img src = "img/client1-small.png"> </li>
						<li  class="small-img" class = "f-left-small"> <img src = "img/client2-small.png"> </li>
						<li  class="small-img" class = "f-right-small"> <img src = "img/client3-small.png"> </li>
					</ul>
				</div>
			</div>
		</div>
		<!--Clientele Ends-->
		
		<!--Contact Form Begins-->
<?php
		include 'inc/form.php';
?>
		<!--contact form ends-->

<?php 
	
		require 'inc/footer.php';
?>

		