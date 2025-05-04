<?php

namespace App\Http\Controllers\Admin;

use App\Models\Investment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaturedInvestmentsController extends Controller
{
    public function index() {
        $matured_investments = Investment::where('confirmation_status', 'confirmed')->where('matured', true)->get();
        return view('admin.matured-investments.index', [
            'matured_investments' => $matured_investments
        ]);
    }

    public function edit(Request $request) {
        $investment_id = $request->id;
        $investment = Investment::where('id', $investment_id)->first();
        return view('admin.matured-investments.edit', [
            'investment' => $investment
        ]);
    }
}
