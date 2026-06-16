<?php

$felhasznalonev = ["admin", "titkar", "istvan"];
$jelszo = ["123456", "T1234", "87654321"];

$username = $_POST["username"];
$pass = $_POST["password"];

$index = 0;
$valid =0;
$error ="";

foreach ($felhasznalonev as $f) {
    if ($username == $f && $pass == $jelszo[$index]) {
        $error = "Sikeres belépés!";
        $valid = 1;
    }
    $index++;
}

if ($valid != 1) {
    $error = "Hibás felhasználónév vagy jelszó!";
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Belépés</title>
</head>
<body>

    <h2>Bejelentkezés</h2>

    <form action="login1.php" method="post">
        <label style="font-size: 20px;">Felhasználónév:</label><br>
        <input type="text" name="username"><br><br>
        
        <label style="font-size: 20px;">Jelszó:</label><br>
        <input type="password" name="password"><br><br>
        
        <input style = "background: blue; color: white;"type="submit" value="Belépés">

        <?php if($error == "Sikeres belépés!"){?>
            <h4 style="color: green;"> <?php echo $error; ?></h4>
        <?php } else { ?>
            <h4 style="color: red;"><?php echo $error; ?></h4>
        <?php } ?>

    </form>

</body>
</html>