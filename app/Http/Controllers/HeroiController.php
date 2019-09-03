<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroi;

class HeroiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroi = Heroi::inRandomOrder()->get();
        return view('home', compact('heroi'));

        ganhador();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('arquivo')->store('imagens', 'public');
        $heroi = new Heroi();
        $heroi->nomeheroi = $request->input('nomeheroi');
        $heroi->textoheroi = $request->input('textoheroi');
        $heroi->emailheroi = $request->input('emailheroi');
        $heroi->arquivo = $path;
        $heroi->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jogo = Heroi::find($id);
        if(isset($id)){
            
        }
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $heroi = Heroi::find($id);
        if(isset($id)){
            $heroi->delete();
            return redirect('/home');
        }
            
    }

    public function ganhador()
    {
        $ganhador = Heroi::all()->random(1);
        return view('ganhador', compact('ganhador'));
    }

}
