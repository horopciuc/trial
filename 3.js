$(document).ready(function() {
    // Get initial value
    var myInput         = $('#myText'),
        myResult        = $("#myResult"),
        myResult2       = $("#myResult2"),
        myResult3       = $("#myResult3"),
        myResult4       = $("#myResult4");

    // Req ajax
    $('#button').click(function() {
        $.ajax({
            url: '4.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                initialString: myInput.val(),
            }
        })
        .done(function(recivedData) {
            if ( recivedData.InitialInput != undefined ) {
                console.log(recivedData);

                myResult.html(recivedData.InitialInput)
                myResult2.html(recivedData.ReversedArray)
                myResult3.html(recivedData.HexInput)
                myResult4.html(recivedData.BinaryInput)
            } else {
                console.log("nu a mers");
            };
        })
    });
});

