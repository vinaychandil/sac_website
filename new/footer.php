<html>
<head>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <link href="box.css" rel="stylesheet" type="text/css">
 <?php include 'metatags.php' ?>
  <?php include 'css_scripts.php'?>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(22.3194444,87.30972222),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
#1{
	
	font-family: "adelle-sans", Helvetica, Arial, Sans-Serif;
    font-size: 0.9rem;
}

</style>
</head>
<body>
<hr>
    <div class="box" style="background-color:#606860;color:black;">
	<div class="row" id="1">
	  <div class="col-md-3" id="verticalLine" style="float:left;left:10px;">
	    
		<br> 
	  <b>
		  Office of Alumni Affairs & International Relations,<br>
		  Indian Institute of Technology,<br>
		  Kharagpur<br>
		  Pin-721302, West Bengal, India<br>
		  Ph: 03222-282236; <br>
		  Email: alumni@hijli.iitkgp.ernet.in
		  
		  </b>
		  </div>
	  <div class="col-md-6" id="verticalLine" style="padding:35px;">
		  <div id="googleMap" style="width:480px;height:300px;float:left;right:25px;"></div></div>
	  <div class="col-md-3" style="float:right;right:55px;">
	 
	  <form action="submit.php" method="post">
	  <h3><span class="glyphicon glyphicon-envelope"></span>   Contact Us:</h3>
	  <br>
	  <input type="text" name="email" placeholder="Email" style="width:300px;"/>
	  <br><br>
	  <br>
	  <textarea name="comment" rows="5" cols="40" placeholder="comments here" ></textarea>
	  <br><br>
	  
	  <input type="submit" class="btn btn-info" value="submit">
	  
	  </form>
	  
	  
	  </div>
	</div>
</div>
 
</body>
</html>