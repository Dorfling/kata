
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
