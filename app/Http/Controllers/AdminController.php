<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    
    public function index() {
        // Devuelve la vista index.blade.php ubicada en la carpeta views/admin
        return view('admin.index');
    }
}
