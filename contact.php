<?php include"header.php"; ?>  
<?php include"nav.php" ?>


<!--link rel="stylesheet" href="css/font-awesome.min.css"/>-->
<style>
body{
font-family: 'Arima Madurai', cursive;
	background-image:url(img/5.jpg);
	background-attachment:fixed;
	
}
.icons{
list-style:none;
}
<!--http://www.kenya-information-guide.com-->
</style>

<body>


	<!-- a breafing about the team -->
	<section>
		<div class="container" style="background-color: #ffffff">
			<br><center><h4>Brian &amp; George</h4></center>
	
			<?php include"two.php"?>
</div>
	</section>
	
     <center> <p><h2><mark style="background-color:#ffffff">Talk to us</mark></h2></p></center>
	  </br>
	  </br>
	 
	<!--the trial-->
	 <div class="col-sm-6">
  <div  style="background:#000000;opacity:0.9;"id="contacts">
     <ul>
      <li>
        <div>
          <header class="major">
			  	<h2 style="color: white">Our Location</h2>
				<p style="color: #55ACEE">We are located in Westlands,Nairobi at the Devan plaza in westland.</p>
			</header>
        </div>
      </li>
      <li>
        <div>
		<div>
		
          <h2 style="color: white" >CALL CENTRE</h2>
         <p style="color: #55ACEE">Brian:(254) 70469-8243 
							<br>
							George:(254) 71790-3564</p>
			
        </div>
      </li>
      <li>
        <div>
          <h2 style="color: white">EMAIL</h2>
          <p><a href="#">brianmwaura83@gmail.com</a><br>
							<a href="#">jojkimani@gmail.com</a></p>
        </div>
      </li>
	   <li>
        <div>
         <h2 style="color: white">POSTAL ADDRESS</h2>
		<p style="color: #55ACEE">1234 crossway Road<br>
							(Westlands)Nairobi, zalego00000</p>
		
        </div>
      </li>
    </ul>
  </div>
</div>
 	<!--the trial-->	
<br>
	 <div class="col-sm-6 " id="map">
	<iframe class="image fit"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.70077602336!2d36.79834882975819!3d-1.258236452740491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1ssw!2ske!4v1489681378712" width="600" height="480" frameborder="0" style="border:0" allowfullscreen></iframe><br /><br />
        </div>
	
	</div>
	<script>sr.reveal('#map', {
           duration: 2000,
          origin:'right',
          distance:'300px',
		  viewFactor: 0.1
        });
		sr.reveal('#contacts',{
		 duration: 2000,
          origin:'left',
          distance:'300px',
		  viewFactor: 0.1
        });
		</script>
</body>
<?php include"footer.php" ?>