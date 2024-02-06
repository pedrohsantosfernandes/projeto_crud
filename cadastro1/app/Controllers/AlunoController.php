<?php

namespace App\Controllers;

use App\Models\AlunoModel;
use CodeIgniter\Controller;

class AlunoController extends Controller
{
    const BASE_URL = 'http://localhost/cadastro/public/';

    public function index()
    {
        if ($this->request->getMethod() === 'post') {
            $alunoModel = new AlunoModel();
            $data = [
                'nome'      => $this->request->getPost('nome'),
                'nascimento' => $this->request->getPost('nascimento'),
                'endereco'  => $this->request->getPost('endereco'),
                'cidade'    => $this->request->getPost('cidade'),
            ];
            $alunoModel->insert($data);
        }

        return redirect()->to(self::BASE_URL);
    }

    public function consulta()
    {
        $alunoModel = new AlunoModel();
        $alunos = $alunoModel->findAll();
        $data = ['alunos' => $alunos];
        echo view('consulta_alunos', $data);
    }
    
    public function editar($id)
    {
        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->getAlunoById($id);
        
        if ($aluno) {
            return view('editar_aluno', ['aluno' => $aluno]);
        } else {
            log_message('error', 'Student not found for ID: ' . $id);
            return redirect()->to(self::BASE_URL . 'consulta-alunos');
        }
    }   

    public function atualizar($id)
    {
        $alunoModel = new AlunoModel();
        $data = [
            'nome'      => $this->request->getPost('nome'),
            'nascimento' => $this->request->getPost('nascimento'),
            'endereco'  => $this->request->getPost('endereco'),
            'cidade'    => $this->request->getPost('cidade'),
        ];
    
        var_dump($data); // Check if the data is as expected
    
        $alunoModel->updateAluno($id, $data);
    
        return redirect()->to(self::BASE_URL . 'consulta-alunos');
    }

    public function excluir($id)
    {
        $alunoModel = new AlunoModel();
        $alunoModel->deleteAluno($id);
    
        return redirect()->to(self::BASE_URL . 'consulta-alunos');
    }
    

}
