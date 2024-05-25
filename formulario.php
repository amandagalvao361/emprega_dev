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
            <h1>Pesquisa de Acesso</h1>
    </header>
    <nav>
        <a href="sobre.html">Sobre o Emprega//DEV</a>
        <a href="trilhas.html">Trilhas</a>
        <a href="dicas.html">Dicas</a>
        <a href="mentoria.html">Mentorias</a>
        <a href="formulario.php">Pesquisa</a>
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
                        <label for="outro">Outros</label>
                    <br><br>
                    </div>
                    <div>
                        <label>Você já atua na área de TI?</label>
                    <br>
                    <label>
                        <input type="radio" name="empregado" value="empregado">Sim
                    </label>
                    <label>
                        <input type="radio" name="empregado" value="desempregado">Não
                    </label>
                    <br><br>
                        <label>Como você avalia nosso conteúdo?</label>
                    <br>
                    <label>
                        <input type="radio" name="avaliacao" value="1"> 1 - Muito Ruim
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="2"> 2 - Ruim
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="3"> 3 - Mediano
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="4"> 4 - Bom
                    </label>
                    <label>
                        <input type="radio" name="avaliacao" value="5"> 5 - Muito Bom
                    </label>
            </div>
        </div>
                    <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</main>
<footer>
        Site desenvolvido para UPX 2
</footer>
</body>
</html>