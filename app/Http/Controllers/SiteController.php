<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $tbl_crm_contatos = DB::table('tbl_crm_contatos')->get();
        $tbl_erp_contatos = DB::table('tbl_crm_contatos')->get();

        return view('site', [
            'crm_contatos' => $tbl_crm_contatos,
            'erp_contatos' => $tbl_erp_contatos
        ]);
    }
}
