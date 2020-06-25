<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
            <p>Ajouter un étudiant</p>
            <hr>
            <form action="<?=BASE_URL?>/security/addTudent" class="form-group">

                
                <label for="">Prénom</label>
                <input type="text"
                class="form-control col-md-5 " name="prenom" id="prenom" aria-describedby="helpId" placeholder="Prenom">
             
                <label for="">Nom</label>
                <input type="text"
                class="form-control col-md-5" name="nom" id="nom" aria-describedby="helpId" placeholder="Nom">
                
                
                <!-- <label for="">Matricule</label>
                <input type="number"
                class="form-control col-md-5" name="matricule" id="matricule" aria-describedby="helpId" placeholder="Matricule"> -->
                
                <label for="">email</label>
                <input type="email"
                class="form-control col-md-5" name="email" id="email" aria-describedby="helpId" placeholder="email">
                
                <label for="">telephone</label>
                <input type="tel"
                class="form-control col-md-5" name="telephone" id="telephone" aria-describedby="helpId" placeholder="telephone">
                
                <label for="">date-naissance</label>
                <input type="date"
                class="form-control col-md-5" name="date-naissance" id="date-naissance" aria-describedby="helpId" placeholder="date-naissance">
                <label for="">Profil</label>
                <select class="form-control col-md-5" id="selection-dropdown" name="profil">
                    <option valeur="0">Profil</option>
                    <option valeur="boursier-loge">boursier logé</option>
                    <option valeur="boursier-NonLoge">bouriser non logé</option>
                    <option valeur="nonBoursier">Non boursier</option>
                </select>
                <div id="infos-Plus">

                </div>
                <div class="col-md-5 mt-4">
                    <button type="reset" class="btn btn-danger">Annluer</button>
                    <button type="submit" value="addTudent" class="btn btn-success float-right" name="enregistrer">Enregistrer</button>
                </div>
                
                
                
            </form>
        
</div>

