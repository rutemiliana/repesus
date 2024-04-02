<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Research;
use App\Models\User;



use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $researches = Research::with('user', 'status')->where('user_id', $user->id)->paginate(10);
        return view('researches.index', compact('researches'));
    }

    public function create()
    {
        return view('researches.create');
    }

    public function store(Request $request)
    {
       // dd(Auth::id());

        $request->validate([
            'field' => 'required|string',
            'title' => 'required|string',
            'authors' => 'required|string',
            'introduction' => 'required|string',
            'justification' => 'required|string',
            'objective' => 'required|string',
            'method' => 'required|string',
            'schedule' => 'required|string',
            'budget' => 'required|string',
        ]);

        $user = Research::create([
            'field' => $request->field,
            'title' => $request->title,
            'authors' => $request->authors,
            'introduction' => $request->introduction,
            'justification' => $request->justification,
            'objective' => $request->objective,
            'method' => $request->method,
            'schedule' => $request->schedule,
            'budget' => $request->budget,
            'active' => 1,
            'user_id' => Auth::id(),
            'status_id' => 1,
        ]);



        return redirect()->route('dashboard')
           ->with('success', 'Pesquisa criada com sucesso.');
    }

    public function show(Research $research)
    {
        return view('researches.show', compact('research'));
    }

    public function edit(Research $research)
    {
        return view('researches.edit', compact('research'));
    }

    public function update(Request $request, Research $research)
    {
        $request->validate([
            'field' => 'required|string',
            'title' => 'required|string',
            'authors' => 'required|string',
            'introduction' => 'required|string',
            'justification' => 'required|string',
            'objective' => 'required|string',
            'method' => 'required|string',
            'schedule' => 'required|string',
            'budget' => 'required|string',
            'active' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'status_id' => 'required|exists:statuses,id',
        ]);

        $research->update($request->all());

        return redirect()->route('researches.index')
            ->with('success', 'Research updated successfully');
    }

    public function destroy(Research $research)
    {
        $research->delete();

        return redirect()->route('researches.index')
            ->with('success', 'Research deleted successfully');
    }
}
