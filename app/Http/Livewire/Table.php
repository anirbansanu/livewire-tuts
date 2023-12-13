<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Table extends Component
{
    public $_per_page = 10;
    public $_search;
    public $_rows;
    public $_cols;
    public function render()
    {
        return view('livewire.table');
    }
}
