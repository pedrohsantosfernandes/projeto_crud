<!-- consulta_alunos.php -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/consulta.css'); ?>">

    <title>Consulta de Alunos</title>
</head>
<body>
    <div class="consulta">
        <h1>Alunos cadastrados</h1>
        <ul>
            <?php foreach ($alunos as $aluno): ?>
                <li>
                    <?= esc($aluno['nome']) ?>,
                    <?= esc($aluno['nascimento']) ?>,
                    <?= esc($aluno['endereco']) ?>,
                    <?= esc($aluno['cidade']) ?>,
                    <?php if (isset($aluno['id'])): ?>
                        
                        <div class="beditex"> 
                            <a href="<?= base_url('public/consulta-alunos/editar/' . $aluno['id']) ?>">
                                <button class="beditar" type="button">Editar Aluno</button>
                            </a>   

                            <a href="<?= base_url('public/consulta-alunos/excluir/' . $aluno['id']) ?>">
                                <button class="bexcluir" type="button">Excluir Aluno</button>
                            </a>
                        </div>                
    
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <a href="http://localhost/cadastro/public/">
            <button class="pcadastro" type="button">Página de Cadastro</button>
        </a>
    </div>
</body>
</html>
