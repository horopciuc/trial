 /* Get from elements values */
var values = $(this).serialize();  // <-- zafaq is dis
var input = $("#myText");
var reversedArray = new Array();

for (var i = 0; i < input.length; i++ ) {
    reversedArray[i] = input[input.length - (i+1)];
}


$.ajax({
    url: "2.php",
    type: "post",
    data: reversedArray,  //trimitem mai multe  !!! NU E COMPLET
    dataType: "json",
    success: function (response) {
       // you will get response from your php page (what you echo or print)                 

    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }


});