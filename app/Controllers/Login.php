<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if ($this->request->getMethod() === 'post') {
            $usuarioModel = model('UsuarioModel');
            $usuarioCheck = $usuarioModel->check($this->request->getPost('usuario'),
                $this->request->getPost('senha'));
            if (!$usuarioCheck) {
                $data['msg'] = 'Usuario e/ou Senha incorretos.';
            } else {
                $this->session->set('nome', $usuarioCheck->nome);
                $this->session->set('perfil', $usuarioCheck->perfil);
                return redirect()->to('admin');
            }

        }
        return view('login', $data);
    }
}
