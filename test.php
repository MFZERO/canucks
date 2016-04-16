<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>History of the Vancouver Canucks</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	
</head>

<body>
<!--outer row-->	
	<div style="
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3); padding-top:50px;"  class="row medium-collapse large-collapse">
	   <div class="medium-12 columns">
		   <div class="logo">
				<a href="index.php"><img src="img/logo-wip.png" alt="Logo" /></a>
			</div>	
			<div style="text-align:center" class="show-for-medium">	
					<a class="button" href="index.php"><span>Home</span></a>
					<a class="button" href="logos.php"><span>Logo and Jersey History</span></a>
					<a class="button" href="captains.php"><span>Former Captains</span></a>
					<a class="button" href="coaches.php"><span>Former Head Coaches</span></a>
					<a class="button" href="records.php"><span>Team Records and Awards</span></a>
					
			</div>

        <div  class="small-12 columns show-for-small hide-for-medium" >            
		<select onChange="window.location.href=this.value" >
			<option value="index.php">Home</option>
			<option value="logos.php">Logo and Jersey History</option>
			<option value="captains.php">Former Captains</option>
			<option value="coaches.php">Former Head Coaches</option>
			<option value="records.php">Team Records and Awards</option>
			
		</select>
        </div> 			
			
<!--content row-->		
			
			<div class="row medium-collapse large-collapse">		
				
				<div style="background:red;" class="medium-12 columns">
				 <h1 style="padding:0px;margin:0px;background:blue;">Logo and Jersey History</h1>
		 <h4 class="prime">Primary Logos</h4>
<div class="row">	 
<div class="medium-2 columns"><!--column 1 start-->
		 <p><a data-open="img001"><img class="effect" src="img/1970-th.gif"></a></p>
		 <span>1970/71 - 1977/78 </span>
		 </div><!--reveal end-->
		 
		 
		<div class="reveal" id="img001" data-reveal><!--reveal start-->
			<img src="img/1970.png">
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
	     </div><!--column 1 end-->

	<div class="medium-2 columns"><!--column 2 start-->
				<p><a data-open="img002"><img class="effect" src="img/1978-th.gif"></a></p>
				<span>1978/79 - 1991/92 </span>
		</div><!--reveal 2 end-->
		
		
		<div class="reveal" id="img002" data-reveal><!--reveal 2 start-->
				<img src="img/1978.png">
				<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
	    </div><!--column 2 end-->
		
	<div class="medium-2 columns"><!--column 3 start-->
		 <p><a data-open="img003"><img class="effect" src="img/1992-th.gif"></a></p>
		 <span>1992/93 - 1996/97</span>
		 </div><!--reveal 3 end-->
		 
		 <div class="reveal" id="img003" data-reveal><!--reveal 3 start-->
			<img src="img/1992.png">
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>	
	     </div><!--column 3 end-->		
		
	<div class="medium-2 columns"><!--column 4 start-->
		 <p><a data-open="img004"><img class="effect" src="img/1997-th.gif"></a></p>
		  <span>1997/98 - 2006/07 </span>
		 </div><!--reveal 4 end-->
		 
		<div class="reveal" id="img4" data-reveal><!--reveal 4 start-->
			<img src="img/1997.png">
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div><!--column 4 end-->	
		
		
		<div class="medium-2 columns"><!--column 5 start-->
		 <p><a data-open="img005"><img class="effect" src="img/2007-th.gif"></a></p>
		  <span>2007/08 - Pres </span>
		 </div><!--reveal 5 end-->
		 
		<div class="reveal" id="img005" data-reveal><!--reveal 5 start-->
			<img src="img/2007.png">
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
 
		</div><!--column 5 end-->	
  
</div>		


<h4 class="home">Home Uniforms </h4>

				</div>
					   
			</div>
<!--end content row-->	


	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/smoothscroll.js"></script>
	<script src="js/vendor/collapse.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
	
  </div>	
</div> <!--end outer row-->	
</body>
</html>