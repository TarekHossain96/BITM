/* === First Name Validation === */
function checkfirstName(){
        var firstNameValue = $('#fname').val().length;
        if (firstNameValue >=6 && firstNameValue <=15){
            $('#fnameError').text('');
            return true;
        } else {
            $('#fnameError').text('First name should be 6 to 15 characters!');
            return false;
        }

}
$('#fname').click(function () {
    checkfirstName();
});
$('#fname').blur(function () {
    checkfirstName();
});
$('#fname').keyup(function () {
    checkfirstName();
});

/* === Last Name Validation === */
function checklastName(){
    var firstNameValue = $('#lname').val().length;
    if (firstNameValue >=6 && firstNameValue <=15){
        $('#lnameError').text('');
        return true;
    } else {
        $('#lnameError').text('First name should be 6 to 15 characters!');
        return false;
    }

}
$('#lname').click(function () {
    checklastName();
});
$('#lname').blur(function () {
    checklastName();
});
$('#lname').keyup(function () {
    checklastName();
});




/* === Email Validation === */


function checkEmail() {
    var pattern = new RegExp(/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@(([0-9a-zA-Z])+([-\w]*[0-9a-zA-Z])*\.)+[a-zA-Z]{2,9})$/);
    if (pattern.test($('#email').val())){
             $('#emailError').text('');
             return true;
    }else{
        $('#emailError').text('Email Address is invalid!');
        return false;
    }
}
$('#email').blur(function () {
    checkEmail();
});
$('#email').keyup(function () {
    checkEmail();
});

/* === Password Validation*/

function checkPassword() {
    var password =$('#password').val();
    var reg =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
    if (reg.test(password)){
        $('#passwordError').text('');
        return true;
    }else{
        $('#passwordError').text('Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.');
        return false;
    }
}
$('#password').blur(function () {
    checkPassword();
});
$('#password').keyup(function () {
    checkPassword();
});

/* ==== Password Chek box ===*/

$('#showhide').click(function () {
    var attrvalue = $('#password').attr('type');
    if (attrvalue == 'password') {
        $('#password').attr('type','text');
    }else {
        $('#password').attr('type','password');
    }
});

/* === Confirm Password === */

function confirmPassword() {
  var conPassValue = $('#confirmPassword').val();
    var password =$('#password').val();
    if (password == conPassValue){
        $('#confirmPasswordError').text('');
        return true;
    }else {
        $('#confirmPasswordError').text('Password Diid not match!');
        return false;
    }
}
$('#confirmPassword').blur(function () {
    confirmPassword();
});
$('#confirmPassword').keyup(function () {
    confirmPassword();
});


/* === Check Password === */

function checkDistrict() {
  var disValue = $('#district').val();
  if (disValue == ''){
      $('#districtError').text('Please gives Your district info.');
      return false;
  } else {
      $('#districtError').text('');
      return true;
  }
}

/* === Submit === */
$('#form').submit(function () {
   if (checkfirstName() == true && checklastName() == true && checkEmail() == true && checkPassword() == true){
       return true;
   } else {
       return false;
   }
});

