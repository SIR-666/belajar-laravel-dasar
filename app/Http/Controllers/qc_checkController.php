<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\qc_checksheet;
use Carbon\Carbon;
use App\Models\qc_cheksheet;
use App\Models\rphs;
// use App\Models\rphs;
use Illuminate\Support\Facades\Session;

class qc_checkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'Hi';
        $data = qc_cheksheet::paginate();
       // return view('manpower.index')->with('data', $data);
       return view('qc_checksheet.index_qc')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /*
        $options = [
            'Value 1' => 'Option 1',
            'Value 2' => 'Option 2',
            'Value 3' => 'Option 3',
        ];
        $options2 = [
            'Value 1' => 'Option 3',
            'Value 2' => 'Option 4',
            'Value 3' => 'Option 5',
        ];
        */
        $today = Carbon::today()->format('Y-m-d');
        // $options = qc_cheksheet::table('rphs')->pluck('partname', 'id')->toArray();
        $options=rphs::whereRaw("CONVERT(varchar, tgl_pouring, 23) = ?", [$today])
            ->pluck('partname', 'id')
            ->toArray();

        return view('qc_checksheet.create',compact('options'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
