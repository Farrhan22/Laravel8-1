<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiswaModel;
use PhpParser\Node\Expr\New_;

class SiswaController extends Controller
{
    public $SiswaModel;

    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'siswa' => $this->SiswaModel->allData()
        ];
        return view('v_siswa', $data);
    }
}