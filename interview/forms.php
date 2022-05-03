
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Ajax PHP Form</title>
</head>
<body>

<form id="form">
    <div>
        years: <input type="number" id="year"
    </div>
    <div>
        years_2: <input type="number" id="year_2" /><br>
    </div>
    <input type="submit">
</form>

<div id="years-result"></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
        $('#form').on('submit', function(e){

            e.preventDefault();
            var year = $('#year').val();
            var year_2 = $('#year_2').val();
            $.ajax({
                type: "POST",
                url: 'ajax/index.php',
                data: {
                    year: year,
                    year_2: year_2
                },
                success: function(data){
                    $('#result').detach();
                    $('#years-result').append(data);
                }
            });
        });
    });
</script>
</body>
</html>
