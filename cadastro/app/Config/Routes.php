<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('aluno', 'AlunoController::index');
$routes->post('aluno', 'AlunoController::index'); 
$routes->get('consulta-alunos', 'AlunoController::consulta');

$routes->get('consulta-alunos/editar/(:num)', 'AlunoController::editar/$1');
$routes->post('consulta-alunos/atualizar/(:num)', 'AlunoController::atualizar/$1');
$routes->get('consulta-alunos/excluir/(:num)', 'AlunoController::excluir/$1');
