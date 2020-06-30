const URL_ROOT = "http://localhost/projet%20POO/G8/";
const $etudiantForm = $('#add-new-student');
const $select = $('#typeEtudiant');

// function showSuccess(input) {
//     const formControl = input.parentElement;
//     formControl.className = 'form-control success'; 
// }
// function checkEmail(input) {//Tester si l'email est valide
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//     if (re.test(input.value.trim().toLowerCase())) {
//         showSuccess(input);
//     } else {
//         showError(input,`Email is not valid!`);
//     }
// }
// function showError(input, message) {//Afficher les messages d'erreur
//     const formControl = input.parentElement;
//     formControl.className = 'form-control error';
//     const small = formControl.querySelector('small');
//     small.innerText = message;
// }
$('#email').on('keyup', function(){
    var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value);
    if (valid) {
        $(this).css("border", " 1px solid green");
        $('#emailEr').html('');
    }
    else{
        $(this).css("border", "1px solid red");
        $('#emailEr').html('Un email valide est sous la forme exemple@exemple.com');

    }
});

$('#tel').on('keyup', function () {
    var valid = /^(002217|7)(0|7|8){1}[0-9]{7}/.test(this.value);
    if (valid) {
        
        $(this).css("border", "1px solid green");
        $('#telEr').html('');
    }
    else{
        $(this).css("border", "1px solid red");
        $('#telEr').html("Un nummero valide est sous la forme 7xxxxxxxx");

    }
});

$etudiantForm.on('submit', function(){
    let selectedValue = $select.val();
    // alert(selectedValue);

    $etudiantForm.addClass("was-validated");
    var error = false;
    if ((!$('#prenom').val()) || (!$('#nom').val()) || (!$('#email').val()) || (!$('#tel').val()) || (!$('#birthday').val()) || !selectedValue) {
        error = true;
    }

    console.log($etudiantForm.serialize());
    console.log(`${URL_ROOT}Etudiant/addStudent`);

    if(!error){
        $.ajax({
            url:`${URL_ROOT}Etudiant/addStudent`,
            method:"POST",
            data: $etudiantForm.serialize(),
            success: function (data){
                alert(data);
            }
        });
    }

});