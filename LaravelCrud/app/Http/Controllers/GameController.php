<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $game = new Game;
        
        $game->titre = request('title');
        $game->editeur = request('publisher');
        $game->publication = request('releasedate');
        $game->save();
        $games = Game::all();
        return view('games.index', ['games' => $games]);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
         return view('games.show', ['game' => $id]);   
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

        $game=Game::find($id);
    
        return view('games.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {   

        $titre = request('title');
        $editeur = request('publisher');
        $publication = request('releasedate');
        Game::find($id)->update(['titre' => $titre, 'editeur' => $editeur, 'publication' => $publication]);
        return redirect('index');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($game)
    {
        // dd($game);
        Game::find($game)->delete();
        return redirect('index');

        
    }
}
