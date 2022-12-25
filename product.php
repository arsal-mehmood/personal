<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="2.css">
    <title></title>
</head>
<body>
   <img src="img/b.png">
</body>
</html>

<?php
    session_start();

    if(isset($_SESSION['uname'])){

    	echo "<h2> welcome to the product page</h2>";

        echo "<img src='img/a.png'>";

    	echo "<br><a href='welcome.php'><button type=submit  name=back value=back>Back</button</a>";

}
else{
	echo "<script>location.href='login form.php'</script>";
}



?>  
