<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Projekt1</title>
</head>

    <body>
    <header>
    <h1>KONTAKT</h1>
    </header>


    <div id="l">
    <h2> Linki:</h2><br>
    <h3><a href="Index.php">Strona głowna</a></h3> <br>
    <h3><a href="about_me.php">O mnie</a></h3> <br>

    </div>

        <div id="p">
        <h2>Aby wysłać do mnie wiadomość:</h2>
        <form >
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="email"><br>
        <label for="Pytanie">Twoje pytanie:</label><br>
        <input type="text" id="Pytanie" name="Pytanie" size=60><br><br>
        <input type="submit" value="Submit">
        </form> 
        
        </div>

    <?php 
    include "components/footer.php";
    ?>
    </body>
</html>