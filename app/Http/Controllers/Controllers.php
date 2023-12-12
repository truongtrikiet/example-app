<?php

use App\Game;

Route:: get('games', function() {
    $games = Game::all();
    return view('game.index', ['games' => $games]);
});

Route:: get('games/{id}', function($id) {
    $games = Game::find($id);
    return view('game.show', ['game' => $games]);
});
