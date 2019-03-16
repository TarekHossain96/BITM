/*
$('#h1').html('hello World')*/

/*
$('#btn').click(function () {
    // alert('Test');
    var fistName = $('#fname').val();
    var lstName = $('#lname').val();
    var fullName = fistName+ ' '+lstName;
    /!*alert(fullName);*!/
    $('#fullname').val(fullName);
})
*/
/* === First Name ===*/
    $('#fname').keyup(function () {
        var fistName = $('#fname').val();
        $('#res1').text(fistName);
    });

/* === Last Name ===*/
$('#lname').keyup(function () {
    var lastName = $('#lname').val();
    $('#res2').text(lastName);
});
/* === Full Name ===*/
$('#lname').blur(function () {
    var fistName = $('#fname').val();
    var lastName = $('#lname').val();
    $('#res3').text(fistName+' '+lastName);
});

