<div class="col-md-9 float-right ml-3" style="margin-right: 3rem;margin-top: 2rem">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Numero Chambre</th>
      <th scope="col">Numero Departement</th>
      <th scope="col">Type de Chambre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="container">           
  </tbody>
</table>

</div>

<script>
  const URL_ROOT = "http://localhost/projet%20POO/G8/";
    $(document).ready(function(){
    loadData();
    function loadData() {
	$.ajax({
		url: 'http://localhost/projet%20POO/G8/dao/load.php',
		type: 'POST',
		success:function(response){
			$("#container").html(response);
		}
	});
}
   

    $(document).on('click' , '.bn-delete' ,function(){
		if(confirm("Voulez-vous supprimer cette Chambre?")) {
            var id = this.id;
            alert(id);
			$.ajax({
				url: 'http://localhost/projet%20POO/G8/dao/delete.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id},
				success:function(response){
					loadData();
				}
			});
		}
    });
    function edit_data(id,text,column_name){
        $.ajax({
            url: 'http://localhost/projet%20POO/G8/dao/update.php',
            method: "POST",
            data : {id: id, text:text, column_name: column_name},
            success: function(data){
                alert(data);
                console.log(data);
            }
        });
    }
    $(document).on('blur', '.numeroBatiment', function(){ 
      // alert('ok');  
        var id = $(this).data("id1");  
        var numeroBatiment = $(this).text();  
        edit_data(id,numeroBatiment, "numeroBatiment");  
        loadData(); 
   });
   $(document).on('blur', '.typeChambre', function(){
    
    var id = $(this).data("id2");  
    var typeChambre = $(this).text();
    edit_data(id, typeChambre, "typeChambre");   
     
    loadData();
});
    
});
</script>



