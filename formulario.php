<?php

    if(isset($_POST['submit']))
    {
       
        include_once('config.php');

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $genero = $_POST['genero'];
        $empregado = $_POST['empregado'];
        $avaliacao = $_POST['avaliacao'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,idade,genero,empregado,avaliacao)
        VALUES ('$nome','$idade','$genero','$empregado','$avaliacao')");

           

        header("Location: redirect.php");
        die();

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Acesso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <a href="index.html"><img src="https://i.imgur.com/ofexIZt.png" alt="logo"></a>
        <div>
            <h1>EMPREGA //DEV</h1>
            <p>É tech pra você aproveitar e decolar</p>
    </header>
        <nav>
        <a href="sobre.html"><strong>Sobre o Emprega//DEV</strong></a>
        <a href="trilhas.html"><strong>Trilhas</strong></a>
        <a href="dicas.html"><strong>Dicas</strong></a>
        <a href="mentoria.html"><strong>Mentorias</strong></a>
        <a href="formulario.php"><strong>Pesquisa</strong></a>
    </nav>
    <main>
        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Pesquisa de Acessos</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>                 
                    </div><br>              
                    <div class="inputBox">
                        <input type="number" name="idade" id="idade" class="inputUser" required>
                        <label for="idade" class="labelInput">Idade</label>                            
                    </div><br>        
                    <div>Gênero:
                    <br>
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label>
                    <br>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label>
                    <br>
                        <input type="radio" id="outro" name="genero" value="outro" required>
                        <label for="outro">Outro</label>
                    <br><br>
                    </div>
                    <div>
                        <label>Você já atua na área de TI?</label>
                    <br>
                    <label>
                        <input type="radio" name="empregado" value="Atua em TI">Sim
                    </label>
                    <label>
                        <input type="radio" name="empregado" value="Não atua em TI">Não
                    </label>
                    <br><br>
                        <label>Como você avalia nosso conteúdo?</label>
                    <br>
                    <label>
                        <input type="radio" name="avaliacao" value="Péssimo"> Péssimo
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="Ruim"> Ruim
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="Mediano"> Mediano
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="Bom"> Bom
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="Excelente"> Excelente
                    </label>
            </div><br>
            <input type="submit" name="submit" id="submit">
        </div>
                    <br>
                </fieldset>
        </form>
    </div>
</main>
<footer>
        Site desenvolvido para UPX 2
</footer>
</body>
</html>