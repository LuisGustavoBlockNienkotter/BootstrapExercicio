<?php 
require_once "autoload.php";
$esportes = ManipJSON::pegarEsportes();

 ?>
<div class="container-fluid"> 
 		<h1>Esportes</h1>
 		<br>
 		<div> 
 			<table class="table" id="tbl_esportes">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Descrição</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		foreach ($esportes as $key => $value) {
			  			echo "<tr>
						        <th scope='row'>".$value->getId()."</th>
						        <td>".$value->getNome()."</td>
						        <td>".$value->getDescricao()."</td>
						        <td><a href='index.php?id_esp=".$value->getId()."'><button type='submit' class='btn btn-danger'>Excluir</button></a></td>
						      </tr>";
			  		}
			  	 ?>
			  </tbody>
			</table>
 		</div>
 	</div>