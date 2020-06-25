<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
            <p>Ajouter un étudiant</p>
            <hr>
            <form action="" class="form-group">

            
            <label for="">Numero Batiment</label>
                <input type="text" class="form-control col-md-5" name="nom" id="nom" aria-describedby="helpId" placeholder="Numero Batiment">
                <label for="">Type Chambre</label>
                <select class="form-control col-md-5" id="selection-dropdown">
                    <option valeur="0">Type de Chambre</option>
                    <option valeur="individuel">Individuel</option>
                    <option valeur="deux">A deux</option>
                </select>
                <div class="col-md-5 mt-4">
                <button type="reset" class="btn btn-danger">Annluer</button>
                <button type="button" class="btn btn-success float-right">Enregistrer</button>
                </div>
                
                
                
            </form>
        
</div>
<script>
    let selectionDropdown = document.getElementById("selection-dropdown");
    let selectionOptions = selectionDropdown.getElementsByTagName("option");
    selectionOptions[0].disabled = true;
</script>