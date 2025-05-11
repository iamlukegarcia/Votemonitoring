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
         
        $PrecinctLogs = DB::table('voting_transactions')
        ->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')
        ->join('precincts', 'voting_transactions.Precinct_id', '=', 'precincts.Precinct_id')
        ->join('watchers', 'voting_transactions.Watcher_id', '=', 'watchers.Watchers_id')
        ->select('watchers.FirstName','watchers.LastName','precincts.PrecinctCode','precincts.RegisteredVoters','barangays.brgyName','voting_transactions.NumberofVotes','voting_transactions.Invalid_Votes','voting_transactions.updated_at')
        ->get();

         return view('TransactionLog',compact('PrecinctLogs' ,$PrecinctLogs) );
        //return $PrecinctLogs;
    }
}
