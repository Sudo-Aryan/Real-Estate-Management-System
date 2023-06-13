<?php
$conn =mysqli_connect('127.0.0.1','root','','rs');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Real-Estate Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div>	
<div class="wrap"> 
<nav class="navbar navbar-default navbar-trans navbar-expand-lg accordion-collapse">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="index.html"><span style="color:rgb(0,0,0)">HAL-Estate</span><span class="color-b">Agency</span></a>

    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="index.html"><h2>Home</h2></a>
        </li>

        

        <li class="nav-item">
          <a class="nav-link " href="property-grid.html"><h2>Property</h2></a>
        </li>


        <li
        class="nav-item">
        <a
        class="nav-link"
        href="admin.php"><h2>Admin</h2></a>
        </li>

      </ul>
    </div>

  </div>
</nav>

</div>

</div>
<center>

<div class="main" >
	<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div style="background-color:rgb(12,4,78);height:500px; width:400px ; border-radius: 20px;margin-bottom: 60px;" >
  <h1>
  <span style="color:rgb(239,209,196)">INSERT PROPERTY</span>
  </h1>
	<label for="" style="color: antiquewhite;">Type</label>
		<input type="text" name="resi" id="" style="margin-top: 50px;" ><br>
		<label for="" style="color: antiquewhite;">City</label>
    <input type="text" name="city" id="" style="margin-top: 50px;" ><br>
		<label for="" style="color: antiquewhite;">Price</label>
		<input type="text" name="price"  style="margin-top: 30px" id=""><br>
		<label for="" style="color: antiquewhite;">Rooms</label>
		<input type="text" name="bed"  style="margin-top: 30px; margin-bottom: 30px;"id=""><br>
		<label for="" style="color: antiquewhite;">𝐈𝐦𝐚𝐠𝐞</label>
		<input type="file" name="image" style="margin-bottom: 40px;" id=""><br>
		<button name="upload" class="btn btn-b">Upload</button>

	</div>	
	</form>
</div>


</center>

<table class="table" style="background-color:rgb(12,4,78); color:rgb(239,209,196);border-radius: 20px;">
	<thead>
	  <tr>
		<th scope="col">House_id</th>
		<th scope="col">Residence Type</th>
		<th scope="col">City</th>
		<th scope="col">Price</th>
		<th scope="col">Rooms</th>
		<th scope="col">Property Image</th>
		<th scope="col"><span style="color:rgb(78, 208, 78)">DELETE</span></th>
		<th scope="col"><span style="color:rgb(78, 208, 78)">UPDATE</span></th>

	  </tr>
	</thead>
	<tbody style="background-color: #6c6c6cd9;border-radius: 30px;">
        <tr>
		<?php
		include 'config.php';
		$pic = mysqli_query($conn, "SELECT * FROM `property` ");
		while($row = mysqli_fetch_array($pic)){
			echo "
		 <tr >
			  <td>$row[hid]</td>
			  <td>$row[resi]</td>
			  <td>$row[city]</td>
			  <td>$row[price]</td>
			  <td>$row[room]</td>
			  <td><img src='$row[image]' width='200px' height ='100px'</td>
              <td><a href='delete.php?id=$row[hid]' class ='btn btn-b' >Delete</a></td>
			  <td ><a href='update.php?id=$row[hid]' class ='btn btn-b'>Update</a></td>
		  </tr>
		";
		}
		
		?>
        </tr>
	  
	</tbody>
  </table>

</body>
</html>