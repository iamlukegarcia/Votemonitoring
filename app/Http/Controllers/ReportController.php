<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barangays;
use App\Models\School;
use App\Models\Watchers;
use App\Models\Precinct;
use App\Models\VotingTransaction;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $RegVotes = DB::table('precincts')->sum('RegisteredVoters');
        $NumVotes = DB::table('voting_transactions')->sum('NumberofVotes');
        $InvalidVotes = DB::table('voting_transactions')->sum('Invalid_Votes');

        // Barangay level code

        $BaclaranNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Baclaran')->sum('NumberofVotes');
        $BaclaranReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Baclaran')->sum('RegisteredVoters');
        $BanayNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Banay-Banay')->sum('NumberofVotes');
        $BanayReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Banay-Banay')->sum('RegisteredVoters');
        $BanlicNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Banlic')->sum('NumberofVotes');
        $BanlicReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Banlic')->sum('RegisteredVoters');
        $BigaaNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Bigaa')->sum('NumberofVotes');
        $BigaaReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Bigaa')->sum('RegisteredVoters');
        $ButongNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Butong')->sum('NumberofVotes');
        $ButongReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Butong')->sum('RegisteredVoters');
        $CasileNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Casile')->sum('NumberofVotes');
        $CasileReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Casile')->sum('RegisteredVoters');
        $DiezmoNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Diezmo')->sum('NumberofVotes');
        $DiezmoReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Diezmo')->sum('RegisteredVoters');
        $GulodNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Gulod')->sum('NumberofVotes');
        $GulodReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Gulod')->sum('RegisteredVoters');
        $MamatidNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Mamatid')->sum('NumberofVotes');
        $MamatidReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Mamatid')->sum('RegisteredVoters');
        $MarinigNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Marinig')->sum('NumberofVotes');
        $MarinigReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Marinig')->sum('RegisteredVoters');
        $NiuganNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Niugan')->sum('NumberofVotes');
        $NiuganReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Niugan')->sum('RegisteredVoters');
        $PittlandNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Pittland')->sum('NumberofVotes');
        $PittlandReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Pittland')->sum('RegisteredVoters');
        $PuloNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Pulo')->sum('NumberofVotes');
        $PuloReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Pulo')->sum('RegisteredVoters');
        $SalaNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Sala')->sum('NumberofVotes');
        $SalaReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Sala')->sum('RegisteredVoters');
        $SanIsidroNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'San Isidro')->sum('NumberofVotes');
        $SanIsidroReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'San Isidro')->sum('RegisteredVoters');
        $PobUnoNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Uno')->sum('NumberofVotes');
        $PobUnoReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Uno')->sum('RegisteredVoters');
        $PobDosNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Dos')->sum('NumberofVotes');
        $PobDosReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Dos')->sum('RegisteredVoters');
        $PobTresNum = DB::table('voting_transactions')->join('barangays', 'voting_transactions.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Tres')->sum('NumberofVotes');
        $PobTresReg = DB::table('precincts')->join('barangays', 'precincts.Brgy_id', '=', 'barangays.brgy_id')->where('barangays.brgyName', 'Poblacion Tres')->sum('RegisteredVoters');
        $Barangay = DB::table('barangays')->get();
        $CityCount = DB::table('voting_transactions')->where('updated_at', '<>', null)->count();
        $Baclarancount = DB::table('voting_transactions')->where('brgy_id', 1)->where('updated_at', '<>', null)->count();
        $Banaycount = DB::table('voting_transactions')->where('brgy_id', 2)->where('updated_at', '<>', null)->count();
        $Banliccount = DB::table('voting_transactions')->where('brgy_id', 3)->where('updated_at', '<>', null)->count();
        $Bigaacount = DB::table('voting_transactions')->where('brgy_id', 4)->where('updated_at', '<>', null)->count();
        $Butongcount = DB::table('voting_transactions')->where('brgy_id', 5)->where('updated_at', '<>', null)->count();
        $Casilecount = DB::table('voting_transactions')->where('brgy_id', 6)->where('updated_at', '<>', null)->count();
        $Diezmocount = DB::table('voting_transactions')->where('brgy_id', 7)->where('updated_at', '<>', null)->count();
        $Gulodcount = DB::table('voting_transactions')->where('brgy_id', 8)->where('updated_at', '<>', null)->count();
        $Mamatidcount = DB::table('voting_transactions')->where('brgy_id', 9)->where('updated_at', '<>', null)->count();
        $Marinigcount = DB::table('voting_transactions')->where('brgy_id', 10)->where('updated_at', '<>', null)->count();
        $Niugancount = DB::table('voting_transactions')->where('brgy_id', 11)->where('updated_at', '<>', null)->count();
        $Pittlandcount = DB::table('voting_transactions')->where('brgy_id', 12)->where('updated_at', '<>', null)->count();
        $Pulocount = DB::table('voting_transactions')->where('brgy_id', 13)->where('updated_at', '<>', null)->count();
        $Salacount = DB::table('voting_transactions')->where('brgy_id', 14)->where('updated_at', '<>', null)->count();
        $SanIsidrocount = DB::table('voting_transactions')->where('brgy_id', 15)->where('updated_at', '<>', null)->count();
        $PobUnocount = DB::table('voting_transactions')->where('brgy_id', 16)->where('updated_at', '<>', null)->count();
        $PobDoscount = DB::table('voting_transactions')->where('brgy_id', 17)->where('updated_at', '<>', null)->count();
        $PobTrescount = DB::table('voting_transactions')->where('brgy_id', 18)->where('updated_at', '<>', null)->count();

        $BarangayCount = [
            '1' => $Baclarancount,
            '2' => $Banaycount,
            '3' => $Banliccount,
            '4' => $Bigaacount,
            '5' => $Butongcount,
            '6' => $Casilecount,
            '7' => $Diezmocount,
            '8' => $Gulodcount,
            '9' => $Mamatidcount,
            '10' => $Marinigcount,
            '11' => $Niugancount,
            '12' => $Pittlandcount,
            '13' => $Pulocount,
            '14' => $Salacount,
            '15' => $SanIsidrocount,
            '16' => $PobUnocount,
            '17' => $PobDoscount,
            '18' => $PobTrescount,
        ];

        $Baclaran = round(($BaclaranNum / $BaclaranReg) * 100, 2);
        $Banay = round(($BanayNum / $BanayReg) * 100, 2);
        $Banlic = round(($BanlicNum / $BanlicReg) * 100, 2);
        $Bigaa = round(($BigaaNum / $BigaaReg) * 100, 2);
        $Butong = round(($ButongNum / $ButongReg) * 100, 2);
        $Casile = round(($CasileNum / $CasileReg) * 100, 2);
        $Diezmo = round(($DiezmoNum / $DiezmoReg) * 100, 2);
        $Gulod = round(($GulodNum / $GulodReg) * 100, 2);
        $Mamatid = round(($MamatidNum / $MamatidReg) * 100, 2);
        $Marinig = round(($MarinigNum / $MarinigReg) * 100, 2);
        $Niugan = round(($NiuganNum / $NiuganReg) * 100, 2);
        $Pittland = round(($PittlandNum / $PittlandReg) * 100, 2);
        $Pulo = round(($PuloNum / $PuloReg) * 100, 2);
        $Sala = round(($SalaNum / $SalaReg) * 100, 2);
        $SanIsidro = round(($SanIsidroNum / $SanIsidroReg) * 100, 2);
        $PobUno = round(($PobUnoNum / $PobUnoReg) * 100, 2);
        $PobDos = round(($PobDosNum / $PobDosReg) * 100, 2);
        $PobTres = round(($PobTresNum / $PobTresReg) * 100, 2);

        $BarangayData = [
            '1' => $Baclaran,
            '2' => $Banay,
            '3' => $Banlic,
            '4' => $Bigaa,
            '5' => $Butong,
            '6' => $Casile,
            '7' => $Diezmo,
            '8' => $Gulod,
            '9' => $Mamatid,
            '10' => $Marinig,
            '11' => $Niugan,
            '12' => $Pittland,
            '13' => $Pulo,
            '14' => $Sala,
            '15' => $SanIsidro,
            '16' => $PobUno,
            '17' => $PobDos,
            '18' => $PobTres,
        ];

        $data = [
            'CityCount' => $CityCount
            'Barangaycount' => $BarangayCount,
            'Barangay' => $Barangay,
            'BarangayData' => $BarangayData,
            'Baclaran' => $Baclaran,
            'Banay' => $Banay,
            'Banlic' => $Banlic,
            'Bigaa' => $Bigaa,
            'Butong' => $Butong,
            'Casile' => $Casile,
            'Diezmo' => $Diezmo,
            'Gulod' => $Gulod,
            'Mamatid' => $Mamatid,
            'Marinig' => $Marinig,
            'Niugan' => $Niugan,
            'Pittland' => $Pittland,
            'Pulo' => $Pulo,
            'Sala' => $Sala,
            'SanIsidro' => $SanIsidro,
            'PobUno' => $PobUno,
            'PobDos' => $PobDos,
            'PobTres' => $PobTres,

            'RegVotes' => $RegVotes,
            'NumVotes' => $NumVotes,
            'InvalidVotes' => $InvalidVotes,
        ];
        return view('Reports')->with($data);
          //return $data;
    }

    public function test(Request $request)
    {
        $Baclarancount = DB::table('voting_transactions')->where('brgy_id', 1)->where('updated_at', '<>', null)->count();
        return $Baclarancount;
    }
}
