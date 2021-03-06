<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\PerformanceTable as IPC;
use App\OutputIndicators as OutputIndicators;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function _user() {

    }

    public function index()
    {
        $records = IPC::where('owner_id', Auth::user()->id )->get();
        return view('myperformance.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myperformance.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ipcr = new IPC();
        $ipcr->record_title = $request['record_name'];
        $ipcr->description  = $request['description'];
        $ipcr->owner_id     = $request['user_id'];
        $ipcr->save();

        foreach ($request->majorOutput as $i => $output) {

            $majorOutput = new OutputIndicators();

            $majorOutput->major_output      = $output;
            $majorOutput->indicator_measure = $request['indicatorMeasure'][$i];
            $majorOutput->targets           = $request['overallTgt'][$i];
            $majorOutput->jan_total         = $request['janTgt'][$i];
            $majorOutput->feb_total         = $request['febTgt'][$i];
            $majorOutput->mar_total         = $request['marTgt'][$i];
            $majorOutput->apr_total         = $request['aprTgt'][$i];
            $majorOutput->may_total         = $request['mayTgt'][$i];
            $majorOutput->jun_total         = $request['junTgt'][$i];

            $majorOutput->majorPerform()->associate($ipcr);
            $majorOutput->save();
        }

        return redirect()->route('performance.showRecord', ['id' => $majorOutput->id]);
    }

    // for form-sub2 function
    /*public function store(Request $request)
    {
        $ipcr = new IPC();
        $ipcr->owner_id = $request['user_id'];
        $ipcr->save();

        $mainLevel = $request->maintitle;
        foreach ($mainLevel['level'] as $i => $level) {

            $majorOutput = new MajorOutput();

            $majorOutput->level = $level;
            $majorOutput->title = $mainLevel['title'][$i];
            $majorOutput->majorPerform()->associate($ipcr);
            $majorOutput->save();
        }

        $sublevel = $request->subtitle;
        foreach ($sublevel['level'] as $i => $level) {

            $majorOutput = new MajorOutput();

            $majorOutput->level = $level;
            $majorOutput->title = $sublevel['title'][$i];
            $majorOutput->majorPerform()->associate($ipcr);
            $majorOutput->save();
        }

        $subSubLevel = $request->subsubtitle;
        foreach ($subSubLevel['level'] as $i => $level) {

            $majorOutput = new MajorOutput();

            $majorOutput->level = $level;
            $majorOutput->title = $subSubLevel['title'][$i];
            $majorOutput->majorPerform()->associate($ipcr);
            $majorOutput->save();

            $indicators = $request->indicator;
            foreach ($indicators[$level] as $i => $indicator) {
                
                $output = new OutputIndicators();

                $output->indicator  = $indicator;
                //$output->targets    = $request->input('indicator.'.$level.'.target.'.$i);
                //$output->targets    = $request->input('target.'.$level.'.'.$i);
                //$output->targets    = $request['target'][$i];

                $output->targets    = $request->target[$level][$i];
                $output->jan_total  = $request->jantarget[$level][$i];
                $output->feb_total  = $request->febtarget[$level][$i];
                $output->mar_total  = $request->martarget[$level][$i];
                $output->apr_total  = $request->aprtarget[$level][$i];
                $output->may_total  = $request->maytarget[$level][$i];
                $output->jun_total  = $request->juntarget[$level][$i];

                $output->majorOutput()->associate($majorOutput);
                $output->save();

            }
        }
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $record  = IPC::findOrFail($id);
        $outputs = OutputIndicators::where('mfo_id', $id)->get();

        if ( count($record) > 0 ) {
            return view('myperformance.record', compact( 'record', 'outputs'));    
        }

        return redirect()->route('performance.individual');
        
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
