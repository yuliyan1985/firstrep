<?php
include 'db.php';
?>
<!DOCTYPE html>

<html>
<head>
    <title>

    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            var commentCount = 2;
           $("button").click(function () {
               commentCount = commentCount + 2;
               $("#comments").load("load-comments.php", {
                   commentNewCount:commentCount,
               });

           })
        });

    </script>
</head>

<body>

<div id="comments">
    <?php
    $sql = "SELECT * FROM comments LIMIT 2";
    $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
           echo "<p>";
           echo $row['author'];
           echo "<br>";
           echo $row['message'];
           echo "</p>";

       }
   }else{
       echo "there are no comments";
   }
    ?>
</div>

<button>show more comments</button>
</body>

</html>

