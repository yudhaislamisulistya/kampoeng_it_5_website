<?php

namespace App\Http\Controllers;

use App\Lomba;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
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
        $dataauth = \App\User::find(Auth::id());
        $datatim = DB::select('SELECT * FROM users, teams, lombas, list_lombas WHERE users.id = teams.id_user AND teams.id_user = ? AND teams.code_undangan = lombas.code_undangan AND lombas.code_lomba = list_lombas.code ORDER BY status_team DESC', [Auth::id()]);
        return view('member.daftartim', compact('dataauth', 'datatim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($codeundangan)
    {
        $datalengkaptim = DB::select('SELECT teams.status_team, users.name, teams.created_at, teams.id_user, teams.code_undangan, lombas.code_lomba, lombas.team_name, lombas.status FROM teams, users, lombas WHERE teams.code_undangan = lombas.code_undangan AND teams.code_undangan = ? AND teams.id_user = users.id ORDER BY teams.status_team DESC;', [$codeundangan]);
        $dataauth = \App\User::find(Auth::id());
        return view('member.detailtim', compact('dataauth', 'datalengkaptim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    public function deleteanggota($id, $code_undangan)
    {
        DB::delete('DELETE FROM teams WHERE id_user = ? AND code_undangan = ?', [$id, $code_undangan]);
        return redirect()->route('member_team_utama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datatim = \App\Team::where('id_user', $id)->delete();
        $datalomba = \App\Lomba::where('id_user', $id)->delete();

        return redirect()->route('member_team_utama');
    }
}
