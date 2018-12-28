<?php


    require_once('conn.php');
    $readsql = "SELECT * FROM `users_app`";
    
    
    
    
    // $con_bas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // dodan exep iznimka

    $stmt = $con_bas->query($readsql);


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM users_app WHERE id = {$id}";
        $stmt2 = $con_bas->prepare($sql);
        
        $stmt2->execute([$id]);
        
        if($stmt2)
        {
            echo "<div class='container'><div class='form-group'>
            <div class='alert alert-success' role='alert'>Odabrani korisnik obrisan</div></div></div>";

            header("Refresh:2; url=view.php");

        }

        }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View app</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
    <div class="form-group">
    <a href="index.php" style="margin:8px; font-size: 1.6em;">Home</a>

    </div>
    </div>
    <div class="container">
    
    <table class="table">
    
    <thead>

        <tr>

        <th>#</th>
        <th>Ime i prezime</th>
        <th>E-mail</th>
        <th>Spol</th>
        <th>God</th>
        <th>Promjena podataka</th>
        <th>Brisanje</th>
        
        
        </tr>

    </thead>
    
    <?php while($rezel = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    ?>

   

    <tbody>

        <tr>
        
        <td><?php echo $rezel['id']; ?></td>
        <td><?php echo $rezel['ime']; ?></td>
        <td><?php echo $rezel['prezime']; ?></td>
        <td><?php echo $rezel['spol']; ?></td>
        <td><?php echo $rezel['dob']; ?></td>
    

        <td><a href="update.php?id=<?php echo $rezel['id']; ?>" style="text-align: center;">Klik</a></td>
        <td><a href="view.php?id=<?php echo $rezel['id']; ?>">Obriši</a></td>
        
        
        </tr>
    
        <?php } ?>
    
    </tbody>
    
    </table>
    
    
    
    
    </div>


    
</body>
</html>