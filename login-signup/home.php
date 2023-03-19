<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
    <style>
        body {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        img {
            width: 100%;
            height: 100%;
        }

    </style>
            <script src="/js/rainyday.min.js"></script>
            <script>
                function run() {
                    var image = document.getElementById('background');
                    image.onload = function () {
                        var engine = new RainyDay({
                            image: this
                        });
                        engine.rain([
                            [3, 6, 7]
                        ], 100);
                    };
                    image.crossOrigin = 'anonymous';
                    image.src = 'background.jpg';
                }
    
            </script>
</head>
<body onload="run();">
<div>       	
    <div class="shadow w-450 p-3 text-center">
	<img id="background" alt="" src=""  />
        <h3 class="display-4 typewriter" >Hello, <?=$_SESSION['fname']?> </h3>

        <a href="logout.php" class="btn btn-warning">
            Logout
        </a>
    </div>
</div>
<h4 class="typewriter"></h4>
</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>