<html>

<body>
<div id="div-id">
    <label for="current_password">
        Input a text
    </label>
    <input type="text" class="form-control required" id="current_password" name="current_password" placeholder="Insert your current password">

    <button id="submit-button" type="button" class="btn btn-success btn-lg btn-block">
        <i class="icon-check2"></i> Save
    </button>

    <div style="padding:10px;font-weight:bold;" id="tadsdas">

    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $( document ).ready(function() {
        $('#submit-button').on('click', function() {
            let inputVal =  $('#current_password').val();
            // alert(inputVal);
            $.ajax({
                method: "POST",
                url: "script.php",
                data: {
                    ajax_input: inputVal
                }
            })
                .done(function( data ) {
                    $('#tadsdas').text(data);
                });
        });

    })
</script>
</html>