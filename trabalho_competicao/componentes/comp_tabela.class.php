<?php 
require_once "autoload.php";
$competicoes = ManipJSON::pegarCompeticoes();

 ?>
<div class="container-fluid"> 
 		<h1>Competições</h1>
 		<br>
 		<div> 
 			<table class="table" id="tbl_comp">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Local</th>
			      <th scope="col">Data</th>
			      <th scope="col">Esporte</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		foreach ($competicoes as $key => $value) {
			  			echo "<tr>
						        <th scope='row'>".$value->getId()."</th>
						        <td>".$value->getNome()."</td>
						        <td>".$value->getLocal()."</td>
						        <td>".$value->getData()."</td>
						        <td>".$value->getEsporte()->getNome()."</td>
						        <td><a href='index.php?id_comp=".$value->getId()."'><button type='submit' class='btn btn-danger'>Excluir</button></a></td>
						      </tr>";
			  		}
			  	 ?>
			  </tbody>
			</table>
 		</div>
 	</div>