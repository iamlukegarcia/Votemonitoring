<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precinct;
use DataTables;
class PrecinctController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Precinct::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('Precinct');
    }

}
