<?php

class Player
{
    private string $name;
    private int $distance = 0;
    private int $speed = 0;
    private array $track = [];

    public function __construct(string $name, int $length)
    {
        $this->name = $name;
        $this->track[] = $this->name;

        while (count($this->track) < $length / 100) {
            $this->track[] = '_';
        }
    }

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function run()
    {
        $this->distance += $this->speed;
        $this->track[array_search($this->name, $this->track)] = '_';
        $this->track[round($this->distance / 100)] = $this->name;
    }

    public function getTrack()
    {
        return $this->track;
    }

    public function printTrack()
    {
        foreach ($this->track as $trackElement) {
            echo "{$trackElement}";
        }
        echo "\n";
    }

}

class RaceTrack
{
    private array $players;
    private int $length;

    public function __construct(int $length = 1000)
    {
        $this->length = $length;
        $this->players = [
            new Player('X', $length),
            new Player('O', $length),
            new Player('P', $length)
        ];
    }

    public function drawTrack() {
        foreach ($this->players as $player) {
            $player->printTrack();
        }
        echo "\n";
    }

    public function getPlayers()
    {
        return $this->players;
    }

    public function getWinner()
    {
        foreach ($this->players as $player) {
            if ($player->getTrack()[count($player->getTrack()) - 1] == $player->getName()) {
                return $player;
            }
        }
        return null;
    }

    public function hasWinner()
    {
        return $this->getWinner() != null;
    }
}

$test = new RaceTrack(1500);
$test->drawTrack();
while (!$test->hasWinner()) {
    foreach ($test->getPlayers() as $player) {
        $player->setSpeed(random_int(40, 200));
        $player->run();
    }
    $test->getWinner();
    $test->drawTrack();
    sleep(1);
}

echo "\nWinner is: ".$test->getWinner()->getName();





