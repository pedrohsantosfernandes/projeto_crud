<!DOCTYPE html>
<!-- editar_aluno.php -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
</head>
<body>
    <h2>Editar Aluno</h2>
    <form name="editarAluno" action="<?= base_url('public/consulta-alunos/atualizar/' . $aluno['id']) ?>" method="post">        Nome: <input type="text" name="nome" value="<?= esc($aluno['nome']) ?>" />
        Nascimento: <input type="date" name="nascimento" value="<?= esc($aluno['nascimento']) ?>" />
        Endereço: <input type="text" name="endereco" value="<?= esc($aluno['endereco']) ?>" />
        Cidade: <input type="text" name="cidade" value="<?= esc($aluno['cidade']) ?>" />

        <input type="submit" name="botao" value="Atualizar"/>
    </form>

    <a href="<?= base_url('public/consulta-alunos/excluir/' . $aluno['id']) ?>">
        <button type="button">Excluir Aluno</button>
    </a>
</body>
</html>
