<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta search
    ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit
    =no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 

    <title>Wochenkarte</title>    
</head>
<body style="zoom: 150%">
<div class="container">
    <form action="../Controllers/logout.php" method="post">
        
        <h1 class="mt-5 mb-5 text-center">Wochenkarte</h1>
        
         <!-- Abfrage -> Logout JA oder NEIN -->

            <div class="row justify-content-center mt-4">
                
                <div class="col-sm-4 text-center">
                    <h4><label for="number">Wollen Sie sich wirklich abmelden?</label></h4>

                    <input type="checkbox" id="cookie" name="cookies" value="cookie">
                    <label for="cookie">Wollen Sie die Cookies löschen?</label><br>
                
                </div>
            </div>

          

        <!-- Bestätigen Button -->

        <div class="row justify-content-center mt-4">
        
        <div class="col-sm-3">
                <input type="submit"
                       search="search"
                       class="btn btn-info btn-block"
                       value="Ja"
                />     
            </div>

            <!-- Zurück/Abbrechen Button  -->

            <div class="col-sm-3">
                <a href="../karte.php"><button class="btn btn-danger btn-block">Zurück</button></a>
            </div>

    </form>
</div>
</body>
</html>
