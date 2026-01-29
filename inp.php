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
    $price = $_GET["price"];
    $xiaomi = $_GET["xiaomi"];
    $samsung = $_GET["samsung"];
    $others = $_GET["others"];
     $connect = mysqli_connect("localhost" , "root" , "" , "phones");
    $result = mysqli_query($connect, "INSERT INTO `phones`(`price`, `xiaomi`, `samsung`, `others`) VALUES ('$price','$xiaomi','$samsung','$others')");
     mysqli_close($connect);
    ?>
</body>
</html>