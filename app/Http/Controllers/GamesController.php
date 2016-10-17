<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Http\Requests;

class GamesController extends Controller
{
    public function index()
    {
        //$games = Game::all(); voor alle items
        $games = Game::paginate(5);

        //return $games;
        return view('games.index', ['games' => $games]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {

        $game = new Game();
        $game->title = $request->title;
        $game->publisher = $request->publisher;
        $game->complete = $request->complete ? true : false;

        $game->save();

        Session::flash('success', 'The game was succesfully save!');

        return redirect(route('home'));
    }

    public function edit($id)
    {

        $game = Game::find($id);
        //return view ('games.edit')->with('game', $game);
        return view('games.edit')->withGame($game);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     *
     * withGame($game); = with('game', $game);
     */
    public function show($id)
    {
        $game = Game::find($id);

        return view('games.show')->withGame($game);
    }

    public function update($id, Request $request)
    {

        $game = Game::find($id);
        $game->title = $request->title;
        $game->publisher = $request->publisher;
        $game->complete = $request->complete ? true : false;

        $game->save();

        Session::flash('success', 'The game was succesfully updated!');

        return redirect(route('home'));

    }

    public function destroy($id)
    {

        $game = Game::find($id);
        $game->delete();
        Session::flash('success', 'The game was successfully deleted!!');

        return redirect(route('home'));

    }
}
