<html>
<?php
require_once '../db.php';

?>
<head>

</head>
<body>
<div id="div-id">
    <form action="../script/tennis_table.php" method="POST">

        <label for="result">
            Scores
        </label>
        <input type="number" class="form-control required" id="result" name="result" min="0" max="3" placeholder="Insert score here">
        :
        <input type="number" class="form-control required" id="result2" name="result2" min="0" max="3" placeholder="Insert score here">
        <br>
        <br>





        <?php
        //вкарва резултата

        $id = $_GET['id'];

        $sql = "SELECT *FROM `scores` WHERE `id` = $id";
        $b = $conn->query($sql);
        $players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);

        foreach($players_1_2 as $id) {

            ?>
            <input type="hidden" name ="scores_id" value = "<?php echo $id['id']?>;">

            <?php
        }?>




        <button id="submit-button" type="submit" class="btn btn-success btn-lg btn-block">
            <i class="icon-check2"></i> Save
        </button>

    </form>

</div>
</body>
</html>