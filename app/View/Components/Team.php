<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Team extends Component
{
    /**
     * @var string
     */
    public $title, $name, $image;

    /**
     * Create a new component instance.
     *
     * @param string $title
     */
    public function __construct(string $title, $name, $image)
    {
        $this->title = $title;
        $this->name = $name;
        $this->image = $image;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.team');
    }
}
