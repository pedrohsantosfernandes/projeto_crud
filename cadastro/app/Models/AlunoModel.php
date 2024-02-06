<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunoModel extends Model
{
    protected $table = 'alunos';
    protected $allowedFields = ['nome', 'nascimento', 'endereco', 'cidade'];

    /**
     * Obtém um aluno pelo ID.
     *
     * @param int $id ID do aluno.
     * @return array|null Retorna os dados do aluno ou null se não encontrado.
     */
    public function getAlunoById($id)
    {
        return $this->find($id);
    }

    /**
     * Atualiza os dados de um aluno.
     *
     * @param int $id ID do aluno.
     * @param array $data Dados a serem atualizados.
     * @return bool Retorna true se a atualização for bem-sucedida, false caso contrário.
     */
    public function updateAluno($id, $data)
    {
        // Verifica se o aluno existe antes de tentar atualizar
        if ($this->getAlunoById($id)) {
            $this->update($id, $data);
            return true;
        }

        return false;
    }

    /**
     * Exclui um aluno pelo ID.
     *
     * @param int $id ID do aluno a ser excluído.
     * @return bool Retorna true se a exclusão for bem-sucedida, false caso contrário.
     */
    public function deleteAluno($id)
    {
        // Verifica se o aluno existe antes de tentar excluir
        if ($this->getAlunoById($id)) {
            $this->delete($id);
            return true;
        }

        return false;
    }
}
