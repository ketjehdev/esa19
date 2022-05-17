<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eduxart;
use App\Models\Sport;
use App\Models\Amity;

class ItSupportController extends Controller
{
    public function index()
    {
        $data = [
            'education' => Eduxart::all(),
            'sport' => Sport::all(),
            'amity' => Amity::all(),
        ];

        return view('it.index', $data);
    }
}
