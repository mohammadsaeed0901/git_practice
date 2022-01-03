<?php




//build text tag
function BuildText($text) {
    $startDiv='<div class="paraStyle results" >';
    $endDiv="</div>";
    return $startDiv.$text.$endDiv;
}


//build pic tag
function BuildPic($path) {
    $start='<img  src="';
    $end='" class="imgStyle" alt="photo"  >';
    return $start.$path.$end;
}
//build video tag
function BuildVideo($path){
    $start=' <video class="videoStyle" controls>
  <source src="';
    $between='"type="video/mp4">
  <source src="';
   $end='"type="video/ogg">
        Your browser does not support HTML video.
</video>';
            return$start.$path.$between.$path.$end;

}

//show save message or error message
function checkQuerry($connection,$querry)
{
    if (mysqli_query($connection, $querry)) {
        echo "";
    } else {
        echo "";
    }

}
//show delete message or error message
function deleteMessage($connection,$querry)
{

    if ($connection->query($querry) === TRUE) {
        echo "";
    } else {
        echo "";
    }
}




//first step: connect to database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "poroje_narm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed to database: " . $conn->connect_error);
}

//second step: get data from user

//type of weidget code:
/*
 * text=1
 * photo=2
 * video=3
 * link=4
 * list=5
 */

//text
$text1=null;
$text2=null;
$text3=null;
$text4=null;





//picture
$photo1=null;
$photo2=null;
$photo3=null;
$photo4=null;

//video
$video1=null;
$video2=null;
$video3=null;
$video4=null;

//link
$link1=null;
$link2=null;
$link3=null;
$link4=null;


//list
$list1=null;
$list2=null;
$list3=null;
$list4=null;




if (isset($_GET['videopath1']))
{
    $path=$_GET['videopath1'];
   $video1=BuildVideo($path);



    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='1'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='1'";
        deleteMessage($conn,$sql);

    }


       $sql = "INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('3', 'null','null','$video1' ,'null' ,'null' ,'1')";

       checkQuerry($conn, $sql);

}



if (isset($_GET['videopath2']))
{
    $path=$_GET['videopath2'];
    $video2=BuildVideo($path);





    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='2'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='2'";
        deleteMessage($conn,$sql);

    }





    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('3', 'null','null','$video2' ,'null' ,'null' ,'2')";

    checkQuerry($conn,$sql);

}
if (isset($_GET['videopath3']))
{
    $path=$_GET['videopath3'];
    $video3=BuildVideo($path);





    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='3'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='3'";
        deleteMessage($conn,$sql);

    }






    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('3', 'null','null','$video3' ,'null' ,'null' ,'3')";

    checkQuerry($conn,$sql);

}


if (isset($_GET['videopath4']))
{
    $path=$_GET['videopath4'];
    $video4=BuildVideo($path);





    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='4'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='4'";
        deleteMessage($conn,$sql);

    }




    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('3', 'null','null','$video4' ,'null' ,'null' ,'4')";

    checkQuerry($conn,$sql);

}




if (isset($_GET['photopath1']))
{
    $path=$_GET['photopath1'];
    $photo1=BuildPic($path);




    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='1'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='1'";
        deleteMessage($conn,$sql);

    }





    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('2', 'null','$photo1','null' ,'null' ,'null' ,'1')";

   checkQuerry($conn,$sql);

}
if (isset($_GET['photopath2']))
{
    $path=$_GET['photopath2'];
    $photo2=BuildPic($path);





    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='2'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='2'";
        deleteMessage($conn,$sql);

    }









    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('2', 'null','$photo2','null' ,'null' ,'null' ,'2')";

    checkQuerry($conn,$sql);


}
if (isset($_GET['photopath3']))
{
    $path=$_GET['photopath3'];
    $photo3=BuildPic($path);



    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='3'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='3'";
        deleteMessage($conn,$sql);

    }








    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('2', 'null','$photo3','null' ,'null' ,'null' ,'3')";
    checkQuerry($conn,$sql);



}
if (isset($_GET['photopath4']))
{
    $path=$_GET['photopath4'];
    $photo4=BuildPic($path);


    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='4'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='4'";
        deleteMessage($conn,$sql);

    }


    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('2', 'null','$photo4','null' ,'null' ,'null' ,'4')";
    checkQuerry($conn,$sql);


}


//text
if (isset($_GET['text1']))
{
    $text=$_GET['text1'];
    $text1=BuildText($text);


    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='1'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='1'";
        deleteMessage($conn,$sql);

    }



    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('1', '$text1','null','null' ,'null' ,'null' ,'1')";
    checkQuerry($conn,$sql);

}


