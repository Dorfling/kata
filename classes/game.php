
<?php

use player;


class Game
{
    /**
     * Player one for the game.
     *
     * @var Player
     */
    private $player1;
    /**
     * Player two for the game.
     *
     * @var Player
     */
    private $player2;
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

    
}