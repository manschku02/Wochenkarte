<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta search
    ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit
    =no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css"> 

    <title>Wochenkarte</title>    
</head>
<body style="zoom: 150%">
<div class="container">
    <form action="../Controllers/check.php" method="post">
        
        <h1 class="mt-5 mb-5 text-center">Wochenkarte</h1>
        
         <!-- EMail -->

            <div class="row justify-content-center mt-4">
                
                <div class="col-sm-4">
                    <h4><label for="number">Bitte anmelden</label></h4>
                    <input type="email" class="form-control" id="email" placeholder="Geben Sie Ihre Email ein" name="email" required="required">
                </div>
                
            </div>
      

        <!-- Passwort -->

        <div class="row justify-content-center mt-4">
                
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="password" placeholder="Geben Sie Ihr Passwort ein" name="password" required="required">
                </div>
                
        </div>

        <!-- Login Button -->

        <div class="row justify-content-center mt-4">

        <div class="col-sm-4">
                <input type="submit"
                       search="search"
                       class="btn btn-info btn-block"
                       value="Login"
                       name="login"
                />     
            </div>

        <form>
</div>
</body>
</html>
