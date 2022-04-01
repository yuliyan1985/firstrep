<html>
<?php
require_once 'db.php';
?>
<body>
<div id="div-id">
    <form action="tennis_table.php" method="POST">

    <label for="result">
    Scores
    </label>

    <input type="text" class="form-control required" id="result" name="result" placeholder="Insert score here">
       <br>
       <br>
        <select id="player_name" name="player_name">
            <option>players</option>
<?php
$sql = "SELECT * FROM `scores`";
$b = $conn->query($sql);
$players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);

foreach($players_1_2 as $player_name) {
    ?>
    <option><?php echo $player_name['players_1','players_2'];?></option>
<?php
}?>
 </select>



  <button id="submit-button" type="submit" class="btn btn-success btn-lg btn-block">
       <i class="icon-check2"></i> Save
    </button>

    </form>

</div>
</body>
</html>
