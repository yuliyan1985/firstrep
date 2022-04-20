<?php
require_once '../db.php';

?>

<!DOCTYPE html>
<title></title>
<head></head>
<body>

<form action="../script/updatePlayer.php" method="POST">


 <select id = "id" name = "id">
     <option>---change player---</option>
     <?php
     $selectPl = "SELECT * FROM players_table";
     $updatePl = $conn->query($selectPl);
     $newPl = $updatePl->fetchAll(PDO::FETCH_ASSOC);

     foreach ($newPl as $newPlayer) {
        echo '<option value="'.$newPlayer['id'].'">' . $newPlayer['players'] .'</option>';
    }
    ?>
 </select>
   <input type="text" name="changePlayer" class="form-control  required" placeholder="new player">
    <button type="submit" name="update" class="btn btn-primary">update</button>
</form>

</body>
</html>
