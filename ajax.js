
$("#form").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "action.php",
        data: $("#form").serialize(),
        success: function (data) {
            $("#result_form").html(data);
        }
    });
});