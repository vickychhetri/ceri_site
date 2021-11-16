<?php

namespace App\View\Components;

use Illuminate\View\Component;

class latestnewsnotice extends Component
{
    public $datacollection=array();
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataf)
    {
        $this->datacollection=$dataf;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latestnewsnotice')->with('datacollection', $this->datacollection);
    }
}
