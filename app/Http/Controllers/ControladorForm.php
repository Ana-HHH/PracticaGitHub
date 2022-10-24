<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorForm;


class ControladorForm extends Controller
{
    public function procesarForm(ValidadorForm $req) {
        return redirect('formulario')->with('confirm', 'Tu usuario fue enviado');

    }

    //// Views functions

    public function gotoFormulario() {
        return view('formulario');
    }
    public function gotoTabla() {
        return view('tabla');
    }

}
