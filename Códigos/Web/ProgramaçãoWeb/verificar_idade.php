<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação da idade</title>
</head>
<body>
    <h1>Verificação da idade</h1>
    formulário de verificação de idade
    <form action="verificar_idade.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="text" name="idade" placeholder="Digite sua idade">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST['nome']) && isset($_POST['idade'])){
            
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            if(!empty($nome) && !empty($idade)){
                
                if($idade >= 18){
                    echo "Você é maior de idade";
                }else{
                    echo "Você é menor de idade";
                }
            }else{
                
                echo "Preencha todos os campos";


            }

        }
    ?>
</body>
</html>