<?php

$felhasznalonev = ["admin", "titkar", "istvan"];
$jelszo = ["123456", "T1234", "87654321"];
$index = 0;
$valid =0;
$error ="";
$username = "";

// form küldésének ellenőrzése
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["username"]) && !empty($_POST["username"])){
        $username = $_POST["username"];
    } else {
        $error = "Nem töltötted ki a felhasználónév mezőt!";
    }

    $pass = $_POST["password"];

    foreach ($felhasznalonev as $f) {
        if ($username == $f && $pass == $jelszo[$index]) {
            $error .= "Sikeres belépés!";
            $valid = 1;
        }
        $index++;
    }

    if ($valid != 1) {
        $error .= "Hibás felhasználónév vagy jelszó!";
    }
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
        <input type="text" name="username" required><br><br>
        
        <label style="font-size: 20px;">Jelszó:</label><br>
        <input type="password" name="password" required><br><br>
        
        <input style = "background: blue; color: white;"type="submit" value="Belépés">

        <?php if($error == "Sikeres belépés!"){?>
            <h4 style="color: green;"> <?php echo $error; ?></h4>
        <?php } else { ?>
            <h4 style="color: red;"><?php echo $error; ?></h4>
        <?php } ?>

    </form>

</body>
</html>