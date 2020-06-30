<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
            <p>Ajouter un étudiant</p>
            <hr>
            <form action="" id="add-new-chamber" class="form-group" action="javascript:void(0)" class="form-group needs-validation" novalidate>

            
                <label for="">Numero Batiment</label>
                <input type="text" class="form-control col-md-5" name="numeroBat" id="numeroBat" aria-describedby="helpId" placeholder="Numero Batiment" required>

                <label for="">Type Chambre</label>
                <select required class="form-control col-md-5" name="typeChambre" id="selection-dropdown">
                    <option valeur="0">Type de Chambre</option>
                    <option valeur="individuel">Individuel</option>
                    <option valeur="deux">A deux</option>
                </select>
                <div class="col-md-5 mt-4">
                <button type="reset" class="btn btn-danger">Annluer</button>
                <button type="submit" class="btn btn-success float-right">Enregistrer</button>
                </div>
                
                
                
            </form>
        
</div>

<script>
    let selectionDropdown = document.getElementById("selection-dropdown");
    let selectionOptions = selectionDropdown.getElementsByTagName("option");
    selectionOptions[0].disabled = true;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?=BASE_URL?>/public/js/newChamber.js"></script>
