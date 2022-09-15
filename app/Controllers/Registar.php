<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Registar extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if ($this->request->getMethod() === 'post') {
            $usuarioModel = model('UsuarioModel');
            try {
                $usuarioData = $this->request->getPost();
                $usuarioData['perfil'] = 'usuario';
                if ($usuarioModel->save($usuarioData)) {
                    $data['msg'] = 'Usuario criado com sucesso.';
                } else {
                    $data['msg'] = 'Erro ao criar Usuario';
                    $data['errors'] = $usuarioModel->errors();
                }

            } catch (\Exception $e) {
                $data['msg'] = 'Erro ao criar Usuario';
                $data['errors'] = $e->getMessage();
            }
        }
        return view('registrar',$data);
    }
}
