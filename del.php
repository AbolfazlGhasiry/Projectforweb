<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
window.location.href = "index.php";
    </script>
    
    <?php
    $sh = $_GET["if"];
     $connect = mysqli_connect("localhost" , "root" , "" , "phones");
    $result = mysqli_query($connect, "DELETE FROM `phones` WHERE $sh");
     mysqli_close($connect);
    ?>
</body>
</html>