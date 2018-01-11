<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerformanceTable as IPC;
use App\MajorOutput as MajorOutput;
use App\MajorSubOutput as SubOutput;
use App\OutputIndicators as OutputIndicators;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outputs = MajorOutput::all();
        return view('myperformance.indiperform', compact('outputs'));
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
            foreach ($indicators[$level] as $indicator) {
                
                $output = new OutputIndicators();

                $output->indicator = $indicator;
                $output->majorOutput()->associate($majorOutput);
                $output->save();

            }
        }

        /*foreach ($request['maintitle'] as $i => $maintitle) {

            $majorOutput = new MajorOutput();

            $majorOutput->title       = $maintitle;
            $majorOutput->owner_id    = $request['user_id'];
            $majorOutput->save();

            foreach ($request['subtitle'] as $i => $subtitle) {
                
                $subOutput = new SubOutput();

                /*$subOutput->level
                $subOutput->subtitle
                $subOutput->level

            }
        }*/
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
