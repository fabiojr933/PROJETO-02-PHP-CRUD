
		<fieldset>
			<legend>Lista de Cantores</legend>
			<a href="<?php echo URL_BASE . "Cantor/create" ?>" class="btn float-right" style="top:-30px">Inserir novo</a>
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach($cantores as $cantor) { ?>
					<tr>
						<td align="center"><?php echo $cantor["id_cantor"] ?></td>
						<td align="center"><?php echo $cantor["cantor"] ?></td>
						<td align="center">
							<a href="<?php echo URL_BASE ."cantor/delete/" .$cantor["id_cantor"]?>" class="btn">Excluir</a>
							<a href="<?php echo URL_BASE ."cantor/edit/" .$cantor["id_cantor"]?>" class="btn">Editar</a>
						</td>
					</tr>	
					<?php  } ?>				
				</tbody>
			<table>
		</fieldset>
