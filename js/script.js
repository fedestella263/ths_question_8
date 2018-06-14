$("#button-calculate").click(function() {
    $.ajax({
        url: "./api.php",
        type: "POST",
        dataType: "JSON",
        contentType: "application/json",
        data: JSON.stringify({
            values: [
                $("#input-value1").val(), 
                $("#input-value2").val()
            ],
            operation: $("#select-operation").val()
        }),
        success: function(res) {
            if(res["Status"] == "OK")
                $("#output-result").text(res["Result"]);
            else
                console.error(res);
        },
        error: function(err) {
            console.error(err);
        }
    });
});