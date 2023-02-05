<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index() {
        $contracts = Contract::all();
        return view('contracts.index')->with('contracts', $contracts);
    }
}
