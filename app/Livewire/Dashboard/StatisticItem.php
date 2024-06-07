<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class StatisticItem extends Component
{
    public $title;
    public $icon;
    public $count;
    public $percentage;


    public function render()
    {
        return view('livewire.dashboard.statistic-item');
    }
}
