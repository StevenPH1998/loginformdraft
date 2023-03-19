<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Sign Up</title>
        <link
            rel="stylesheet"
            href="https://meyerweb.com/eric/tools/css/reset/reset200802.css"
		/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="./js/rainyday.min.js"></script>
		<script>
                function run() {
                    var image = document.getElementById('background2');
                    image.onload = function () {
                        var engine = new RainyDay({
                            image: this
                        });
                        engine.rain([
                            [3, 6, 7]
                        ], 100);
                    };
                    image.crossOrigin = 'anonymous';
                    image.src = '';
                }
    
            </script>
    </head>
<body onload="run();" style="background-image: url('https://i.postimg.cc/q7SdZQDC/background.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;" >
	<script>
                function run() {
                    var image = document.getElementById('background2');
                    image.onload = function () {
                        var engine = new RainyDay({
                            image: this
                        });
                        engine.rain([
                            [3, 6, 7]
                        ], 100);
                    };
                    image.crossOrigin = 'anonymous';
                    image.src = 'https://i.postimg.cc/q7SdZQDC/background.jpg';
                }
    
            </script>
        <div>
            <div
                class="d-flex justify-content-center align-items-center vh-100">
                <div class="box" id="box">
                    <form
                        class="shadow w-450 p-3"
                        action="php/signup.php"
                        method="post">
                        <h4 class="display-4 fs-1">Create Account</h4>
                        <br />
                        <?php if(isset($_GET['error'])){ ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>

                        <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fname"
                            value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" id="usern"
                                >User name</label
                            >
                            <input type="text" class="form-control" name="uname"
                            value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" id="pass">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="pass"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Sign Up
                        </button>
                        <a href="login.php" class="link-secondary" id="textcolor"> Login</a>
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
        </div>
    </body>
</html>
