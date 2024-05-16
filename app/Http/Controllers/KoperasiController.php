<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KoperasiModel;
use PhpParser\Node\Expr\New_;
use Dompdf\Dompdf;

class KoperasiController extends Controller
{
    public $KoperasiModel;

    public function __construct()
    {
        $this->KoperasiModel = new KoperasiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'koperasi' => $this->KoperasiModel->allData()
        ];
        return view('v_koperasi', $data);
    }

    public function print()
    {
        $data = [
            'koperasi' => $this->KoperasiModel->alldata()
        ];

        return view('v_print', $data);
    }

    public function printpdf()
    {
        $data = [
            'koperasi' => $this->KoperasiModel->allData()
        ];

        $html = view('v_printpdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream();
    }
}