<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Service\EncuestaService;

class ReporteController extends Controller
{
    private $pageDescription;

    public function __construct()
    {
        $this->pageDescription = 'Reporte';
    }

    public function sexo()
    {
        $dataView = [];
        return view('admin/reporteSexo')->with($dataView);
    }

    public function trabajo()
    {
        $dataView = [];
        return view('admin/reporteTrabajo')->with($dataView);
    }

    public function academico()
    {
        $dataView = [];
        return view('admin/reporteAcademico')->with($dataView);
    }
}