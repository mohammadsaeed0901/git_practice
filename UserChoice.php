

<?php


$template1=null;
$template2=null;





//first step: connect to database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "poroje_narm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



if(isset($_GET['deleteTemplate1']))
{

    $sql= "SELECT tag FROM choice WHERE num='1'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM choice WHERE num='1'";
        $conn->query($sql);

    }
}


if(isset($_GET['deleteTemplate2']))
{

    $sql= "SELECT tag FROM choice WHERE num='2'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM choice WHERE num='2'";
        $conn->query($sql);

    }
}

if(isset($_GET['filename']))
{
    $name=$_GET['filename'];

    if($name=="Template 1.html"){

        $sql= "SELECT tag FROM choice WHERE num='1'";
        $result1= $conn->query($sql);
        if($result1!=null){
            // sql to delete a record
            $sql = "DELETE  FROM choice WHERE num='1'";
            $conn->query($sql);

        }

        $tag1='<div class="box box1 portfolio-item">
				<div class="portfolio-wrap">
					<figure>
						<img src="img/style2.jpg" class="img-fluid" alt="">
						<a href="Template 1.html" class="link-preview venobox" data-gall="portfolioGallery" title="View"><i class="far">&#xf06e;</i></a>
						<button  class="link-details" title="Delete" type="submit" name="deleteTemplate1" value="1" ><i class="far">&#xf2ed;</i></button>

					</figure>
				</div>
				<div class="text">Template 1</div>
			</div>';
        $sql = "INSERT INTO choice(num,tag)VALUES ('1','$tag1')";
        mysqli_query($conn, $sql);

    }if ($name=="Template 2.html")
    {

        $sql= "SELECT tag FROM choice WHERE num='2'";
        $result1= $conn->query($sql);
        if($result1!=null){
            // sql to delete a record
            $sql = "DELETE  FROM choice WHERE num='2'";
            $conn->query($sql);

        }


        $tag2='<div class="box box2 portfolio-item">
				<div class="portfolio-wrap">
					<figure>
						<img src="img/style3.jpg" class="img-fluid" alt="">
						<a href="Template 2.html" class="link-preview venobox" data-gall="portfolioGallery" title="View"><i class="far">&#xf06e;</i></a>
						<button  class="link-details" title="Delete" type="submit" name="deleteTemplate2" value="1" ><i class="far">&#xf2ed;</i></button>
					</figure>
				</div>
				<div class="text">Template 2</div>
			</div>';
         $sql="INSERT INTO choice(num,tag)VALUES ('2','$tag2')";
        mysqli_query($conn, $sql);

    }
}




$sql= "SELECT tag FROM choice WHERE num='1'";
$result1= $conn->query($sql);
$row1 = mysqli_fetch_assoc($result1);
if($row1!=null){
$template1=$row1["tag"];
}


$sql= "SELECT tag FROM choice WHERE num='2'";
$result2= $conn->query($sql);
$row2 = mysqli_fetch_assoc($result2);
if($row2!=null){
    $template2=$row2["tag"];
}




?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> User's Choice </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="img/iconfinder_wordpress.png" rel="icon">
    <link href="img/iconfinder_wordpress.png" rel="apple-touch-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js'>
        <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
            <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
            <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
            <link href="vendor/venobox/venobox.css" rel="stylesheet">
            <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="vendor/aos/aos.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            background-image: url("img/Choice.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Georgia;
        }

        .background {
            position: relative;
            height: 100vh;
            width: 100%;
        }

        .background::before {
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;

        }

        h1 {
            position: relative;
            text-align: center;
            z-index: 2;
            border: 6px groove #2434C7;
            border-radius: 20px 20px 20px 20px;
            width: 40%;
            box-sizing: border-box;
            margin: auto;
            background-color: white;
        }

        .box {
            background-color: #0080ff;
            width: 20%;
            height: 150px;
            display:inline-block;
            margin:10px 10px;
            border-radius:5px;
            border: 6px groove green;
        }

        .box3 {
            height: 500px;
        }


        .box img {
            width: 100%;
            height: 80%;
        }

        .box:hover {
            cursor: pointer;
        }
        .text {
            color:white;
            font-weight:bold;
            text-align:center;
        }
        #container {
            white-space:nowrap;
            text-align:center;
        }

        .formstyle {
            background-color: #0080ff;
            border-radius:5px;
            width: 40%;
            height: 100px;
            display: inline-block;
            border: 6px groove green;
        }

        .portfolio-wrap {
            box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .portfolio-wrap:hover {
            box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.16);
        }

        .portfolio-item {
            position: relative;
            height: 80%;
            overflow: hidden;
        }


        .portfolio-item figure {
            background: #000;
            overflow: auto;
            width: 100%;
            position: relative;
            border-radius: 4px 4px 0 0;
            margin: auto auto;
        }

        .portfolio-item figure:hover img {
            opacity: 0.4;
            transition: 0.3s;
        }

        .portfolio-item figure .link-preview, .portfolio-item figure .link-details {
            position: absolute;
            display: inline-block;
            opacity: 0;
            line-height: 1;
            text-align: center;
            width: 36px;
            height: 36px;
            background: #fff;
            border-radius: 50%;
            transition: 0.2s linear;
        }

        .portfolio-item figure .link-preview i, .portfolio-item figure .link-details i {
            padding-top: 6px;
            font-size: 22px;
            color: #333;
        }

        .portfolio-item figure .link-preview:hover, .portfolio-item figure .link-details:hover {
            background: #18d26e;
        }

        .portfolio-item figure .link-preview:hover i, .portfolio-item figure .link-details:hover i {
            color: #fff;
        }

        .portfolio-item figure .link-preview {
            left: calc(50% - 38px);
            top: calc(50% - 18px);
        }

        .portfolio-item figure .link-details {
            right: calc(50% - 38px);
            top: calc(50% - 18px);
        }

        .portfolio-item figure:hover .link-preview {
            opacity: 1;
            left: calc(50% - 44px);
        }

        .portfolio-item figure:hover .link-details {
            opacity: 1;
            right: calc(50% - 44px);
        }


    </style>
</head>

<body>

<section class="background">
    <br><br><br>
    <h1>
        Choose Your Template:
    </h1>
    <br><br><br>
    <form method="get">
        <div id="container">


            <?php
            echo $template1;
            echo $template2;
            ?>

            <div class="box box3 portfolio-item">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="img/style1.png">
                        <a href="main.php" class="link-preview venobox" data-gall="portfolioGallery" title="View"><i class='far'>&#xf06e;</i></a>
                        <a href="#" class="link-details" title="Delete"><i class='far'>&#xf2ed;</i></a>
                    </figure>
                </div>
                <div class="text">Style Your Website</div>
            </div>
    </form>
            <br><br><br>
            <h1>
                OR
            </h1>
            <br><br><br>
            <form class="formstyle" action="" method="get">
                <br>
                <label for="myFile">Upload Your Template: </label><br><br>
                <input type="file" id="myFile" name="filename">
                <input type="submit">
            </form>
        </div>


</section>


</body>
</html>
