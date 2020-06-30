<style>
    small{
    color: red;
}
</style>

<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
            <p>Ajouter un étudiant</p>
            <hr>
            <form id="add-new-student" action="javascript:void(0)" class="form-group needs-validation" novalidate>

                <div>
                <label for="">Prénom</label>
                <input type="text" class="form-control col-md-5 " name="prenom" id="prenom" aria-describedby="helpId" placeholder="Prenom" required>
                <small> </small>
                </div>
                
             <div>
             <label for="">Nom</label>
                <input type="text" class="form-control col-md-5" name="nom" id="nom" aria-describedby="helpId" placeholder="Nom" required>
                <small>  </small>
             </div>
                
                
                
                <!-- <label for="">Matricule</label>
                <input type="number"
                class="form-control col-md-5" name="matricule" id="matricule" aria-describedby="helpId" placeholder="Matricule"> -->
                <div>
                <label for="">email</label>
                <input type="email"
                class="form-control col-md-5" name="email" id="email" aria-describedby="helpId" placeholder="email" required>
                <small id="emailEr">  </small>
                </div>

                
                <div>
                <label for="">telephone</label>
                <input type="tel"
                class="form-control col-md-5" name="tel" id="tel" aria-describedby="helpId" placeholder="telephone" required>
                <small id="telEr">  </small>
                </div>
                
                    <div>
                    <label for="">date-naissance</label>
                <input type="date" class="form-control col-md-5" name="birthday" id="birthday" aria-describedby="helpId" placeholder="date-naissance" required>
                <small> </small>
                    </div>
                
                <label for="">Profil</label>
                <select class="form-control col-md-5" id="typeEtudiant" name="typeEtudiant" required>
                    <option valeur="0" required>Profil</option>
                    <option valeur="boursier logé">boursier logé</option>
                    <option valeur="bouriser non logé">bouriser non logé</option>
                    <option valeur="Non boursier">Non boursier</option>
                </select>
                <div id="infos-Plus">

                </div>
                <div class="col-md-5 mt-4">
                    <button type="reset" class="btn btn-danger">Annluer</button>
                    <button type="submit" value="addTudent" class="btn btn-success float-right" name="enregistrer">Enregistrer</button>
                </div>
                
                
                
            </form>
        
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?=BASE_URL?>/public/js/ajoutEtudiant.js"></script>
<script src="<?= BASE_URL ?>/public/js/newEtudiant.js"></script>

