<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function pemasukkan(){
        return view('/form/pemasukkan');
    }

    public function pengeluaran()
    {
        return view('/form/pengeluaran');
    }

    public function utang()
    {
        return view('/form/utang');
    }

    public function piutang()
    {
        return view('/form/piutang');
    }
}
