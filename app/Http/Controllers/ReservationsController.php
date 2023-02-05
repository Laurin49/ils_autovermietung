<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index() {
        $reservations = Reservation::all();
        return view('reservations.index')->with('reservations', $reservations);
    }
}
