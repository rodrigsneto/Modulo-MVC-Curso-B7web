<?php
namespace src\controllers;

use \core\Controller;

use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add()
    {
        $this->render('add');
    }
    public function addAction() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input( INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL);

        if($nome && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                // INSERE
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();
                $this->redirect('/');

            }
            // redirect para novo
            $this->redirect('/novo');
        }
    }
    public function edit($args) {
        $usuario = Usuario::select()->where('id', $args['id'])->first();

        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }
    public function editAction($args) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input( INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL);

        if($nome && $email) {
            Usuario::update()
                ->set('nome', $nome)
                ->set('email', $email)
                ->where('id', $args['id'])
                ->execute();


            $this->redirect('/');
        }

        $this->redirect('/usuario/'.$args['id'].'/editar');
    }
    public function del($args) {
        Usuario::delete()
            ->where('id', $args['id'])
            ->execute();

        $this->redirect('/');
    }

}