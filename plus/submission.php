<?php
require_once 'dbt.php';

    $sql = "SELECT `numbers` FROM `counted`";
    $sqli = $conn->query($sql);

    $tables = $sqli->fetchAll(PDO::FETCH_COLUMN);



?>
<!DOCTYPE html>


<html>
<head>
    <title>plus</title>
 

</head>
<body>

<button id="submit" type="button" class="btn btn-success btn-lg btn-block">
    <i class="icon-check2"></i> +
</button>

<div id = "ne"><?php echo $tables[0] ?></div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function() {

        $("#submit").on('click', function () {

            let nqma = $('#ne').text();

            $.ajax({
                method: 'POST',
                url: 'index.php',
                data: {
                    ajax_input: nqma
                }

            }).done(function (data) {
                $('#ne').text(data);
            });
        });
    })
</script>


</body>




</html>