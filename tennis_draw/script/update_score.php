<?php
$result = $_POST['result'];
$result_2 = $_POST['result2'];
$scores_id = $_POST['scores_id'];

if (!is_null($result) && !is_null($result_2)) {
    if ((int)$result == (int)$result_2) {

        header("location: ../forms/addscore_form.php?id=".$scores_id);

    }
}
    if ((int)$result > (int)$result_2) {

        $names = 'players_1';
    } else {
        $names = "players_2";
    }
    if (isset($_POST['result'])) {
        $updateResult = "UPDATE `scores` SET `score` = '".$result.":".$result_2."' , `winner_player_id` = `".$names."` WHERE `id` ='".$scores_id."'";
        $updateScore = $conn->prepare($updateResult);
        $updateScore->execute();
    }
//сравнява резултата и вкарва резултата и победителя от мача в таблицата и валидира резултата да не е равен

?>