

let password = document.getElementById("txtPword");
let rePword = document.getElementById("txtRePword");

password.addEventListener("keyup", function(){
    let pass = document.getElementById("txtPword").value;
    CheckPassword(pass);
});

rePword.addEventListener("keyup", function(){
    let pass = document.getElementById("txtPword").value;
    let Repass = document.getElementById("txtRePword").value;
    if (Repass.length == 0) {
        $("#txtRePword").removeClass('is-invalid');
        $("#txtRePword").removeClass('is-valid');
    }else if (Repass != pass) {
        $("#txtRePword").addClass('is-invalid');
        $("#txtRePword").removeClass('is-valid');
    }else if (Repass == pass) {
        $("#txtRePword").addClass('is-valid');
        $("#txtRePword").removeClass('is-invalid');
    }else{$("#txtRePword").removeClass('is-valid'); $("#txtRePword").removeClass('is-invalid');}
});

function CheckPassword(password) {
    
    let strength = 0;

    if (password.length == 0) { strength = 0; }

    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) { strength += 1;
        $(".3").addClass("text-success");
        $(".b3").html("&#x2713;");}
    else{$(".3").removeClass("text-success"); $(".b3").html(""); strength -= 1;}

    if (password.match(/([0-9])/)) { strength += 1;
        $(".2").addClass("text-success");
        $(".b2").html("&#x2713;");}
    else{$(".2").removeClass("text-success"); $(".b2").html(""); strength -= 1;}

    if (password.length > 5) { strength += 1; $(".1").addClass("text-success"); $(".b1").html("&#x2713;");}
    else{$(".1").removeClass("text-success"); $(".b1").html(""); strength -= 1;}

    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) { strength += 1; $(".4").addClass("text-success");
        $(".b4").html("&#x2713;");}
    else{$(".4").removeClass("text-success"); $(".b4").html(""); strength -= 1;}

    if (strength > 3) {
        $("#txtPword").addClass('is-valid');
    }else{$("#txtPword").removeClass('is-valid');}
}
