<style>
p select{
    display:inline;
}
.my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>

<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
<select class="form-control col-md-2" id="selection-dropdown" name="profil">
    <option valeur="0">afficher par</option>
    <option valeur="boursier-loge">boursier logé</option>
    <option valeur="boursier-NonLoge">bouriser non logé</option>
    <option valeur="nonBoursier">Non boursier</option>
    <option valeur="nonBoursier">Matricule</option>
</select>
<hr>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>email</th>
                    <th>Telephone</th>
                    <th>Date de naissance</th>
                    <th>Type d'etudiant</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody id="listeStdBody" >
                <!-- <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
                <tr>
                    <td>azert</td>
                    <td>Someone</td>
                    <td>Someone</td>
                    <td>exemple@exemple.fr</td>
                    <td>771234567</td>
                    <td>01/01/2000</td>
                    <td>Boursier</td>
                </tr>
            </tbody> -->
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        loadData();
        function loadData() {
        $.ajax({
            url: 'http://localhost/projet%20POO/G8/dao/loadStd.php',
            type: 'POST',
            success:function(response){
                $("#listeStdBody").html(response);
            }
        });
        }

        $(document).on('click' , '.bn-delete' ,function(){
		if(confirm("Voulez-vous supprimer cette Chambre?")) {
            var id = this.id;
            alert(id);
			$.ajax({
				url: 'http://localhost/projet%20POO/G8/dao/deleteStd.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id},
				success:function(response){
					loadData();
				}
			});
		}
    });

    });
</script>