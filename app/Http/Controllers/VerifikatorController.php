<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amity;
use App\Models\Eduxart;
use App\Models\Sport;

class VerifikatorController extends Controller
{
    public function index()
    {
        $data = [
            'education' => Eduxart::all(),
            'sport' => Sport::all(),
            'amity' => Amity::all(),
        ];
        return view('verifikator.index', $data);
    }
    public function eduxart(Request $request, $id)
    {
        $data = Eduxart::find($id);
        $data->status = $request->status;

        $data->save();

        return redirect(route('verifikator/index'));
    }
    public function sport(Request $request, $id)
    {
        $data = Sport::find($id);
        $data->status = $request->status;

        $data->save();

        return redirect(route('verifikator/index'));
    }
    public function amity(Request $request, $id)
    {
        $data = Amity::find($id);
        $data->status = $request->status;

        $data->save();

        return redirect(route('verifikator/index'));
    }

    public function destroyEduxart($id)
    {
        $data = Eduxart::find($id);
        $data->delete();

        return redirect('/verifikator/index');
    }

    public function destroySport($id)
    {
        $data = Sport::find($id);
        $data->delete();

        return redirect('/verifikator/index');
    }

    public function destroyAmity($id)
    {
        $data = Amity::find($id);
        $data->delete();

        return redirect('/verifikator/index');
    }
}