if (isset($_GET['text2']))
{
    $text=$_GET['text2'];
    $text2=BuildText($text);



    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='2'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='2'";
        deleteMessage($conn,$sql);

    }







    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('1', '$text2','null','null' ,'null' ,'null' ,'2')";
    checkQuerry($conn,$sql);


}
if (isset($_GET['text3']))
{
    $text=$_GET['text3'];
    $text3=BuildText($text);


    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='3'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='3'";
        deleteMessage($conn,$sql);

    }






    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('1', '$text3','null','null' ,'null' ,'null' ,'3')";
    checkQuerry($conn,$sql);


}
if (isset($_GET['text4']))
{
    $text=$_GET['text4'];
    $text4=BuildText($text);






    $sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='4'";
    $result1= $conn->query($sql);
    if($result1!=null){
        // sql to delete a record
        $sql = "DELETE  FROM widget WHERE num='4'";
        deleteMessage($conn,$sql);

    }






    $sql="INSERT INTO widget(typeOfWidget,text,photo,video,link,list,num)VALUES ('1', '$text3','null','null' ,'null' ,'null' ,'3')";

    checkQuerry($conn,$sql);

}



















/* step three: show the wedight and save
 * this part of code load data from database and show it in page
 */




$sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='1'";
$result1= $conn->query($sql);
$sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='2'";
$result2= $conn->query($sql);
$sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='3'";
$result3= $conn->query($sql);
$sql= "SELECT typeOfWidget,text,photo,video,link,list FROM widget WHERE num='4'";
$result4= $conn->query($sql);




$row1 = mysqli_fetch_assoc($result1);

if($row1!=null) {
    switch ($row1["typeOfWidget"]) {
        case "1":
            $text1 = $row1["text"];
            break;

        case "2":
            $photo1 = $row1["photo"];
            break;
        case "3":
            $video1 = $row1["video"];
            break;
        case "4":
            $link1 = $row1["link"];
            break;
        case "5":
            $list1 = $row1["list"];
            break;
    }
}

$row2 = mysqli_fetch_assoc($result2);

if($row2!=null){
    switch ($row2["typeOfWidget"]) {
        case "1":
            $text2=$row2["text"];
            break;

        case "2":
            $photo2=$row2["photo"];
            break;
        case "3":
            $video2=$row2["video"];
            break;
        case "4":
            $link2=$row2["link"];
            break;
        case "5":
            $list2=$row2["list"];
            break;
    }
}
$row3 = mysqli_fetch_assoc($result3);
if($row3!=null){
    switch ($row3["typeOfWidget"]) {
        case "1":
            $text3=$row3["text"];
            break;

        case "2":
            $photo3=$row3["photo"];
            break;
        case "3":
            $video3=$row3["video"];
            break;
        case "4":
            $link3=$row3["link"];
            break;
        case "5":
            $list3=$row3["list"];
            break;
    }
}



$row4 = mysqli_fetch_assoc($result4);
if($row4!=null) {
    switch ($row4["typeOfWidget"]) {
        case "1":
            $text4 = $row4["text"];
            break;

        case "2":
            $photo4 = $row4["photo"];
            break;
        case "3":
            $video4 = $row4["video"];
            break;
        case "4":
            $link4 = $row4["link"];
            break;
        case "5":
            $list4 = $row4["list"];
            break;
    }

}












