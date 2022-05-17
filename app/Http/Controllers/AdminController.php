<?php

namespace App\Http\Controllers;

use App\Models\Amity;
use App\Models\Eduxart;
use App\Models\Sertifikat;
use App\Models\Kompetisi;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'kompetisi' => Kompetisi::all(),
        ];
        return view('admin.index', $data);
    }

    public function user()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }
    public function userStore(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->bidang = $request->bidang;
        $data->role = $request->role;
        $data->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $request->file('image')->move('image_user/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        }
        $data->save();

        return redirect('/admin/user');
    }

    public function editUser($id)
    {
        $data = User::find($id);
        return view('admin.userEdit', compact('data'));
    }

    public function updateUser(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->bidang = $request->bidang;
        $data->role = $request->role;
        if ($request->hasFile('image')) {
            $request->file('image')->move('image_user/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        }
        $data->save();
        return redirect('/admin/user');
    }

    public function delUser($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/user');
    }

    // admin form
    public function form()
    {
        $data = Kompetisi::all();
        return view('admin.form', compact('data'));
    }

    public function formStore(Request $request)
    {
        $data = new Kompetisi();
        $data->jenis_lomba = $request->jenis_lomba;
        $data->lomba = $request->lomba;
        $data->ekskul = $request->ekskul;
        $data->status = $request->status;
        if ($request->hasFile('image')) {
            $request->file('image')->move('image_form/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        }
        $data->guide_book = $request->guide_book;
        $data->save();
        return redirect('/admin/form');
    }

    public function statusForm(Request $request, $id)
    {
        $data = Kompetisi::find($id);
        $data->status = $request->status;

        $data->save();

        return redirect(route('admin/form'));
    }

    public function delForm($id)
    {
        $data = Kompetisi::find($id);
        $data->delete();

        return redirect('/admin/form');
    }

    public function editGB($id)
    {
        $data = Kompetisi::find($id);
        return view('admin.editGuideBook', compact('data'));
    }

    public function UpdateGB(Request $request, $id)
    {
        $data = Kompetisi::find($id);
        $data->guide_book = $request->guide_book;
        $data->save();

        return redirect('/admin/form');
    }

    // sertifikat
    public function sertifikat(Request $request)
    {
        if ($request) {
            $data = Sertifikat::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data = Sertifikat::all();
        }
        return view('admin.sertifikat', compact('data'));
    }

    public function sertifikatStore(Request $request)
    {
        $data = new Sertifikat();

        $data->name = $request->name;
        $data->sekolah = $request->sekolah;
        $data->lomba = $request->lomba;
        $data->juara = $request->juara;
        if ($request->hasFile('sertifikat')) {
            $request->file('sertifikat')->move('sertifikat/', $request->file('sertifikat')->getClientOriginalName());
            $data->sertifikat = $request->file('sertifikat')->getClientOriginalName();
        }
        $data->save();

        return redirect(route('admin/sertifikat'));
    }

    public function delSertif($id)
    {
        $data = Sertifikat::find($id);
        $data->delete();

        return redirect(route('admin/sertifikat'));
    }

    // report 
    public function report()
    {
        $data = [
            'education' => Eduxart::all(),
            'sport' => Sport::all(),
            'amity' => Amity::all(),
        ];

        return view('admin.report', $data);
    }

    public function destroyEduxart($id)
    {
        $data = Eduxart::find($id);
        $data->delete();

        return redirect('/admin/report');
    }

    public function destroySport($id)
    {
        $data = Sport::find($id);
        $data->delete();

        return redirect('/admin/report');
    }

    public function destroyAmity($id)
    {
        $data = Amity::find($id);
        $data->delete();

        return redirect('/admin/report');
    }
}
