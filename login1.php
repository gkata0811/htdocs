<?php
$felhasznalonev = ["admin", "titkar", "istvan"];
$jelszo = ["123456", "T1234", "87654321"];
$index = 0;
$valid = 0;
$error = "";
$username = "";

function user_check(){
    if(isset($_POST["username"]) && !empty($_POST["username"]) &&
        isset($_POST["password"]) && !empty($_POST["password"])){
        return true;
    }else{
        return false;
    }
} // return   v. true  v. false

function user_cleaner($u, $p){
    $user = trim($u); // space törlése
    $pass = trim($p);
    $user = htmlspecialchars($user);
    $pass = htmlspecialchars($pass);
    $info = [];
    array_push($info, $user);
    array_push($info, $pass);
    return $info;
}

// Form küldésének ellenőrzése
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(user_check() == 1){
        // print_r(user_cleaner($username, $pass));
        // felhasználói adatok tisztítása
        $user_tomb = user_cleaner($_POST["username"], $_POST["password"]);
        // visszatérő tömb értékeinek kivétele !!!
        $username = $user_tomb[0];
        $pass = $user_tomb[1];
    }else{
        $error = "Nem töltötted ki a felhasználónév vagy a jelszó mezőt!";
    }



    foreach($felhasznalonev as $f){
        if($username == $f && $pass == $jelszo[$index]){ // &&  ||
            $error .= " Sikeres belépés!";
        //header("location: divat.php");
            $valid = 1;
        }
        $index++;
    }

    if($valid == 0){ // $valid != 1
        $error .= " Hibás felhasználónév vagy jelszó!";
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

        <input style="background: blue; color: white;" type="submit" value="Belépés">

        <?php if($error == "Sikeres belépés!"){ ?>
            <h4 style="color: green;"><?php echo $error; ?></h4>
        <?php }else{ ?>
            <h4 style="color: red;"><?php echo $error; ?></h4>
        <?php } ?>

    </form>

</body>
</html>