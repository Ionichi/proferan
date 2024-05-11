<?php

namespace App\Http\Controllers;

use App\Services\ModuleService;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    protected $moduleService;

    public function __construct(ModuleService $moduleService)
    {
        $this->moduleService = $moduleService;
    }

    public function index()
    {
        return view('pages.pengeluaran.index');
    }
}
