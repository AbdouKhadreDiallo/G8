const URL_ROOT = "http://localhost/projet%20POO/G8/";
const $chambreForm = $('#add-new-chamber');
const $select = $('#selection-dropdown');

$chambreForm.on('submit', function () {
    alert('ok');
    let selectedValue = $select.val();
    $chambreForm.addClass("was-validated");
    var error = false;
    if ((!$('#numeroBat').val()) || !selectedValue) {
        error = true;
    }
    alert($chambreForm.serialize());

    console.log(`${URL_ROOT}Chambre/addChambre`);
    if(!error){
        $.ajax({
            url:`${URL_ROOT}Chambre/addChambre`,
            method:"POST",
            data: $chambreForm.serialize(),
            success: function (data){
                alert(data);
            }
        });
    }
})