<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1\.0">
    <link rel="stylesheet" href="../style.css">
    <title>division</title>
</head>

<body>
    <form action="verify.php" method="POST">
        <input type="number" name="first_value">
        <input type="number" name="second_value">
        <input type="number" name="third_value">
        <input type="submit" value="Confirm">
    </form>
    <p class="white_style">
    <?php
    if (isset($_POST["first_value"])){
        $first_value = $_POST["first_value"];
        $second_value = $_POST["second_value"];
        $result = $first_value / $second_value;
        echo $result;}
    ?>
    </p>
</body>

</html>