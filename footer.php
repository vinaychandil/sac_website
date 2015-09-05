

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(22.3194444,87.30972222),
    zoom:18,
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
<link type="text/css" rel="stylesheet" href="footer.css"  />

<hr>
    <div class="box5" style="background-color:#606860;color:black;">
	
	  <div class="col5">
		  <div id="googleMap" style="width:350px;height:auto;float:left;padding:10px;"></div>
		  </div>
		  
		  <div class="col5">
			 <b><br><br><center>
		  Office of Alumni Affairs & International Relations,<br>
		  Indian Institute of Technology,<br>
		  Kharagpur<br>
		  Pin-721302, West Bengal, India<br>
		  Ph: 03222-282236; <br>
		  Email: alumni@hijli.iitkgp.ernet.in
		  </center>
		  </b>
		  </div>
		   <div class="col5">
	 
	  <form action="submit.php" method="post" class="flex5" >
	  <h3><span class="glyphicon glyphicon-envelope"></span>   Contact Us:</h3>
	  <br>
	  <input type="text" name="email" placeholder="Email" style="width:300px;" class="flex5"/>
	  <br><br>
	  <br>
	  <textarea name="comment" rows="5" cols="40" placeholder="comments here" class="flex5"></textarea>
	  <br><br>
	  
	  <input type="submit" class="btn btn-info" value="submit" class="flex5">
	  
	  </form>
	  
	
</div>
 
