<?php 
include('includes/header.php');
?>
<div class="container">
	<div class="header-page">
		<div class="title-page">
			<h2>Contato</h2>
		</div>
		<p class="descriptioncontact">Aqui você poderá tirar suas dúvidas sobre exames, convênios e outras informações que precise. O IDS se compromete a responder em até 48h suas dúvidas encaminhadas ao nosso canal de atendimento.	Lembrando que no nosso site, na opção exames, você terá informações sobre os preparos de exames. <br>
		Estamos a disposição para ajudá-lo (a)!</p>
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
			<div id="Faleconosco" class="tabcontent contact">
				<div class="content-form">
					<div class="sub-title">
						<h3>Fale Conosco</h3>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="name">Nome:</label><br>
							<div class="col-sm-8 labelsl">          
								<input type="text" class="form-control" required placeholder="Digite seu nome" name="nome">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="email">Email:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Telefone:</label><br>
							<div class="col-sm-8 labelsl">          
								<input type="text" class="form-control" id="phone" required placeholder="Ex.: (00) 00000-0000" name="fone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Convênio:</label><br>
							<div class="col-sm-8 labelsl">          
								<select name="convenio" id="">
									<option value="vazio"></option>
									<option value="abet">ABET</option>
									<option value="allianz">Allianz</option>
									<option value="amafresp">AmaFresp</option>
									<option value="amil">Amil</option>
									<option value="apas">Apas</option>
									<option value="bradesco">Bradesco</option>
									<option value="cabesp">Cabesp</option>
									<option value="caixasaude">Caixa Saúde</option>
									<option value="careplus">Care Plus</option>
									<option value="cassi">Cassi</option>
									<option value="correios">Correios</option>
									<option value="economus">Economus</option>
									<option value="embratel">Embratel</option>
									<option value="em">Emgepron</option>
									<option value="">Fenix Medical</option>
									<option value="">Fundação CESP</option>
									<option value="">FUNSERV</option>
									<option value="">FUSEX</option>
									<option value="">Gama Saúde</option>
									<option value="">HAOC</option>
									<option value="">Marinha do Brasil</option>
									<option value="">Mediplan Saúde</option>
									<option value="">Mediservice</option>
									<option value="">Grupo NotreDame Intermédica</option>
									<option value="">OMINT</option>
									<option value="">PLAMTEL</option>
									<option value="">Porto Seguro</option>
									<option value="">SANAMED</option>
									<option value="">Real Grandeza</option>
									<option value="">Sompo Saúde</option>
									<option value="">SulAmérica</option>
									<option value="">Tempo Seguradora</option>
									<option value="">Unimed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Número Carteirinha Convênio:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" required placeholder="Número Carteirinha Convênio" name="numcarteirinha">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="comment">Mensagem:</label><br>
							<div class="col-sm-8 labelsl">
								<textarea class="form-control" rows="5" required placeholder="Mensagem" name="mensagem"></textarea>
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="Ouvidoria" class="tabcontent contact">
				<div class="content-form">
					<div class="sub-title">
						<h3>Ouvidoria</h3>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="name">Nome:</label><br>
							<div class="col-sm-8 labelsl">          
								<input type="text" class="form-control" required placeholder="Digite seu nome" name="nome">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="email">Email:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Telefone:</label><br>
							<div class="col-sm-8 labelsl">          
								<input type="text" class="form-control" id="phone" required placeholder="Ex.: (00) 00000-0000" name="fone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Assunto:</label><br>
							<div class="col-sm-8 labelsl">          
								<input type="text" class="form-control" required placeholder="Assunto" name="assunto">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="comment">Mensagem:</label><br>
							<div class="col-sm-8 labelsl">
								<textarea class="form-control" rows="5" required placeholder="Mensagem" name="mensagem"></textarea>
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="Orcamento" class="tabcontent contact">
				<div class="content-form">
					<div class="sub-title">
						<h3>Orçamento de Exames</h3>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="name">Nome:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu nome" name="nome">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="email">Email:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Telefone:</label><br>
							<div class="col-sm-8 labelsl">
								<input type="text" class="form-control" id="phone" required placeholder="Ex.: (00) 00000-0000" name="fone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Arquivos:</label><br>
							<div class="col-sm-8 labelsl">
								<input name="uploads[]" type=file multiple />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-10">
								<button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="Trabalhe" class="tabcontent contact">
				<div class="content-form">
					<div class="sub-title">
						<h3>Trabalhe Conosco</h3>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="name">Nome:</label><br>
							<div class="col-sm-10 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu nome" name="nome">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="email">Email:</label><br>
							<div class="col-sm-10 labelsl">
								<input type="text" class="form-control" required placeholder="Digite seu email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Telefone:</label><br>
							<div class="col-sm-10 labelsl">
								<input type="text" class="form-control" id="phone" required placeholder="Ex.: (00) 00000-0000" name="fone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4 input labels" for="fone">Arquivos:</label><br>
							<div class="col-sm-10 labelsl">
								<input name="uploads[]" type=file multiple />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include('includes/footer.php');
?>