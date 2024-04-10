<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        // Specifica la data di interesse
        $data = '2024-04-10';

        $trainsToday = Train::whereDate('departure_time', '=', $data)->get();

        dump($trainsToday);

        return view('home');
    }
}
