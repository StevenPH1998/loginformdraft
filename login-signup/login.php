<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-image: url('24116.jpg')">
<div class="d-flex justify-content-center align-items-center vh-100">
	<div class="box" id="box">	
    	<form class="shadow w-450 p-3" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label" id="textcolor">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		  <a href="index.php" class="link-secondary">Sign Up</a>
		</form>
		<script type="text/javascript"> 		
	const box = document.getElementById('box'); 		function moveBox(e) { 			
	const centerX = box.offsetLeft + box.offsetWidth / 2; 			
	const centerY = box.offsetTop + box.offsetHeight / 2; 			
	const mouseX = e.clientX; 			
	const mouseY = e.clientY; 			
	const distanceX = (mouseX - centerX) * 0.01; 			
	const distanceY = (mouseY - centerY) * 0.01; 			
	box.style.transform = `perspective(1000px) rotateY(${distanceX}deg) rotateX(${-distanceY}deg)`; 		} 		box.addEventListener('mousemove', moveBox); 
		</script>
    </div>
</div>
</body>
</html>