<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar alunos</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/style.css'); ?>">
    
</head>
<body>

   
    <div class="cadastro">
         <h1>Cadastro de alunos </h1>
            <form name="cadastro" action="aluno" method="post">
                Nome <input type= "text" name="nome" />
                Nascimento <input type="date" name="nascimento" />
                Endereco <input type="text" name="endereco" />
                Cidade <input type="text" name="cidade" />
                    <div class="botaoc">
                        <input class="enviar" type="submit" name="botao" value="Enviar"/>
                        <input class="limpar" type="reset" name="botao" value="Limpar"/>

                        <a href="http://localhost/cadastro/public/consulta-alunos">
                            <button class="consulta" type="button">Consultar Alunos</button>
                        </a>
                    </div>
            </form>
    </div>
    
</body>
</html>