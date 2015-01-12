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
						
							<img src = "img/onestop.png" /> 
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
						<img src = "img/airplane.png" /> 
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
						<img src = "img/time.png" /> 
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
						<li class = "left"> <img src = "img/arrow-left.png"> </li>
							<div class = "client-images">
								<li  class = "f-left"> <img src = "img/client1.png"> </li>
								<li  class = "f-left"> <img src = "img/client2.png"> </li>
								<li  class = "f-right"> <img src = "img/client3.png"> </li>
								<li  class = "f-right"> <img src = "img/client3.png"> </li>
							</div>
						<li> <img class = "right" src = "img/arrow-right.png"> </li>
					</ul>
				</div>
			</div>
		</div>
		<!--Clientele Ends-->
		
		<!--Contact Form Begins-->
<?php
		include_once 'inc/form.php';
?>
		<!--contact form ends-->

<?php 
	
		require 'inc/footer.php';
?>

		