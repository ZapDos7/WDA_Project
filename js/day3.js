$('#myNavbar > li').on('click', function() {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
  }); 

function validateForm() {
    var x = document.forms["myForm"]["Fname"].value;
    var y = document.forms["myForm"]["Lname"].value;
    var z = document.forms["textarea"]["message"].value;
    if (x == "")||(y == "")||(z == "") {
        alert("Every box must be filled out");
        return false;
    }
}