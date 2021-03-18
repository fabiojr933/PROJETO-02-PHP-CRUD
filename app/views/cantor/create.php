		<fieldset>
			<legend>Cadastro</legend>
			<form method="POST" action="<?php echo URL_BASE ."cantor/salvar" ?>">
				<label>
					<small>Nome</small>
					<input type="text" name="nome" value="<?php echo isset($cantor) ? $cantor ["cantor"] : null?>" placeholder="Inserir nome">
				</label>
				<input type="hidden" name="id_cantor" value="<?php echo isset($cantor) ? $cantor ["id_cantor"] : null?>"></input>				
				<input type="submit" value="Cadastrar">
			</form>
			
		</fieldset>
