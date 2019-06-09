# BootstrapExercicio

Esse exercicio foi feito com o intuito de aprender a utilizar o Bootstrap. Por conta disso foi feito um sistema simples de criação de competições, onde contêm apenas 3 objetos, sendo eles:

### Atleta

        class Atleta  extends AbsClassNome implements JsonSerializable {
          private $data_nascimento;
          private $nmr_vitorias;
          private $valor_ganho_em_premios;
          
### Esporte

        class Esporte extends AbsClassNome implements JsonSerializable {
	        private $descricao;
          
### Competição

        class Competicao extends AbsClassNome implements JsonSerializable{
	
          private $local;
          private $valor_premio;
          private $esporte;
          private $competidores;
          private $campeao;
          private $data;

O código foi separado em 3 pastas:
  - Classes: contendo as classes de negócio.
  - Dados: contendo os arquivos Json.
  - Componente: arquivos php que auxiliam na criação das páginas.
 
