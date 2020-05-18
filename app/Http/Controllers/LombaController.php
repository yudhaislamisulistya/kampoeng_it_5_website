<?php

namespace App\Http\Controllers;

use App\Lomba;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('Role');
    }

    public function index()
    {
        $ceksatulomba = \App\Lomba::where('id_user', Auth::id())->get();
        $statuslombancsiswa = 0;
        $statuslombancmahasiswa = 0;
        $statuslombadgsiswa = 0;
        $statuslombadgumum = 0;
        $status = 0;
        foreach ($ceksatulomba as $cek) {
            if ($cek->code_lomba == 'SWANCCKIT5') {
                $statuslombancsiswa = 1;
            }
            if ($cek->code_lomba == 'MHSNCCKIT5') {
                $statuslombancmahasiswa = 1;
            }
            if ($cek->code_lomba == 'SWADGKIT5') {
                $statuslombadgsiswa = 1;
            }
            if ($cek->code_lomba == 'UMUMDGKIT5') {
                $statuslombadgumum = 1;
            }


            if ($ceksatulomba) {
                $status = 1;
            }
        }




        $dataauth = \App\User::find(Auth::id());
        return view('member.daftarlomba', compact('dataauth', 'status', 'statuslombancsiswa', 'statuslombancmahasiswa', 'statuslombadgsiswa', 'statuslombadgumum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < 8; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $datalistlomba = \App\ListLomba::where('id', $id)->first();
        $dataauth = \App\User::find(Auth::id());
        return view('member.pendaftaranlomba', compact('dataauth', 'datalistlomba', 'randomString'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeGabung(Request $request)
    {
        $kodeundangan = $request->kodeundangan;

        $datalomba = \App\Lomba::where('code_undangan', $kodeundangan)->first();

        if (($datalomba->code_lomba == 'SWANCCKIT5') || ($datalomba->code_lomba == 'MHSNCCKIT5') || ($datalomba->code_lomba == 'SWADGKIT5') || ($datalomba->code_lomba == 'UMUMDGKIT5')) {
            return redirect()->route('member_lomba_utama')->with('error', 'Lomba Merupakan Perorangan');
        }

        if ($datalomba) {
            $datatimmaks3 = \App\Lomba::where('code_undangan', $kodeundangan)->get();
            if (count($datatimmaks3) < 3) {
                $simpantim = new Team;
                $simpantim->id_user = Auth::id();
                $simpantim->code_undangan = $kodeundangan;
                $simpantim->status_team = 'Anggota';
                if ($simpantim->save()) {
                    return redirect()->route('member_lomba_utama')->with('success', 'Anda Berhasil Bergabung Dengan TIM ' . $datalomba->team_name . '');
                } else {
                    return redirect()->route('member_lomba_utama')->with('error', 'Ada Masalah');
                }
            } else {
                return redirect()->route('member_lomba_utama')->with('error', 'Maximal 3 Orang yah');
            }
        } else {
            return redirect()->route('member_lomba_utama')->with('error', 'Kode Undangan Tidak Valid');
        }
    }

    public function storeKonfirmasi($code_undangan, Request $request)
    {
        $post = new Lomba;
        $post->bukti = $request->file->getClientOriginalName();
        $affected = DB::update('UPDATE lombas SET bukti = ? WHERE code_undangan = ?', [$post->bukti, $code_undangan]);
        if ($affected) {
            $request->file->move('file_bukti', $request->file->getClientOriginalName());
            return redirect()->route('member_team_utama');
        } else {
            die('Ada Masalah');
        }
    }
    public function store(Request $request)
    {
        $simpan = new Lomba;
        $simpantim = new Team;
        $simpantim->id_user = Auth::id();
        $simpantim->code_undangan = $request->kodeundangan;
        $simpantim->status_team = "Ketua";
        $simpan->id_user = Auth::id();
        $simpan->code_undangan = $request->kodeundangan;
        $simpan->code_lomba = $request->kodelomba;
        $simpan->from = $request->asal;
        $simpan->team_name = $request->namatim;
        if ($simpan->save() && $simpantim->save()) {
            return redirect()->route('member_lomba_utama');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function show(Lomba $lomba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function edit(Lomba $lomba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lomba $lomba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $lomba)
    {
        //
    }
}
