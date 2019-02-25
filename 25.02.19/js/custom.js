var additionBtn = document.getElementById('add');

additionBtn.onclick = function () {
    var fstNumValue = Number(document.getElementById('firstNumber').value);
    var secondNumValue = Number(document.getElementById('secondNumber').value);

    var result = fstNumValue+secondNumValue;

    document.getElementById('result').value=result;
}
var additionBtn = document.getElementById('sub');

additionBtn.onclick = function () {
    var fstNumValue = Number(document.getElementById('firstNumber').value);
    var secondNumValue = Number(document.getElementById('secondNumber').value);

    var result = fstNumValue-secondNumValue;

    document.getElementById('result').value=result;
}
var additionBtn = document.getElementById('mul');

additionBtn.onclick = function () {
    var fstNumValue = Number(document.getElementById('firstNumber').value);
    var secondNumValue = Number(document.getElementById('secondNumber').value);

    var result = fstNumValue*secondNumValue;

    document.getElementById('result').value=result;
}
var additionBtn = document.getElementById('div');

additionBtn.onclick = function () {
    var fstNumValue = Number(document.getElementById('firstNumber').value);
    var secondNumValue = Number(document.getElementById('secondNumber').value);

    var result = fstNumValue/secondNumValue;

    document.getElementById('result').value=result;
}

/* ==== for loop ====*/
var additionBtn = document.getElementById('btn1');

additionBtn.onclick = function () {
    var startingNumber = Number(document.getElementById('value_1').value);
    var endingNumber = Number(document.getElementById('value_2').value);

    for (var x=startingNumber; x<=endingNumber;x++){
        res+=x;
    }

    document.getElementById('result').value=res;
}
