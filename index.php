<?php
$email = $_GET['email'];
var_dump($email);

include_once('email_check.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c899c3a4a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>

    </header>

    <main>
        <div class="container">
            <div class="mb-3">
                <form action="" method="get">
                    <label for="" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                    <small id="emailHelpId" class="form-text text-muted">Ci vuole poco, basta essere un utente mediamente sveglio</small>
                    <br>
                    <button type="submit">Invia</button>
                </form>
            </div>
            <h4>
                <?php
                if (is_null($email)) {
                    echo 'inserisci una mail';
                }
                if ($email_check == true) {
                    echo 'Bravo, sei stato in grado di inserire una mail';
                }
                if ($email_check == false && isset($email)) {
                    echo 'Bel tentativo, riprova';
                }
                ?>
            </h4>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>