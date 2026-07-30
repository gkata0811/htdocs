<?php

// adatbázis kapcsolat létrehozása
$server = "localhost";
$username = "root";
$password = "";
$db = "raktar";

$conn = new mysqli($server, $username, $password, $db);

if($conn->connect_error){
    die("Adatbázis kapcsolat hiba !");
}

echo "Sikeres adatbázis kapcsolat !<br>";

// DB lekérdezés
$sql = "SELECT * FROM store1 WHERE db > 5";
$result = $conn->query($sql);
print_r($result);
echo "<br>";

$tomb = []; // Gyűjtő tömb
// DB kiírása
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        // adatok mentése
        $tomb_row = [];
        array_push($tomb_row, $row["ID"], $row["megnevezes"], $row["model"], $row["db"],
                    $row["leltar_id"], $row["foglalt"], $row["ar"]);
        echo $row["ID"]." : ".$row["megnevezes"]." - ".$row["model"]." - ".$row["db"]." - ".
        $row["leltar_id"]." - ".$row["foglalt"]." - ".$row["ar"]. "<br>";
        // altömb mentése a gyűjtő tömbbe
        array_push($tomb, $tomb_row);
    }
    echo "<pre>";
    print_r($tomb);
}else{
    echo "Nincs találat !";
}

// új raktár (Strore2) tábla készítése

$sql = "CREATE TABLE IF NOT EXISTS store2 (
            ID INT AUTO_INCREMENT PRIMARY KEY,
            megnevezes VARCHAR(50),
            model VARCHAR(50),
            db INT(3),
            leltar_id VARCHAR(10),
            foglalt INT(3),
            ar INT)";

if($conn->query($sql) === TRUE){
    echo "<br>Sikeres tábla létrehozás!<br>";
}else{
    echo "<br>Hiba a tábla létrehozásánál: $conn->error <br>";
}

// DB store2 tábla feltöltése a mentett $tomb adatokkal
$sql_ok = 1;
foreach($tomb as $t){
    $sql = "INSERT INTO store2 (megnevezes, model, db, leltar_id, foglalt, ar)
            VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $t[1],$t[2],$t[3],$t[4],$t[5],$t[6]);
    if($stmt->execute()){
        echo "<br>Sikeres adat rögzítés!<br>";
    }else{
        $sql_ok = 0;
        echo "Hiba az adatok feltöltésénél: $stmt->error";
    }
}

if($sql_ok == 1){
    echo "<br>Sikeres adat rögzítés!<br>";
}else{
    echo "Hiba az adatok feltöltésénél!";
}

?>