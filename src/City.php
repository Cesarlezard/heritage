<?php

namespace App;

use Exception;

class City
{
    public function __construct(
        public string $name,
        private array $plots
    )
    {
        $this->setPlots($this->plots);
    }

    public function countPopulation(): int
    {
        $plotsPopulation = array_map(
            fn (Factory|House $plot) => $plot->countMembers(),
            $this->plots
        );

        return array_sum($plotsPopulation);
    }

    private function setPlots(array $plots)
    {
        foreach ($plots as $plot) {
            if (! in_array($plot::class, [Factory::class, House::class])) {
                throw new Exception("Unexpected plot type.");
            }
        }

        $this->plots = $plots;
    }
}
