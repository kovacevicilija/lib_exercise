<?php
try{
    require_once('conn.php');
    $con_bas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // dodan exep iznimka

}

catch(Exception $e){

    $error = $e->getMessage();
}

$id = $_GET['id'];
$sql = "SELECT * FROM users_app WHERE id = ?";
$result = $con_bas->prepare($sql);

$sqlres = $result->execute(array($_GET['id']));

$res = $result->fetch(PDO::FETCH_ASSOC);

if(isset($_POST) && !empty($_POST)){

    $updatequery = "UPDATE users_app SET ime=:ime, prezime=:prezime, email=:email,";
    $updatequery .=" spol=:spol, dob=:dob WHERE id=:id";

    $result = $con_bas->prepare($updatequery);

    $values = array(':ime'          =>      $_POST['ime'], 
                    ':prezime'       =>      $_POST['prezime'],
                    ':email'         =>      $_POST['email'],
                    ':spol'          =>      $_POST['spol'],
                    ':dob'           =>      $_POST['god'],
                    'id'            =>      $_GET['id']);

    $res1 = $result->execute($values);
    
   


if(!$res)
{
    die("Niste spojeni na bazu podataka " . mysqli_error($con_bas));

}

    
   echo "<div class='container'><div class='form-group'>
        <div class='alert alert-success' role='alert'>Korisnik uspješno promjenjen</div></div></div>";
        
        
        header("Refresh: 1");
    

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

    </br><h2>Web application - Promjena korisnika</h2></br>

    <div class="container">
    <div class="form-group">
    
    <a href="index.php" style="font-size:30px; clear:both;">Home</a>
    
    </div>
    
    </div>
    
    <form method="POST" action="" class="form-horizontal col-md-6 col-md-offset-3">

    
    <div class="form-group">

    
    
    
    <label for="input1" name="ime" class="col-sm-2 control-label">Ime</label>

    <div class="col-sm-10">
    
    <input type="text" name="ime" class="form-control" value="<?php echo $res['ime']; ?>" id="input1" placeholder="Unesite vaše ime">
    
    </div>

    </div>

    <div class="form-group">
    
    <label for="input2" name="prezime" class="col-sm-2 control-label">Prezime</label>

    <div class="col-sm-10">
    
    <input type="text" name="prezime" class="form-control" value="<?php echo $res['prezime']; ?>" id="input2" placeholder="Unesite vaše prezime">
    
    </div>

    </div>
    
    <div class="form-group">
    
    <label for="input3" name="email" class="col-sm-2 control-label">Email</label>

    <div class="col-sm-10">
    
    <input type="email" name="email" value="<?php echo $res['email']; ?>" class="form-control" id="input3" placeholder="Unesite vaš E-mail">
    
    </div>

    </div>

    <div class="form-group">
    <div class="col-sm-10">

    <label>Spol: </label>

    <div class="form-check form-check-inline">
    <input class="form-check-input" name="spol" value="M" <?php if($res['spol'] == 'M'){echo "checked";} ?> type="radio" id="inlineRadio1">
    <label class="form-check-label" for="inlineRadio1">Muško</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" name="spol" value="Z" <?php if($res['spol'] == 'Z'){echo "checked";} ?> type="radio" id="inlineRadio2">
    <label class="form-check-label" for="inlineRadio2">Žensko</label>
    </div>
    </div>
    </div>
    
    <div class="form-group">


    <label for="input5" name="god" class="col-sm-2 control-label">God</label>

    <div class="col-sm-10">

    <input type="number" name="god" value="<?php echo $res['dob']; ?>" class="form-control" id="input5" min="13" max="150" placeholder="Unesite vaše god">

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