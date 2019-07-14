<?php
    include 'db.php';
    
    if(!empty($_POST["loginMail"])){
        $query = "SELECT * FROM tbl_users_212 WHERE email='"
        . $_POST["loginMail"]
        ."' AND password = '"
        . $_POST["loginPass"]
        ."'";
        
        $result = mysqli_query($connection , $query);
        $row = mysqli_fetch_array($result);
        if(is_array($row)) {
            header("Location: frontPage.php");
        } else {
            $message = "Invalid Username or Password!";
        }
    }
    ?>

<!DOCTYPE html>
    <html>
        <head>
                <meta name="viewport" content="width=device-width, initial scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="./includes/style_new_proj.css">
                <meta charset="UTF-8">
                <title>DogFetch- Login</title>
        </head>

        <body id="wrapper">
            <header>
                <div class="navbar navbar-custom navbar-static-top" id="notonapp">
                    <div class="container">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="moveRight">
                            <ul class="nav navbar-nav" id="wi">
                                <li class="active"><a href="#">הגדרות</a></li>
                                <li class="active"><a href="#">טיפול משמעת</a></li>
                                <li class="active"><a href="#"> WIFI מעקב </a></li>
                                <li class="active"><a href="#"> GPS מעקב </a></li>
                                <li class="active"><a href="listDogsPage.html">הכלבים שלי</a></li>   
                                <li><a href="index.php">בית</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>               
            </header>

            <main style="background-color: inherit;">      
                <div class="container">

                    <div class="row" id="pwd-container">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <section class="login-form">
                            <form method="post" action="#" role="login">
                                <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
                                <input type="email" name="loginMail" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />
                                
                                <input type="password" class="form-control input-lg" name="loginPass" id="loginPass" placeholder="Password" required="" />
                                <div class="pwstrength_viewport_progress"></div>


                                <button type="submit" class="btn btn-primary">Sign in</button>
                                <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                                    <a href="#">Create account</a> or <a href="#">reset password</a>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </main>
        </body>

        <script src="./includes/main.js"></script>
    </html>
