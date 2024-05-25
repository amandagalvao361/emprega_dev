<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // endereço do servidor
$username = "svroot"; // usuário do banco de dados
$password = "Empregadev@2024"; // senha do banco de dados
$dbname = "DB_EmpregaDEV"; // nome do banco de dados

// Dados a serem inseridos
$nome = "";
$sobrenome = "";
$idade = ;
$formacao = ;
$empregado = ;

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Preparar e executar a consulta SQL para inserção de dados
$sql = "INSERT INTO pesquisa (nome, sobrenome, idade, formacao, empregado) VALUES ('$nome', '$sobrenome', '$idade', '$formacao', '$empregado')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro inserido com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>
