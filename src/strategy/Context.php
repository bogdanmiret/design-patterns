<?php

namespace Baronet\Strategy;

class Context
{
    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "C":
                $this->strategy = new StrategyCaps();
                break;
            case "E":
                $this->strategy = new StrategyExclaim();
                break;
            case "S":
                $this->strategy = new StrategyStars();
                break;
        }
    }

    public function showBookTitle($book)
    {
        return $this->strategy->showTitle($book);
    }
}
