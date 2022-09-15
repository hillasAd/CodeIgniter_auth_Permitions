<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Usuario extends BaseController
{
    public function index()
    {
        echo '<h2> Index Usuario </h2>';
    }

    public function add()
    {
        echo '<h2> Add Usuario </h2>';
    }
    public function edit()
    {
        echo '<h2>Edit Usuario </h2>';
    }
    public function delete()
    {
        echo '<h2> Delete Usuario </h2>';
    }
}
