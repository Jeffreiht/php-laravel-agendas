<?php

namespace App\Http\Controllers;

use App\Agenda;

use App\Http\Requests\AgendaRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $agendas = Agenda::orderBy('id', 'asc')->paginate(9);

        return view('index', [
            'agendas' => $agendas
        ]);
    }

    public function create(){
        return view('agenda');
    }


    public function store(AgendaRequest $request){
        Agenda::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'email' =>$request->email,
            'estado_civil' => $request->estado_civil,
            'birthay' => $request->birthay
        ]);

        return redirect('/')->with('status', 'Agenda creada correctamente');
    }

    public function update(AgendaRequest $request, Agenda $agenda){
        $agenda->update($request->all());

        return redirect('/')->with('status','Se edito correctamente');
    }

    
    public function edit(Agenda $agenda){
        return view('edit',[
            'agenda' => $agenda
        ]);
    }

    public function destroy(Agenda $agenda){

        $agenda->delete();

        return back()->with('status', 'Se elimino correctamente');
    }

    public function search(Request $request){
        dd($request->all());
        /*
        $search = $request->get('search');
        $agendas = Agendas::class('agendas')->where('name', 'like', '%' .$search. '%')->paginate(9);
        return view('index', compact('agendas'));*/
    }
}
