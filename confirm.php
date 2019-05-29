<!DOCTYPE html>
<html>

    <head>
        <title>DogFetch</title>
        <link rel="stylesheet" href="includes/style.css">
        <meta charset= "UTF-8">
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

    </head>

    <body id="listDogsPage">
        <header>

            <section class="firstHeader">
                <div class="humborger">                        
                    <span></span> 
                    <span></span> 
                    <span></span> 
                </div>
        
        
                <div  class="bell"> <i class="fa fa-bell"   style="font-size:25px; display: block;"></i></div>                               
        
                <form class="search" action="#.php">
                    <button class="searchButt" type="submit"><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="Search.." name="search">
                </form>
                        
                <div class="helloUSER">
                    <h4>ערב טוב שרון</h4>
                </div>
        
                <div id="Logo">
                        <span class='fas fa-paw paw1'></span>
                        <h1 class="Hdog">Dog </h1>
                        <span class="logoIMG"></span> 
                        <h1 class="Hfetch"> Fetch</h1> 
                        <span class='fas fa-paw paw2'></span>    
                    </div>
            </section>
        
  
            <section class="secHeader"> 
                <button class="goBack" onclick="goBackTOindex()"><i class="fa fa-arrow-right"></i></button>
                <h3 class="Hh3-header h3ONmq">כלב נוסף</h3>

                <div class="navHeader"> 
                    <nav>
                        <ul>
                            <li><a href="#">נתונים</a></li>
                            <li><a href="#">דוח מעקבים</a></li>
                            <li><a href="#">GPS מעקב </a></li>
                            <li><a  href="#">Wifi מעקב</a></li>
                        </ul>
                    </nav>
                </div>
            </section>

   
        </header>

        <main>
            <div class="container2">
                <div class="col-xs-20 col-md-10 col-md-offset-4 col-xs-offset-3">
                     <?php 
                    $myFile = "dogsData.json";
                    $arr_data = array(); 
                    $formdata = array(
                        'name'=> $_GET["name"],
                        'breed'=> $_GET["breed"],
                        'age'=>$_GET['age'],
                        'height'=> $_GET['height'],
                        'weight'=> $_GET['weight'],
                        'gender'=> $_GET['gender']
                     );
                     // Push user data to array
	   array_push($arr_data,$formdata);
       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents($myFile, $jsondata)) {
            echo '<h2><br><br><br> המידע נשמר בהצלחה<br></h2>
            <div class="col-xs-20 col-md-10 col-md-offset-1 col-xs-offset-3">
            <a href="listDogsPage.html" class="btn btn-primary btn-lg active " id="finalize" role="button">סיום</a></div>
            <div class="phpPage"></div>'
            ;
	    }
	   else 
	        echo "error";
            ?>

<!--image upload-->


<!-- <?php
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["pics"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["pics"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["pics"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["pics"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["pics"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
?> -->
                </div>
            </div>

                
        </main>

        <footer>
            <div class="btn-group-footer">
                <button class="button" onclick="pageIndex()"><i class="fa fa-home" style="font-size: 25px;"></i>בית</button>
                <button class="button"><i class='fas fa-dog' style="font-size: 30px;"></i>הכלב-שלי</button>                            
                <button class="button"><i  class="fa fa-map" style="font-size: 25px;"></i> Map</button>
                <button class="button"><i class="fa fa-battery-full" style="font-size: 25px;"></i> סוללה</button>
            </div>
        </footer>

        <script src="./includes/script.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </body>
</html>