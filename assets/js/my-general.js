$(document).ready(function () {
});

function NumbersOnly(e) { //Accepts numbers only
	var k = e.keyCode;
    return ((k >= 48 && k <= 57));
}