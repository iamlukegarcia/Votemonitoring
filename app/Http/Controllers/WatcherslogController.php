<?php

namespace App\Http\Controllers;

use App\Models\Watcherslog;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class WatcherslogController extends Controller
{
    public function index(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $PrecinctLogs = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')->get();
        return view('TransactionLog', compact('PrecinctLogs', $PrecinctLogs));
        //return $PrecinctLogs;
    }

    public function dashboard(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $PrecinctLogs = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')->get();
        return view('TransactionLog', compact('PrecinctLogs', $PrecinctLogs));
        //return $PrecinctLogs;
    }

    public function Blue(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $Salacount = DB::table('voting_transactions')->where('brgy_id', 14)->where('updated_at', '>', $UpdateTime)->count();
        $SanIsidrocount = DB::table('voting_transactions')->where('brgy_id', 15)->where('updated_at', '>', $UpdateTime)->count();
        $PobUnocount = DB::table('voting_transactions')->where('brgy_id', 16)->where('updated_at', '>', $UpdateTime)->count();
        $PobDoscount = DB::table('voting_transactions')->where('brgy_id', 17)->where('updated_at', '>', $UpdateTime)->count();
        $PobTrescount = DB::table('voting_transactions')->where('brgy_id', 18)->where('updated_at', '>', $UpdateTime)->count();
        $Banaycount = DB::table('voting_transactions')->where('brgy_id', 2)->where('updated_at', '>', $UpdateTime)->count();
        $Niugancount = DB::table('voting_transactions')->where('brgy_id', 11)->where('updated_at', '>', $UpdateTime)->count();
        $Barangays = DB::table('barangays')
            ->whereBetween('brgy_id', [14, 18])
            ->orWhere('brgy_id', 2)
            ->orWhere('brgy_id', 11)
            ->get();

        $PrecinctLogs = DB::table('voting_transactions')
            ->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')
            ->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')
            ->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')
            ->whereBetween('voting_transactions.Brgy_id', [14, 18])
            ->orWhere('voting_transactions.Brgy_id', 2)
            ->orWhere('voting_transactions.Brgy_id', 11)
            ->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')
            ->get();

        $BarangayCount = [
            '14' => $Salacount,
            '15' => $SanIsidrocount,
            '16' => $PobUnocount,
            '17' => $PobDoscount,
            '18' => $PobTrescount,
            '2' => $Banaycount,
            '11' => $Niugancount,
        ];

        return view('TransactionLog', compact('BarangayCount', $BarangayCount, 'PrecinctLogs', $PrecinctLogs, 'Barangays', $Barangays));
    }
    public function Red(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $Baclarancount = DB::table('voting_transactions')->where('brgy_id', 1)->where('updated_at', '>', $UpdateTime)->count();
        $Banliccount = DB::table('voting_transactions')->where('brgy_id', 3)->where('updated_at', '>', $UpdateTime)->count();
        $Mamatidcount = DB::table('voting_transactions')->where('brgy_id', 9)->where('updated_at', '>', $UpdateTime)->count();

        $Barangays = DB::table('barangays')->where('brgy_id', 1)->orWhere('brgy_id', 3)->orWhere('brgy_id', 9)->get();

        $PrecinctLogs = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')->where('voting_transactions.Brgy_id', 1)->orWhere('voting_transactions.Brgy_id', 3)->orWhere('voting_transactions.Brgy_id', 9)->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')->get();

        $BarangayCount = [
            '1' => $Baclarancount,
            '3' => $Banliccount,
            '9' => $Mamatidcount,
           
        ];

        return view('TransactionLog', compact('BarangayCount', $BarangayCount, 'PrecinctLogs', $PrecinctLogs, 'Barangays', $Barangays));
    }

    public function Yellow(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $Casilecount = DB::table('voting_transactions')->where('brgy_id', 6)->where('updated_at', '>', $UpdateTime)->count();
        $Diezmocount = DB::table('voting_transactions')->where('brgy_id', 7)->where('updated_at', '>', $UpdateTime)->count();
        $Pittlandcount = DB::table('voting_transactions')->where('brgy_id', 12)->where('updated_at', '>', $UpdateTime)->count();
        $Pulocount = DB::table('voting_transactions')->where('brgy_id', 13)->where('updated_at', '>', $UpdateTime)->count();

        $Barangays = DB::table('barangays')
            ->whereBetween('brgy_id', [6, 7])
            ->orWhere('brgy_id', 12)
            ->orWhere('brgy_id', 13)
            ->get();

        $PrecinctLogs = DB::table('voting_transactions')
            ->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')
            ->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')
            ->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')
            ->whereBetween('voting_transactions.Brgy_id', [6, 7])
            ->orWhere('voting_transactions.Brgy_id', 12)
            ->orWhere('voting_transactions.Brgy_id', 13)
            ->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')
            ->get();

        $BarangayCount = [
            '6' => $Casilecount,
            '7' => $Diezmocount,
            '12' => $Pittlandcount,
            '13' => $Pulocount,
        ];

        return view('TransactionLog', compact('BarangayCount', $BarangayCount, 'PrecinctLogs', $PrecinctLogs, 'Barangays', $Barangays));
    }

    public function White(Request $request)
    {
        $CurrentTime = Carbon::now();
        $UpdateTime = $CurrentTime->subHour();

        $Bigaacount = DB::table('voting_transactions')->where('brgy_id', 4)->where('updated_at', '>', $UpdateTime)->count();
        $Butongcount = DB::table('voting_transactions')->where('brgy_id', 5)->where('updated_at', '>', $UpdateTime)->count();
        $Gulodcount = DB::table('voting_transactions')->where('brgy_id', 8)->where('updated_at', '>', $UpdateTime)->count();
        $Marinigcount = DB::table('voting_transactions')->where('brgy_id', 10)->where('updated_at', '>', $UpdateTime)->count();

        $Barangays = DB::table('barangays')
            ->whereBetween('brgy_id', [4, 5])
            ->orWhere('brgy_id', 10)
            ->orWhere('brgy_id', 8)
            ->get();

        $PrecinctLogs = DB::table('voting_transactions')
            ->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')
            ->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')
            ->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')
            ->whereBetween('voting_transactions.Brgy_id', [4, 5])
            ->orWhere('voting_transactions.Brgy_id', 10)
            ->orWhere('voting_transactions.Brgy_id', 8)
            ->select('watchers.FirstName', 'watchers.LastName', 'precincts.Precinct_id', 'precincts.RegisteredVoters', 'barangays.brgyName', 'voting_transactions.NumberofVotes', 'voting_transactions.Invalid_Votes', 'voting_transactions.updated_at')
            ->get();

        $BarangayCount = [
            '4' => $Bigaacount,
            '5' => $Butongcount,
            '10' => $Marinigcount,
            '8' => $Gulodcount,
        ];

        return view('TransactionLog', compact('BarangayCount', $BarangayCount, 'PrecinctLogs', $PrecinctLogs, 'Barangays', $Barangays));
    }
}
