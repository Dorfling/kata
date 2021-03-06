<?php

use Umpire\Game;
use Umpire\player;

class unitTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var Player
     */
    private $player1;

    /**
     * @var Player
     */
    private $player2;

    /**
     * @var Game
     */
    private $game;

    public function startGame()
    {
        $this->player1 = new Player('Mr Visage',0);
        $this->player2 = new Player('Mrs Visage', 0);

        $this->game = new Game($this->player1, $this->player2);
    }

    public function testTieScoreAtZero()
    {
        $this->assertEquals('Love-All', $this->game->getScore());
    }

    public function testScoreOneZeroGameReturnsFifteenLove()
    {
        $this->player1->setScore(1);

        $this->assertEquals('Fifteen-Love', $this->game->getScore());
    }
}