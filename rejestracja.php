<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasze hobby</title>
    <link rel="stylesheet" type="text/css" href="hobby.css">
</head>
<body>
    <header>FORUM HOBBISTYCZNE</header>
    <div id="left">
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $nick=$_POST['nick'];
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        $zawod=$_POST['zawod'];
        $plec=$_POST['plec'];
        $server="localhost";
        $username="root";
        $password="";
        $database="forum";
        echo "Konto ".$nick." zostało zarejestrowane na forum hobbistycznym";
        $conn=mysqli_connect($server,$username,$password,$database);
        $query_1="INSERT into uzytkownicy values ('$imie','$hobby','$zawod','$plec')";
        $query_2="INSERT into konta values ('$login','$haslo')";
        mysqli_close($conn);
        }
        ?>
    </div>
    <div id="right">
        <h3>TEMATYKA FORUM</h3>
        <ul>
            <li>Hodowla zwierząt</li>
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>
    </div>
</body>
</html>