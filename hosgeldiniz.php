<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
if ( $_POST["email"] == "b231210072@sakarya.edu.tr" && $_POST["sifre"] == "b231210072") {
    
    echo  "Merhaba, "; 
    echo strtok($_POST["email"], '@');
}

else if ( $_POST["email"] != "b231210072@sakarya.edu.tr" || $_POST["sifre"] != "b231210072"){

    echo '<body onload="javascript:location.replace("https://www.w3schools.com");"> Başarısız Giriş </body> ';


}
?>
 



<script>
function myFunction() {
  
}
</script>

</body>
</html>