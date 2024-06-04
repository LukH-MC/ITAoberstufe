<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Beschreibung" name="desc"><br>
        <input type="submit" value="submit" name="submit">
        <input type="reset" value="reset"><br><br>
    </form>
    <?php

    $con = mysqli_connect("localhost", "root", "", "myslitest");
    if(mysqli_connect_errno()){
        printf("", mysqli_connect_error());
        exit();
    }
    $res = mysqli_query($con, "SELECT * FROM test");
    $num = mysqli_num_rows($res);
    if($num > 0) echo "Ergebnisse:<br>";
    else         echo "Keine Ergebnisse<br>";

    while ($dsatz = mysqli_fetch_assoc($res))
    {
       echo "Name: ".$dsatz["name"] . ", Desc: ". $dsatz["desc"] . "<br>";
    }

    if(isset($_POST["submit"]))
    {
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $sql = "INSERT INTO `test` (`name`, `desc`) VALUES ($name, $desc)";
    mysqli_query($con, $sql);
    }
    mysqli_close($con);
    ?>
</body>
</html>