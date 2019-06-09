<?php 
require_once "autoload.php";
$atletas = ManipJSON::pegarAtletas();


 ?>
<div class="container-fluid"> 
 		<h1>Atletas</h1>
 		<br>
 		<div> 
 			<table class="table" id="tbl_atletas">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Data Nascimento</th>
			      <th scope="col">Numero de Vitórias</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>

			  <tbody>
			  	<?php 
			  		foreach ($atletas as $key => $value) {
			  			echo "
			  				  <tr>
						        <th scope='row'>".$value->getId()."</th>
						        <td>".$value->getNome()."</td>
						        <td>".$value->getDataNascimento()."</td>
						        <td>".$value->getNmrVitorias()."</td>
						        <td><a href='index.php?id_atl=".$value->getId()."'><button type='submit' class='btn btn-danger'>Excluir</button></a></td>
						      </tr>";
			  		}
			  	 ?>
			  </tbody>
			</table>
 		</div>
 	</div>