?>











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Site Builder </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
	<link href="img/iconfinder_wordpress.png" rel="icon">
	<link href="img/iconfinder_wordpress.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.fontselect.css">
  	<!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    ​<script>

      $(document).ready(function(){
		<!-- baz kardan dropdown marbot be widget aval -->
        $("#dropbtn").on("click" , function(){
            $("#myDropdown").toggle(".show");
		    $("#myDropdown2").hide();
		    $("#myDropdown3").hide();
		    $("#myDropdown4").hide();

		  <!-- widget photo -->
		  $("#photo").on("click" , function(){
			let Formphoto1 = document.createElement("FORM");
			var str = '<label for="myFile" class="results">Upload Your Image: </label><br><br><input type="file" id="myFile" name="photopath1"><input value="upload" type="submit">';
			$(Formphoto1).append(str);
			Formphoto1.name = "form1";
			$(Formphoto1).addClass("formsaz");
			$(".dropdown1").replaceWith(Formphoto1);
		  });

		  <!-- widget list -->
		  $("#list").on("click" , function(){
			let ol1 = document.createElement("ol");
			let str1 = '<p class="results">Choose your List:</p><li><button id="btn1-1" class="results">Cars</button></li>';
			$(ol1).append(str1);
			$(ol1).append('<li><button id="btn2-1" class="results">Foods</button></li>');
			$(ol1).append('<li><button id="btn3-1" class="results">Laptop</button></li>');
			$(ol1).addClass("styleList");
			$(".dropdown1").replaceWith(ol1);
			<!-- If you click on the 1th first list -->
			$("#btn1-1").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">BMW</li>');
				$(list).append('<li class="results">Mercedes-Benz</li>');
				$(list).append('<li class="results">Bugatti</li>');
				$(list).append('<li class="results">Ford</li>');
				$(list).append('<li class="results">Audi</li>');
				$(list).append('<li class="results">Porsche</li>');
				list.name = "listObject1-1";
				$(list).addClass("styleList");
				$(ol1).replaceWith(list);
			});

			<!-- If you click on the 2th first list -->
			$("#btn2-1").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Pizza</li>');
				$(list).append('<li class="results">French toast</li>');
				$(list).append('<li class="results">hot dogs</li>');
				$(list).append('<li class="results">Indian food</li>');
				$(list).append('<li class="results">lobster</li>');
				$(list).append('<li class="results">Lasagna</li>');
				$(list).append('<li class="results">Meatballs</li>');
				list.name = "listObject2-1";
				$(list).addClass("styleList");
				$(ol1).replaceWith(list);
			});

			<!-- If you click on the 3th first list -->
			$("#btn3-1").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Lenovo</li>');
				$(list).append('<li class="results">HP</li>');
				$(list).append('<li class="results">Apple</li>');
				$(list).append('<li class="results">Asus</li>');
				$(list).append('<li class="results">Acer</li>');
				$(list).append('<li class="results">Dell</li>');
				list.name = "listObject3-1";
				$(list).addClass("styleList");
				$(ol1).replaceWith(list);
			});
		  });

		  <!-- widget Video -->
		  $("#video").on("click" , function(){
			let Formvideo1 = document.createElement("FORM");
			let value1 = '<label for="myFile" class="results">Upload Your Video: </label><br><br><input type="file" id="myFile" name="videopath1"><input value="upload" type="submit">';
			$(Formvideo1).append(value1);
			Formvideo1.setAttribute("controls", "controls");
			$(Formvideo1).addClass("videoSaz formsaz");
			Formvideo1.name = "VID1";
			$(".dropdown1").replaceWith(Formvideo1);
		  });

		  <!-- widget Textarea -->
		  $("#textarea").on("click" , function(){
			let x = document.createElement("TEXTAREA");
			x.id = "text";
			x.name = "text1";
			$(x).addClass("results");
			$(x).addClass("form-control");
			$(".dropdown1").replaceWith(x);
		  });

		  <!-- widget Linkdoni -->
		  $("#link").on("click" , function(){
			let ul1 = document.createElement("ul");
			$(ul1).append('<h5 class="results">If you want to access popular programming sites, click on each one:</h5><br/>');
			$(ul1).append('<li><a href="https://www.udemy.com/" target="_blank" title="Udemy"  class="results">Visit a Udemy Website</a></li>');
			$(ul1).append('<li><a href="https://www.w3schools.com/" target="_blank" title="W3Schools"  class="results">Visit a W3Schools Website</a></li>');
			$(ul1).append('<li><a href="https://www.codecademy.com/" target="_blank" title="Codecademy"  class="results">Visit a Codecademy Website</a></li>');
			$(ul1).append('<li><a href="https://www.khanacademy.org/" target="_blank" title="Khanacademy"  class="results">Visit a Khanacademy Website</a></li>');
			$(ul1).addClass("ulStyle");
			ul1.name = "linkdoni1";
			$(".dropdown1").replaceWith(ul1);
		  });

        });
		<!-- bastan dropdown marbot be widget aval -->
		<!-- baz kardan dropdown marbot be widget dovom -->
        $("#dropbtn2").on("click" , function(){
          $("#myDropdown2").toggle(".show");
		  $("#myDropdown").hide();
		  $("#myDropdown3").hide();
		  $("#myDropdown4").hide();
		  <!-- widget photo -->
		  $("#photo2").on("click" , function(){
			let Formphoto2 = document.createElement("FORM");
			var str = '<label for="myFile" class="results">Upload Your Image: </label><br><br><input type="file" id="myFile" name="photopath2"><input value="upload" type="submit">';
			$(Formphoto2).append(str);
			Formphoto2.name = "form2";
			$(Formphoto2).addClass("formsaz");
			$(".dropdown2").replaceWith(Formphoto2);
		  });
		  <!-- widget list -->
		  $("#list2").on("click" , function(){
			let ol2 = document.createElement("ol");
			let str1 = '<p class="results">Choose your List:</p><li><button id="btn1-2" class="results">Cars</button></li>';
			$(ol2).append(str1);
			$(ol2).append('<li><button id="btn2-2" class="results">Foods</button></li>');
			$(ol2).append('<li><button id="btn3-2" class="results">Laptop</button></li>');
			$(ol2).addClass("styleList");
			$(".dropdown2").replaceWith(ol2);
			<!-- If you click on the 1th second list -->
			$("#btn1-2").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">BMW</li>');
				$(list).append('<li class="results">Mercedes-Benz</li>');
				$(list).append('<li class="results">Bugatti</li>');
				$(list).append('<li class="results">Ford</li>');
				$(list).append('<li class="results">Audi</li>');
				$(list).append('<li class="results">Porsche</li>');
				list.name = "listObject1-2";
				$(list).addClass("styleList");
				$(ol2).replaceWith(list);
			});
			<!-- If you click on the 2th second list -->
			$("#btn2-2").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Pizza</li>');
				$(list).append('<li class="results">French toast</li>');
				$(list).append('<li class="results">hot dogs</li>');
				$(list).append('<li class="results">Indian food</li>');
				$(list).append('<li class="results">lobster</li>');
				$(list).append('<li class="results">Lasagna</li>');
				$(list).append('<li class="results">Meatballs</li>');
				list.name = "listObject2-2";
				$(list).addClass("styleList");
				$(ol2).replaceWith(list);
			});
			<!-- If you click on the 3th second list -->
			$("#btn3-2").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Lenovo</li>');
				$(list).append('<li class="results">HP</li>');
				$(list).append('<li class="results">Apple</li>');
				$(list).append('<li class="results">Asus</li>');
				$(list).append('<li class="results">Acer</li>');
				$(list).append('<li class="results">Dell</li>');
				list.name = "listObject3-2";
				$(list).addClass("styleList");
				$(ol2).replaceWith(list);
			});
		  });
		  <!-- widget Video -->
		  $("#video2").on("click" , function(){
			let Formvideo2 = document.createElement("FORM");
			let value2 = '<label for="myFile" class="results">Upload Your Video: </label><br><br><input type="file" id="myFile" name="videopath2"><input value="upload" type="submit">';
			$(Formvideo2).append(value2);
			Formvideo2.setAttribute("controls", "controls");
			$(Formvideo2).addClass("videoSaz formsaz");
			Formvideo2.name = "VID2";
			$(".dropdown2").replaceWith(Formvideo2);
		  });

		  <!-- widget Textarea -->
		  $("#textarea2").on("click" , function(){
			  let x = document.createElement("TEXTAREA");
			  x.id = "text2";
			  x.name = "text2";
			  $(x).addClass("results");
			  $(".dropdown2").replaceWith(x);
			  $(x).addClass("form-control");
		  });
		  <!-- widget Linkdoni -->
		  $("#link2").on("click" , function(){
			let ul2 = document.createElement("ul");
			$(ul2).append('<h5 class="results">If you want to access popular programming sites, click on each one:</h5><br/>');
			$(ul2).append('<li><a href="https://www.udemy.com/" target="_blank" title="Udemy" class="results">Visit a Udemy Website</a></li>');
			$(ul2).append('<li><a href="https://www.w3schools.com/" target="_blank" title="W3Schools" class="results">Visit a W3Schools Website</a></li>');
			$(ul2).append('<li><a href="https://www.codecademy.com/" target="_blank" title="Codecademy" class="results">Visit a Codecademy Website</a></li>');
			$(ul2).append('<li><a href="https://www.khanacademy.org/" target="_blank" title="Khanacademy" class="results">Visit a Khanacademy Website</a></li>');
			$(ul2).addClass("ulStyle");
			ul2.name = "linkdoni2";
			$(".dropdown2").replaceWith(ul2);
		  });;

        });
		<!-- bastan dropdown marbot be widget dovom -->
		<!-- baz kardan dropdown marbot be widget sevom -->
        $("#dropbtn3").on("click" , function(){
          $("#myDropdown3").toggle(".show");
		  $("#myDropdown").hide();
		  $("#myDropdown2").hide();
		  $("#myDropdown4").hide();
		  <!-- widget photo -->
		  $("#photo3").on("click" , function(){
			let Formphoto3 = document.createElement("FORM");
			var str = '<label for="myFile" class="results">Upload Your Image: </label><br><br><input type="file" id="myFile" name="photopath3"><input value="upload" type="submit">';
			$(Formphoto3).append(str);
			Formphoto3.name = "form3";
			$(Formphoto3).addClass("formsaz");
			$(".dropdown3").replaceWith(Formphoto3);
		  });
		  <!-- widget list -->
		  $("#list3").on("click" , function(){
			let ol3 = document.createElement("ol");
			let str1 = '<p class="results">Choose your List:</p><li><button id="btn1-3" class="results">Cars</button></li>';
			$(ol3).append(str1);
			$(ol3).append('<li><button id="btn2-3" class="results">Foods</button></li>');
			$(ol3).append('<li><button id="btn3-3" class="results">Laptop</button></li>');
			$(ol3).addClass("styleList");
			$(".dropdown3").replaceWith(ol3);
			<!-- If you click on the 1th thirth list -->
			$("#btn1-3").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">BMW</li>');
				$(list).append('<li class="results">Mercedes-Benz</li>');
				$(list).append('<li class="results">Bugatti</li>');
				$(list).append('<li class="results">Ford</li>');
				$(list).append('<li class="results">Audi</li>');
				$(list).append('<li class="results">Porsche</li>');
				list.name = "listObject1-3";
				$(list).addClass("styleList");
				$(ol3).replaceWith(list);
			});
			<!-- If you click on the 2th thirth list -->
			$("#btn2-3").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Pizza</li>');
				$(list).append('<li class="results">French toast</li>');
				$(list).append('<li class="results">hot dogs</li>');
				$(list).append('<li class="results">Indian food</li>');
				$(list).append('<li class="results">lobster</li>');
				$(list).append('<li class="results">Lasagna</li>');
				$(list).append('<li class="results">Meatballs</li>');
				list.name = "listObject2-3";
				$(list).addClass("styleList");
				$(ol3).replaceWith(list);
			});
			<!-- If you click on the 3th thirth list -->
			$("#btn3-3").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Lenovo</li>');
				$(list).append('<li class="results">HP</li>');
				$(list).append('<li class="results">Apple</li>');
				$(list).append('<li class="results">Asus</li>');
				$(list).append('<li class="results">Acer</li>');
				$(list).append('<li class="results">Dell</li>');
				list.name = "listObject3-3";
				$(list).addClass("styleList");
				$(ol3).replaceWith(list);
			});
		  });
		  <!-- widget Video -->
		  $("#video3").on("click" , function(){
			let Formvideo3 = document.createElement("FORM");
			let value3 = '<label for="myFile" class="results">Upload Your Video: </label><br><br><input type="file" id="myFile" name="videopath3"><input value="upload" type="submit">';
			$(Formvideo3).append(value3);
			Formvideo3.setAttribute("controls", "controls");
			$(Formvideo3).addClass("videoSaz formsaz");
			Formvideo3.name = "VID3";
			$(".dropdown3").replaceWith(Formvideo3);
		  });

		  <!-- widget Textarea -->
		  $("#textarea3").on("click" , function(){
			  let x = document.createElement("TEXTAREA");
			  x.id = "text3";
			  x.name = "text3";
			  $(x).addClass("results");
			  $(".dropdown3").replaceWith(x);
			  $(x).addClass("form-control");
		  });
		  <!-- widget Linkdoni -->
		  $("#link3").on("click" , function(){
			let ul3 = document.createElement("ul");
			$(ul3).append('<h5 class="results">If you want to access popular programming sites, click on each one:</h5><br/>');
			$(ul3).append('<li><a href="https://www.udemy.com/" target="_blank" title="Udemy" class="results">Visit a Udemy Website</a></li>');
			$(ul3).append('<li><a href="https://www.w3schools.com/" target="_blank" title="W3Schools" class="results">Visit a W3Schools Website</a></li>');
			$(ul3).append('<li><a href="https://www.codecademy.com/" target="_blank" title="Codecademy" class="results">Visit a Codecademy Website</a></li>');
			$(ul3).append('<li><a href="https://www.khanacademy.org/" target="_blank" title="Khanacademy" class="results">Visit a Khanacademy Website</a></li>');
			$(ul3).addClass("ulStyle");
			ul3.name = "linkdoni3";
			$(".dropdown3").replaceWith(ul3);
		  });;

        });
		<!-- bastan dropdown marbot be widget sevom -->
		<!-- baz kardan dropdown marbot be widget chaharom -->
		$("#dropbtn4").on("click" , function(){
          $("#myDropdown4").toggle(".show");
		  $("#myDropdown").hide();
		  $("#myDropdown2").hide();
		  $("#myDropdown3").hide();
		  <!-- widget photo -->
		  $("#photo4").on("click" , function(){
			let Formphoto4 = document.createElement("FORM");
			var str = '<label for="myFile" class="results">Upload Your Image: </label><br><br><input type="file" id="myFile" name="photopath4"><input value="upload" type="submit">';
			$(Formphoto4).append(str);
			Formphoto4.name = "form4";
			$(Formphoto4).addClass("formsaz");
			$(".dropdown4").replaceWith(Formphoto4);
		  });
		  <!-- widget list -->
		  $("#list4").on("click" , function(){
			let ol4 = document.createElement("ol");
			let str1 = '<p class="results">Choose your List:</p><li><button id="btn1-4" class="results">Cars</button></li>';
			$(ol4).append(str1);
			$(ol4).append('<li><button id="btn2-4" class="results">Foods</button></li>');
			$(ol4).append('<li><button id="btn3-4" class="results">Laptop</button></li>');
			$(ol4).addClass("styleList");
			$(".dropdown4").replaceWith(ol4);
			<!-- If you click on the 1th fourth list -->
			$("#btn1-4").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">BMW</li>');
				$(list).append('<li class="results">Mercedes-Benz</li>');
				$(list).append('<li class="results">Bugatti</li>');
				$(list).append('<li class="results">Ford</li>');
				$(list).append('<li class="results">Audi</li>');
				$(list).append('<li class="results">Porsche</li>');
				$(list).addClass("styleList");
				list.name = "listObject1-4";
				$(ol4).replaceWith(list);
			});
			<!-- If you click on the 2th fourth list -->
			$("#btn2-4").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Pizza</li>');
				$(list).append('<li class="results">French toast</li>');
				$(list).append('<li class="results">hot dogs</li>');
				$(list).append('<li class="results">Indian food</li>');
				$(list).append('<li class="results">lobster</li>');
				$(list).append('<li class="results">Lasagna</li>');
				$(list).append('<li class="results">Meatballs</li>');
				$(list).addClass("styleList");
				list.name = "listObject2-4";
				$(ol4).replaceWith(list);
			});
			<!-- If you click on the 3th fourth list -->
			$("#btn3-4").on("click" , function(){
				let list = document.createElement("ol");
				$(list).append('<li class="results">Lenovo</li>');
				$(list).append('<li class="results">HP</li>');
				$(list).append('<li class="results">Apple</li>');
				$(list).append('<li class="results">Asus</li>');
				$(list).append('<li class="results">Acer</li>');
				$(list).append('<li class="results">Dell</li>');
				$(list).addClass("styleList");
				list.name = "listObject3-4";
				$(ol4).replaceWith(list);
			});
		  });
		  <!-- widget Video -->
		  $("#video4").on("click" , function(){
			let Formvideo4 = document.createElement("FORM");
			let value4 = '<label for="myFile" class="results">Upload Your Video: </label><br><br><input type="file" id="myFile" name="videopath4"><input value="upload" type="submit">';
			$(Formvideo4).append(value4);
			Formvideo4.setAttribute("controls", "controls");
			$(Formvideo4).addClass("videoSaz formsaz");
			Formvideo4.name = "VID4";
			$(".dropdown4").replaceWith(Formvideo4);
		  });

		  <!-- widget Textarea -->
		  $("#textarea4").on("click" , function(){
			  let x = document.createElement("TEXTAREA");
			  x.id = "text4";
			  x.name = "text4";
			  $(x).addClass("results");
			  $(".dropdown4").replaceWith(x);
			  $(x).addClass("form-control");
		  });
		  <!-- widget Linkdoni -->
		  $("#link4").on("click" , function(){
			let ul4 = document.createElement("ul");
			$(ul4).append('<h5 class="results">If you want to access popular programming sites, click on each one:</h5><br/>');
			$(ul4).append('<li><a href="https://www.udemy.com/" target="_blank" title="Udemy" class="results">Visit a Udemy Website</a></li>');
			$(ul4).append('<li><a href="https://www.w3schools.com/" target="_blank" title="W3Schools" class="results">Visit a W3Schools Website</a></li>');
			$(ul4).append('<li><a href="https://www.codecademy.com/" target="_blank" title="Codecademy" class="results">Visit a Codecademy Website</a></li>');
			$(ul4).append('<li><a href="https://www.khanacademy.org/" target="_blank" title="Khanacademy" class="results">Visit a Khanacademy Website</a></li>');
			$(ul4).addClass("ulStyle");
			ul4.name = "linkdoni4";
			$(".dropdown4").replaceWith(ul4);
		  });;

        });
		<!-- bastan dropdown marbot be widget chaharom -->
      });

	  /* Anything that gets to the document
		   will hide the dropdown */
		$(document).click(function(){
		  $("#myDropdown").hide();
		  $("#myDropdown2").hide();
		  $("#myDropdown3").hide();
		  $("#myDropdown4").hide();
		});

		/* Clicks within the dropdown won't make
		   it past the dropdown itself */
		$("#myDropdown").click(function(e){
		  e.stopPropagation();
		});
		$("#myDropdown2").click(function(e){
		  e.stopPropagation();
		});
		$("#myDropdown3").click(function(e){
		  e.stopPropagation();
		});
		$("#myDropdown4").click(function(e){
		  e.stopPropagation();
		});

	  <!-- function marbot be baz kardane sidebar -->
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
		    document.getElementById("header").style.marginLeft = "250px";
      }
	  <!-- function marbot be bastane sidebar -->
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
		    document.getElementById("header").style.marginLeft = "0";
      }
      </script>

      <!-- Sidebar/menu -->
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<div class="sidebar-menu">
			<center class="profile">
			  <img src="img/profile.jpg" alt="" height="100">
			  <p>Alex</p>
			  </center>
			<li class="item">
			  <a href="#" class="menu-btn">
				<i class="fas fa-desktop"></i><span>Dashboard</span>
			  </a>
			</li>
			<li class="item" id="profile">
			  <a href="#profile" class="menu-btn">
				<i class="fas fa-user-circle"></i><span>profile <i class="fas fa-chevron-down drop-down"></i></span>
			  </a>
			  <div class="sub-menu sub-menu1">
				<a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
				<a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
			  </div>
			</li>
			<li class="item" id="messages">
			  <a href="#messages" class="menu-btn">
				<i class="fas fa-envelope"></i><span>messages <i class="fas fa-chevron-down drop-down"></i></span>
			  </a>
			  <div class="sub-menu sub-menu2">
				<a href="#"><i class="fas fa-envelope"></i><span>new</span></a>
				<a href="#"><i class="fas fa-envelope-square"></i><span>sent</span></a>
				<a href="#"><i class="fas fa-exclamation-circle"></i><span>spam</span></a>
			  </div>
			</li>
			<li class="item" id="settings">
			  <a href="#settings" class="menu-btn">
				<i class="fas fa-cog"></i><span>settings <i class="fas fa-chevron-down drop-down"></i></span>
			  </a>
			  <div class="sub-menu sub-menu3">
				<a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
				<a href="#"><i class="fas fa-language"></i><span>language</span></a>
			  </div>
			</li>
			<li class="item">
			  <a href="#" class="menu-btn">
				<i class="fas fa-info-circle"></i><span>about</span>
			  </a>
			</li>
		</div>
      </div>
  </head>

  <body class="w3-content">


    <div id="main">
        <form action="" method="get" name="widget">
      <!-- ======= Header ======= -->
		  <header id="header" class="fixed-top header-transparent">
			<div class="container-fluid">

			  <div class="row justify-content-center">
				<div class="col-xl-11 d-flex align-items-center">
				  <h1 class="logo mr-auto"><a href="#">Pink Panther</a></h1>

				  <nav class="nav-menu d-none d-lg-block">
					<ul>
					  <li class="active"><a href="#"><i class="fa fa-home" title="Home"></i></a></li>
					  <li><a href="#" onclick="openNav()"><i class="fas fa-bars" title="Menu"></i></a></li>
					  <li><a href="#"><i class="fas fa-search"></i></a></li>
					  <li><button type="submit"><i class="fa fa-save" title="Save"></i></button></li>
					  <li><a href="#"><i class="fas fa-power-off" title="Exit"></i></a></li>
					  <li class="nav-item dropdown">
						     <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<input type="text" id="fonts">
						</a>
					  </li>
					</ul>
				  </nav><!-- .nav-menu -->
				</div>
			  </div>

			</div>
		  </header><!-- End Header -->

		<br/><br/><br/><br/><br/><br/>

    <div class="themes">
      <div class="colors">
        <h3>Theme colors</h3>
        <ul class="theme-colors">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>

        </ul>
        <br>
        <h3>Logo colors</h3>
        <ul class="logo-colors">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <p class="themes-btn"><i class="fa fa-gear fa-2x fa-spin"></i></p>
    </div>
    <br />


	  <h1 id="h1" class="results">
		    Site Builder
      </h1>
	  <br><br>
      <p id="para" class="results">
        Choose your widget to style your page
      </p>
      <br><br><br>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
      <script src="js/jquery.fontselect.js"></script>
      <script>
          $('#fonts').fontselect({
          googleFonts: [
             'Pacifico', 'Press+Start+2P',
             'ZCOOL+KuaiLe', 'Gloria+Hallelujah',
             'Changa:200', 'Changa:300',
             'Changa:400', 'Changa:500'
          ],
          placeholder: 'Pick a font from the list',
          searchable: false
        }).on('change', function() {
         var font = this.value.replace(/\+/g, ' ');
         font = font.split(':');
         var fontFamily = font[0];
         var fontWeight = font[1] || 400;
         $('.results').css('font-family', fontFamily).css('font-weight', fontWeight);
       }).trigger('setFont', ['Pacifico'])




        $(document).ready(function(){
          $('ul.theme-colors li').click(function(){
            $('body').css('background',$(this).css('color'));
          });
          $('ul.logo-colors li').click(function(){
            $('.results').css('color', $(this).css('color'));
          });
          $('p.themes-btn').click(function(){
            $('.colors').toggleClass('active');
          });
        });

      </script>





        <!-- div start weidght  -->
        <div>



                <?php
                echo $text1;
                echo $photo1;
                echo $video1;

                ?>




                <div class="dropdownWidget dropdown1">
        <button  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbtn">
          <i class="fa fa-plus"></i>
        </button>
        <div id="myDropdown" aria-labelledby="dropbtn" class="dropdown-content">
          <button id="textarea" class="dropdown-item">Text <i style='font-size:24px;float:right;' class='far'>&#xf27a;</i></button>
          <button id="photo" class="dropdown-item">Photo <i style='font-size:24px;float:right;' class='fas'>&#xf030;</i></button>
          <button id="video" class="dropdown-item">Video <i style='font-size:24px;float:right;' class='fas'>&#xf03d;</i></button>
		  <button id="list" class="dropdown-item">List <i style='font-size:24px;float:right;' class='fas'>&#xf0ca;</i></button>
          <button id="link" class="dropdown-item">Link <i style='font-size:24px;float:right;' class='fas'>&#xf0c1;</i></button>
        </div>
      </div>
      <br><br><br>

                <?php
                echo $text2;
                echo $photo2;
                echo $video2;

                ?>






                <div class="dropdownWidget dropdown2">
        <button  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbtn2">
          <i class="fa fa-plus"></i>
        </button>
        <div id="myDropdown2"  aria-labelledby="dropbtn2" class="dropdown-content">
          <button id="textarea2" class="dropdown-item">Text <i style='font-size:24px;float:right;' class='far'>&#xf27a;</i></button>
          <button id="photo2" class="dropdown-item">Photo <i style='font-size:24px;float:right;' class='fas'>&#xf030;</i></button>
          <button id="video2" class="dropdown-item">Video <i style='font-size:24px;float:right;' class='fas'>&#xf03d;</i></button>
		  <button id="list2" class="dropdown-item">List <i style='font-size:24px;float:right;' class='fas'>&#xf0ca;</i></button>
          <button id="link2" class="dropdown-item">Link <i style='font-size:24px;float:right;' class='fas'>&#xf0c1;</i></button>
        </div>
      </div>
      <br><br><br>



                <?php
                echo $text3;
                echo $photo3;
                echo $video3;

                ?>





                <div class="dropdownWidget dropdown3">
        <button  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbtn3">
          <i class="fa fa-plus"></i>
        </button>
          <div id="myDropdown3"  aria-labelledby="dropbtn3" class="dropdown-content">
          <button id="textarea3" class="dropdown-item">Text <i style='font-size:24px;float:right;' class='far'>&#xf27a;</i> </button>
          <button id="photo3" class="dropdown-item">Photo <i style='font-size:24px;float:right;' class='fas'>&#xf030;</i></button>
		  <button id="video3" class="dropdown-item">Video <i style='font-size:24px;float:right;' class='fas'>&#xf03d;</i></button>
          <button id="list3" class="dropdown-item">List <i style='font-size:24px;float:right;' class='fas'>&#xf0ca;</i></button>
          <button id="link3" class="dropdown-item">Link <i style='font-size:24px;float:right;' class='fas'>&#xf0c1;</i></button>
        </div>
      </div>
	  <br><br><br>


                <?php
                echo $text4;
                echo $photo4;
                echo $video4;
                ?>





                <div class="dropdownWidget dropdown4">
        <button  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbtn4">
          <i class="fa fa-plus"></i>
        </button>
        <div id="myDropdown4"  aria-labelledby="dropbtn4" class="dropdown-content">
          <button id="textarea4" class="dropdown-item">Text <i style='font-size:24px;float:right;' class='far'>&#xf27a;</i> </button>
          <button id="photo4" class="dropdown-item">Photo <i style='font-size:24px;float:right;' class='fas'>&#xf030;</i></button>
		  <button id="video4" class="dropdown-item">Video <i style='font-size:24px;float:right;' class='fas'>&#xf03d;</i></button>
          <button id="list4" class="dropdown-item">List <i style='font-size:24px;float:right;' class='fas'>&#xf0ca;</i></button>
          <button id="link4" class="dropdown-item">Link <i style='font-size:24px;float:right;' class='fas'>&#xf0c1;</i></button>
        </div>
      </div>
      <br/><br/><br/>
                <input type="submit" value="Show/save" class="inputStyle">
            </form>
        </div>


	  <br><br><br>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
