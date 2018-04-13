<?php

namespace Umpire;
use Umpire\Player;

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
     * @return Player
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param Player $player1
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    }

    /**
     * @return Player
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * @param Player $player2
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
     * @return bool
     */
    public function isDeuce(){
        return ($this->getPlayer1()->getScore() === $this->getPlayer2()->getScore());
    }

    /**
     * @return bool|Player
     */
    public function getPlayerInLead() {
        if ($this->isDeuce()) {
            return false;
        }
        return ($this->getPlayer1()->getScore() > $this->getPlayer2()->getScore() ? $this->getPlayer1() : $this->getPlayer2());
    }

    public function gameIsLeadByTwoOrMore(){
        return abs($this->player1->getScore() - $this->player2->getScore()) >= 2;
    }

    /**
     * @return bool
     */
    public function someoneCanWin() {
        if ($this->getPlayerInLead() && $this->gameIsLeadByTwoOrMore()) {
            return true;
        }
        return false;
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