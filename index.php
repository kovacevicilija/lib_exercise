<?php

// pdo applikacija
try{
    require_once('conn.php');
    $con_bas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // dodan exep iznimka

}

catch(Exception $e){

    $error = $e->getMessage();
}

if(isset($_POST) && !empty($_POST))
{
    $sql = "INSERT INTO users_app(ime, prezime, email, spol, dob) ";
    $sql .= "VALUES (:ime, :prezime, :email, :spol, :dob)";

    $result = $con_bas->prepare($sql);

    $values = array(':ime'          =>      $_POST['ime'], 
                    'prezime'       =>      $_POST['prezime'],
                    'email'         =>      $_POST['email'],
                    'spol'          =>      $_POST['spol'],
                    'dob'           =>      $_POST['god']);

    $res = $result->execute($values);

    if($res)
    {
        echo "<div class='container'><div class='form-group'>
        <div class='alert alert-success' role='alert'>Korisnik uspješno dodan</div></div></div>";

    }
    else{
         
            echo "<div class='container'><div class='form-group'>
            <div class='alert alert-danger' role='alert'>Korisnik nije dodan</div></div></div>";
        
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">

    </br><h2 style="float:left">Web application</h2>
    <a style="clear:both; padding: 5px; margin-left: 40px; font-size:1.6em;" href="view.php">Pogled svih korisnika</a></br></br></br>  
    

    
    
    <form method="POST" action="" class="form-horizontal col-md-6 col-md-offset-3">

    
    <div class="form-group">

    
    
    
    <label for="input1" name="ime" class="col-sm-2 control-label">Ime</label>

    <div class="col-sm-10">
    
    <input type="text" name="ime" class="form-control" id="input1" placeholder="Unesite vaše ime">
    
    </div>

    </div>

    <div class="form-group">
    
    <label for="input2" name="prezime" class="col-sm-2 control-label">Prezime</label>

    <div class="col-sm-10">
    
    <input type="text" name="prezime" class="form-control" id="input2" placeholder="Unesite vaše prezime">
    
    </div>

    </div>
    
    <div class="form-group">
    
    <label for="input3" name="email" class="col-sm-2 control-label">Email</label>

    <div class="col-sm-10">
    
    <input type="email" name="email" class="form-control" id="input3" placeholder="Unesite vaš E-mail">
    
    </div>

    </div>

    <div class="form-group">
    <div class="col-sm-10">

    <label>Spol: </label>

    <div class="form-check form-check-inline">
    <input class="form-check-input" name="spol" value="M" type="radio" id="inlineRadio1">
    <label class="form-check-label" for="inlineRadio1">Muško</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" name="spol" value="Z" type="radio"id="inlineRadio2">
    <label class="form-check-label" for="inlineRadio2">Žensko</label>
    </div>
    </div>
    </div>
    
    <div class="form-group">


    <label for="input5" name="god" class="col-sm-2 control-label">God</label>

    <div class="col-sm-10">

    <input type="number" name="god" class="form-control" id="input5" min="13" max="150" placeholder="Unesite vaše god">

    </div>

    </div>

    <div class="form-group">

    <div class="col-sm-10">
    
    <input type="submit" value="SUBMIT" class="btn btn-primary">
    
    </div>
    </div>
    </form>
    
    
    
    </div>

</body>
</html>