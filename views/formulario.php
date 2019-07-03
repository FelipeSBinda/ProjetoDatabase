<form action="<?=$action?>" method="post">
    <label for="name" id="$nome">Nome:</label>
    <input type="text">
    <label for="data_nasc" id="$data_nascimento">Data de Nascimento:</label>
    <input type="date">
    <label for="CEP" id="$cep">CEP:</label>
    <input type="number">
    <label for="logradouro" id="$logradouro">Logradouro:</label>
    <input type="text">
    <label for="numero" id="$numero">Número:</label>
    <input type="number">
    <label for="bairro" id="$bairro">Bairro:</label>
    <input type="text">
    <label for="cidade" id="$cidade">Cidade:</label>
    <input type="text">
    <label for="estado" id="$estado">Estado:</label>
    <input type="text">
    <label for="id_curso" id="$id_curso">ID Curso:</label>
    <input type="number">
    <button type="submit">Enviar</button>
</form>
<?php
    $nome = "";
    $data_nascimento;= "";
    $cep = "";
    $logradouro = "";
    $numero = "";
    $cidade = "";
    $estado = "";
    $data_criacao = "";
    $cep = "";
    $id_curso = "";
	$textoBotao = "Enviar";
	$action = "controllers/alunoCadastroController.php";
	if (isset($_GET["log"])) {
		if ($_GET["pagina"] == "editar") {
			$dao = new DAO();
			$aluno = $dao->buscarPorAluno("aluno", $_GET["log"]);
			$nome = $aluno["nome"];
            $data_nascimento = $aluno["data_nascimento"};
            $cep = $aluno["cep"];
            $logradouro = $aluno["logradouro"];
            $numero = $aluno["numero"];
            $cidade = $aluno["cidade"];
            $estado = $aluno["estado"];
            $data_criacao = $aluno["$_GET["date_add"]"];
            $id_curso = $aluno["id_curso"];
			$textoBotao = "editar";
			$action = "controllers/alunoAlterarController.php";
		}
	}
?>