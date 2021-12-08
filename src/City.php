<?php

namespace App;

use Exception;

class City
{
    public string $name;
    private array $plots;

    public function __construct(
        string $name,
        array $plots
    )
    {
        $this->plots = $plots;
        $this->name = $name;
        $this->setPlots($this->plots);
    }

    public function countPopulation(): int
    {
        $plotsPopulation = array_map(
            fn ($plot) => $plot->countMembers(),
            $this->plots
        );

        return array_sum($plotsPopulation);
    }

    private function setPlots(array $plots)
    {
        foreach ($plots as $plot) {
            if (! $plot instanceof Building) {
                throw new Exception("Unexpected plot type.");
            }
        }

        $this->plots = $plots;
    }
}
