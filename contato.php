<?php 
include('includes/header.php');
?>
<div class="container">
	<div class="header-page">
		<div class="title-page">
			
		</div>
		<p></p>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-4-col-12">
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Faleconosco')" id="defaultOpen">Fale Conosco</button>
				<button class="tablinks" onclick="openCity(event, 'Ouvidoria')">Ouvidoria</button>
				<button class="tablinks" onclick="openCity(event, 'Orcamento')">Orçamento de Exames</button>
				<button class="tablinks" onclick="openCity(event, 'Trabalhe')">Trabalhe Conosco</button>
			</div>
		</div>
		<div class="col-md-9 col-sm-8-col-12">
			<div id="Faleconosco" class="tabcontent">
				
			</div>
			<div id="Ouvidoria" class="tabcontent">
				
			</div>
			<div id="Orcamento" class="tabcontent">
				
			</div>
			<div id="Trabalhe" class="tabcontent">
				
			</div>
		</div>
	</div>
</div>
<?php 
include('includes/footer.php');
?>