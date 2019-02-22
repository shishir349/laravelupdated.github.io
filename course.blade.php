<!doctype html>
<html>
<head>
<title>Laravel Class</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}







.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>

					
				
	

</head>

<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button">HOME</a>
    <a href="/course" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Courses</a>

 
    </a>
  </div>

  <div class="w3-container">
  <h2>Course</h2>
  <p></p>
<?php
		$s="select * from users";
		$con=mysqli_connect("127.0.0.1","root","","lara_test"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
				$d=$fr[3];
				?>

  <table class="w3-table">
    <tr>
      <th>Course Id</th>
      <th>Course Name</th>
      <th>Course Duration</th>
            <th>Price</th>
    </tr>
    <tr>
      <td><?php echo $a; ?></td>
      <td><?php echo $b; ?></td>
      <td><?php echo $c; ?></td>
            <td><?php echo $d; ?></td>

    </tr>
   
   
  </table>
  				<?php
			}			
		}
	?>
	
</div>






			


<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
	</div>
</footer>
 
</body>
</html>