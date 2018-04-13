<?php

namespace Umpire;

class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $score;

    /**
     * Create a new Player.
     *
     * @param $name
     * @param $points
     */
    public function __construct($name, $points)
    {
        $this->points = $points;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return player
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
}
