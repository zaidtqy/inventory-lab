<?php

namespace App\Http\Controllers;

use App\Models\Psidasar_inventory;
use App\Models\Psimenengah_inventory;
use App\Models\Psilanjut_inventory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $psidasar = [
            'rusak' => Psidasar_inventory::where('description', 'RUSAK')->count(),
            'dipakai' => Psidasar_inventory::where('description', 'DIPAKAI')->count(),
        ];
        $psimenengah = [
            'rusak' => Psimenengah_inventory::where('description', 'RUSAK')->count(),
            'dipakai' => Psimenengah_inventory::where('description', 'DIPAKAI')->count(),
        ];
        $psilanjut = [
            'rusak' => Psilanjut_inventory::where('description', 'RUSAK')->count(),
            'dipakai' => Psilanjut_inventory::where('description', 'DIPAKAI')->count(),
        ];

        return view('pages.dashboard')->with([
            'psidasar' => $psidasar,
            'psimenengah' => $psimenengah,
            'psilanjut' => $psilanjut
        ]);
    }
}
