<?php

use player;


class Game
{
    /**
     * Player one for the game.
     *
     * @var Player
     */
    private $player1 = 0;
    /**
     * Player two for the game.
     *
     * @var Player
     */
    private $player2 = 0;
    /**
     * Points to score lookup table.
     *
     * @var array
     */
    private $pointsLookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    private $score = null;


    /**
     * Create a new Tennis instance.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * @return \player
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param \player $player1
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    }

    /**
     * @return \player
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * @param \player $player2
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    }

    /**
     * @return array
     */
    public function getPointsLookup()
    {
        return $this->pointsLookup;
    }

    /**
     * @param array $pointsLookup
     */
    public function setPointsLookup($pointsLookup)
    {
        $this->pointsLookup = $pointsLookup;
    }

    /**
     * @return bool
     */
    public function isTied()
    {
        if ($this->getPlayer1()->getScore() === $this->getPlayer2()->getScore()) {
            return true;
        }
        return false;
    }

    /**
     *
     */
    public function isDeuce(){
        return ($this->getPlayer1()->getScore() === $this->getPlayer2()->getScore());
    }

    /**
     * @return bool
     */
    public function someoneCanWin() {
        if ($this->isDeuce()) {
            return false;
        }
        if ($this->getPlayerInLead) {

        }
    }

    public function hasChickenDinner(){
        if ($this->someoneCanWin()) {
            return true;
        }
        return false;
    }

    /**
     * Calculate the current tennis score.
     *
     * @return string
     */
    public function currentGameState()
    {
        if ($this->hasChickenDinner()) {
            return 'Win for ' . $this->leader()->name;
        }
        if ($this->inAdvantage()) {
            return 'Advantage ' . $this->leader()->name;
        }
        if ($this->inDeuce()) {
            return 'Deuce';
        }
        return $this->generalScore();
    }


    public function getScore()
    {
        $player1Score = $this->getPlayer1()->getScore();
        $player2Score = $this->getPlayer2()->getScore();

    }

}