
    let selectionDropdown = document.getElementById("selection-dropdown");
    let selectionOptions = selectionDropdown.getElementsByTagName("option");
    selectionOptions[0].disabled = true;
        $(document).ready(function(){
            var labelType = '<label> Type de bourse </label> <br>';
            var radioDemi = '<input id="inputs0Generer" class="ml-3" type="radio" value="20000" name="bourse" /> <label> Demi bourse </label> <br>';
            var radioEntiere = '<input id="inputs0Generer" class="ml-3" type="radio" value="40000" name="bourse" /> <label> Bourse entiere </label> <br>';
            var labelChambre = '<label> Numero Chambre </label> <br>';
            var inputChambre = '<input id="TextReponse" type="text" class="form-control col-md-5" name="chamre"/>';
            var labeladresse = '<label> Adresse </label> <br>';
            var inputadresse = '<input id="TextReponse" type="text" class="form-control col-md-5" name="adresse"/>';
            $("select#selection-dropdown").change(function(){
                if(($('#selection-dropdown').val()=="boursier logé")){
                        $('#infos-Plus').html('');
                        $('#infos-Plus').append(labelType);
                        $('#infos-Plus').append(radioDemi);
                        $('#infos-Plus').append(radioEntiere);
                        $('#infos-Plus').append(labelChambre);
                        $('#infos-Plus').append(inputChambre);
                }
                else if (($('#selection-dropdown').val()=="bouriser non logé")) {
                        $('#infos-Plus').html('');
                        $('#infos-Plus').append(labelType);
                        $('#infos-Plus').append(radioDemi);
                        $('#infos-Plus').append(radioEntiere);
                }
                else{
                    $('#infos-Plus').html('');
                    $('#infos-Plus').append(labeladresse);
                    $('#infos-Plus').append(inputadresse);
                }
            });
        });

