<?php

namespace App\Http\Controllers;

use App\Models\Amity;
use App\Models\Sport;
use App\Models\Eduxart;
use App\Models\Sertifikat;
use App\Models\Kompetisi;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function form()
    {
        $data = Kompetisi::all();
        return view('users.index', compact('data'));
    }

    public function daftar($id)
    {
        $data = Kompetisi::find($id);
        return view('users.daftar', compact('data'));
    }

    public function daftar2($id)
    {
        $data = Kompetisi::find($id);
        return view('users.daftar2', compact('data'));
    }

    public function pionering($id)
    {
        $data = Kompetisi::find($id);
        return view('users.pionering', compact('data'));
    }

    public function daftarCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'asal_sekolah' => 'required',
                'name' => 'required',
                'no_wa' => 'required|numeric',
                'kts' => 'required|max:2124',
                'bukti1' => 'required|max:2124',
                'bukti2' => 'required|max:2124',
                'bukti3' => 'required|max:2124',
                'check' => 'required',
            ],
            [
                'asal_sekolah.required' => 'Asal sekolah tidak boleh kosong🚀',
                'name.required' => 'Nama tidak boleh kosong🚀',
                'no_wa.required' => 'Nomor WhatsApp tidak boleh kosong🚀',
                'no_wa.numeric' => 'Nomor WhatsApp tidak valid🚀',
                'kts.required' => 'Harus ada inputan berupa gambar🚀',
                'bukti1.required' => 'Harus ada inputan berupa gambar screenshotan🚀',
                'bukti2.required' => 'Harus ada inputan berupa gambar screenshotan🚀',
                'bukti3.required' => 'Harus ada inputan berupa gambar screenshotan🚀',
                'kts.max' => 'size data gambar anda terlalu besar!🚀',
                'bukti1.max' => 'size data gambar anda terlalu besar!🚀',
                'bukti2.max' => 'size data gambar anda terlalu besar!🚀',
                'bukti3.max' => 'size data gambar anda terlalu besar!🚀',
                'check.required' => 'Diklik box nya yah:)',
            ]
        );

        $eduxart = new Eduxart();
        $eduxart->lomba = $request->lomba;
        $eduxart->asal_sekolah = $request->asal_sekolah;
        $eduxart->name = $request->name;
        $eduxart->no_wa = $request->no_wa;
        if ($request->hasFile('kts')) {
            $request->file('kts')->move('kts/', $request->file('kts')->getClientOriginalName());
            $eduxart->kts = $request->file('kts')->getClientOriginalName();
        }

        if ($request->hasFile('bukti1')) {
            $request->file('bukti1')->move('bukti_follow/', $request->file('bukti1')->getClientOriginalName());
            $eduxart->bukti1 = $request->file('bukti1')->getClientOriginalName();
        }

        if ($request->hasFile('bukti2')) {
            $request->file('bukti2')->move('bukti_follow/', $request->file('bukti2')->getClientOriginalName());
            $eduxart->bukti2 = $request->file('bukti2')->getClientOriginalName();
        }

        if ($request->hasFile('bukti3')) {
            $request->file('bukti3')->move('bukti_follow/', $request->file('bukti3')->getClientOriginalName());
            $eduxart->bukti3 = $request->file('bukti3')->getClientOriginalName();
        }
        $eduxart->status = $request->status;
        $eduxart->save();
        return redirect('/users/popup');
    }

    public function daftarCreate2(Request $request)
    {
        $this->validate($request, [
            'kts_ketua' => 'max:2124',
            'kts_player1' => 'max:2124',
            'kts_player2' => 'max:2124',
            'kts_player3' => 'max:2124',
            'kts_player4' => 'max:2124',
            'kts_player5' => 'max:2124',
        ]);

        $sport = new Sport();
        $sport->lomba = $request->lomba;
        $sport->asal_sekolah = $request->asal_sekolah;
        $sport->nama_tim = $request->nama_tim;
        $sport->ketua_tim = $request->ketua_tim;
        $sport->no_wa = $request->no_wa;
        $sport->player1 = $request->player1;
        $sport->player2 = $request->player2;
        $sport->player3 = $request->player3;
        $sport->player4 = $request->player4;
        $sport->player5 = $request->player5;
        $sport->id_ketua = $request->id_ketua;
        $sport->id_player1 = $request->id_player1;
        $sport->id_player2 = $request->id_player2;
        $sport->id_player3 = $request->id_player3;
        $sport->id_player4 = $request->id_player4;
        $sport->id_player5 = $request->id_player5;

        if ($request->hasFile('kts_ketua')) {
            $request->file('kts_ketua')->move('kts/', $request->file('kts_ketua')->getClientOriginalName());
            $sport->kts_ketua = $request->file('kts_ketua')->getClientOriginalName();
        }

        if ($request->hasFile('kts_player1')) {
            $request->file('kts_player1')->move('kts/', $request->file('kts_player1')->getClientOriginalName());
            $sport->kts_player1 = $request->file('kts_player1')->getClientOriginalName();
        }

        if ($request->hasFile('kts_player2')) {
            $request->file('kts_player2')->move('kts/', $request->file('kts_player2')->getClientOriginalName());
            $sport->kts_player2 = $request->file('kts_player2')->getClientOriginalName();
        }

        if ($request->hasFile('kts_player3')) {
            $request->file('kts_player3')->move('kts/', $request->file('kts_player3')->getClientOriginalName());
            $sport->kts_player3 = $request->file('kts_player3')->getClientOriginalName();
        }

        if ($request->hasFile('kts_player4')) {
            $request->file('kts_player4')->move('kts/', $request->file('kts_player4')->getClientOriginalName());
            $sport->kts_player4 = $request->file('kts_player4')->getClientOriginalName();
        }

        if ($request->hasFile('kts_player5')) {
            $request->file('kts_player5')->move('kts/', $request->file('kts_player5')->getClientOriginalName());
            $sport->kts_player5 = $request->file('kts_player5')->getClientOriginalName();
        }

        $sport->status = $request->status;
        $sport->save();


        return redirect('/users/popup');
    }

    public function pioneringCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'regu' => 'required',
                'asal_pangkalan' => 'required',
                'ketua' => 'required',
                'no_wa' => 'required',
                'penggalang1' => 'required',
                'penggalang2' => 'required',
                'penggalang3' => 'required',
                'penggalang4' => 'required',
                'kts1' => 'required|max:2124',
                'kts2' => 'required|max:2124',
                'kts3' => 'required|max:2124',
                'kts4' => 'required|max:2124',
                'kts5' => 'required|max:2124',
                'check' => 'required',
            ],
            [
                'regu.required' => 'Kolom ini tidak boleh kosong!',
                'asal_pangkalan.required' => 'Kolom ini tidak boleh kosong!',
                'ketua.required' => 'Kolom ini tidak boleh kosong!',
                'no_wa.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang1.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang2.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang3.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang4.required' => 'Kolom ini tidak boleh kosong!',
                'kts1.required' => 'Kolom ini tidak boleh kosong!',
                'kts2.required' => 'Kolom ini tidak boleh kosong!',
                'kts3.required' => 'Kolom ini tidak boleh kosong!',
                'kts4.required' => 'Kolom ini tidak boleh kosong!',
                'kts5.required' => 'Kolom ini tidak boleh kosong!',
                'kts1.max' => 'size data gambar anda melewati ketentuan',
                'kts2.max' => 'size data gambar anda melewati ketentuan',
                'kts3.max' => 'size data gambar anda melewati ketentuan',
                'kts4.max' => 'size data gambar anda melewati ketentuan',
                'kts5.max' => 'size data gambar anda melewati ketentuan',
                'check.required' => 'Kolom ini tidak boleh kosong!',
            ]
        );

        $amity = new Amity();
        $amity->lomba = $request->lomba;
        $amity->regu = $request->regu;
        $amity->asal_pangkalan = $request->asal_pangkalan;
        $amity->ketua = $request->ketua;
        $amity->no_wa = $request->no_wa;
        $amity->penggalang1 = $request->penggalang1;
        $amity->penggalang2 = $request->penggalang2;
        $amity->penggalang3 = $request->penggalang3;
        $amity->penggalang4 = $request->penggalang4;

        if ($request->hasFile('kts1')) {
            $request->file('kts1')->move('kts/', $request->file('kts1')->getClientOriginalName());
            $amity->kts1 = $request->file('kts1')->getClientOriginalName();
        }

        if ($request->hasFile('kts2')) {
            $request->file('kts2')->move('kts/', $request->file('kts2')->getClientOriginalName());
            $amity->kts2 = $request->file('kts2')->getClientOriginalName();
        }

        if ($request->hasFile('kts3')) {
            $request->file('kts3')->move('kts/', $request->file('kts3')->getClientOriginalName());
            $amity->kts3 = $request->file('kts3')->getClientOriginalName();
        }

        if ($request->hasFile('kts4')) {
            $request->file('kts4')->move('kts/', $request->file('kts4')->getClientOriginalName());
            $amity->kts4 = $request->file('kts4')->getClientOriginalName();
        }

        if ($request->hasFile('kts5')) {
            $request->file('kts5')->move('kts/', $request->file('kts5')->getClientOriginalName());
            $amity->kts5 = $request->file('kts5')->getClientOriginalName();
        }

        $amity->status = $request->status;
        $amity->save();

        return redirect('/users/popup');
    }

    public function daftarCreate3(Request $request)
    {
        $this->validate(
            $request,
            [
                'asal_pangkalan' => 'required',
                'ketua' => 'required',
                'no_wa' => 'required',
                'penggalang1' => 'required',
                'penggalang2' => 'required',
                'kts1' => 'required|max:2124',
                'kts2' => 'required|max:2124',
                'kts3' => 'required|max:2124',
                'check' => 'required',
            ],
            [
                'asal_pangkalan.required' => 'Kolom ini tidak boleh kosong!',
                'ketua.required' => 'Kolom ini tidak boleh kosong!',
                'no_wa.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang1.required' => 'Kolom ini tidak boleh kosong!',
                'penggalang2.required' => 'Kolom ini tidak boleh kosong!',
                'kts1.required' => 'Kolom ini tidak boleh kosong!',
                'kts2.required' => 'Kolom ini tidak boleh kosong!',
                'kts3.required' => 'Kolom ini tidak boleh kosong!',
                'kts1.max' => 'size data melewati batas yg sudah ditentukan!',
                'kts2.max' => 'size data melewati batas yg sudah ditentukan!',
                'kts3.max' => 'size data melewati batas yg sudah ditentukan!',
                'check.required' => 'Kolom ini tidak boleh kosong!',
            ]
        );

        $amity = new Amity();
        $amity->lomba = $request->lomba;
        $amity->asal_pangkalan = $request->asal_pangkalan;
        $amity->ketua = $request->ketua;
        $amity->no_wa = $request->no_wa;
        $amity->penggalang1 = $request->penggalang1;
        $amity->penggalang2 = $request->penggalang2;

        if ($request->hasFile('kts1')) {
            $request->file('kts1')->move('kts/', $request->file('kts1')->getClientOriginalName());
            $amity->kts1 = $request->file('kts1')->getClientOriginalName();
        }

        if ($request->hasFile('kts2')) {
            $request->file('kts2')->move('kts/', $request->file('kts2')->getClientOriginalName());
            $amity->kts2 = $request->file('kts2')->getClientOriginalName();
        }

        if ($request->hasFile('kts3')) {
            $request->file('kts3')->move('kts/', $request->file('kts3')->getClientOriginalName());
            $amity->kts3 = $request->file('kts3')->getClientOriginalName();
        }

        $amity->status = $request->status;
        $amity->save();

        return redirect('/users/popup');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function sertifikat(Request $request)
    {
        if ($request) {
            $data = Sertifikat::where('name', 'LIKE', '%' . $request->search . '%')->get();
        }

        return view('users.sertifikat', compact('data'));
    }
}
