<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Titulo de Teste 1', 'corpo' => 'Corpo de teste 1'],
            ['titulo' => 'Titulo de Teste 2', 'corpo' => 'Corpo de teste 2'],
            ['titulo' => 'Titulo de Teste 3', 'corpo' => 'Corpo de teste 3'],
            ['titulo' => 'Titulo de Teste 4', 'corpo' => 'Corpo de teste 4'],
            ['titulo' => 'Titulo de Teste 5', 'corpo' => 'Corpo de teste 5']
        ];

        $this->render('home', [
            // 'nome' => $nome,
            'idade' => 90,
            'posts' => $posts
        ]);
    }

    public function fotos() {
        $this->render('fotos');
    }

    public function foto($parametros) {
        echo "Assessando a Foto: ".$parametros['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}