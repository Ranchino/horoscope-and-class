<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoskop och Objekt</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["myCookie"])){
            header('Location: myhoroscope.php');
            die();
        }
    ?>
    <form action="check.php" method="POST">
        <label>Förnamn</label>
        <input type="text" name="förnamn" id="firstName" placeholder="Förnamn">
        <label>Efternamn</label>
        <input type="text" name="efternamn" id="lastName" placeholder="Efternamn">
        <label>Personnummer</label>
        <input type="number" name="personnr" id="personNr" placeholder="YYMMDD">
        <button type="submit">Spara</button>
    </form>
    
</body>
</html>