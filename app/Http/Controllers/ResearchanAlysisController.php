<?php

namespace App\Http\Controllers;
use App\Models\Research;
use App\Models\Status;
use Illuminate\Http\Request;

class ResearchanAlysisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researches = Research::with('user', 'status')->where('active', 1)->paginate(10);
        return view('researches.analysis.index', compact('researches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Research $research)
    {
        //dd($research->id);
        //dd($request->route()->parameters());

        $status = Status::all();
        return view('researches.analysis.edit', [
            'status' => $status,
            'research' => $research
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Research $research)
    {
        $request->validate([
            'status' => 'required',

        ]);

        $research->update([
            'status_id' => $request->status,
            'feedback' => $request->feedback,
        ]);


        return redirect()->route('researches.analysis.index')
            ->with('success', 'Pesquisa analisada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
