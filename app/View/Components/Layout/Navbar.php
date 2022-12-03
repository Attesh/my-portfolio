<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public array $navigationItems=[];
    public function __construct()
    {
        //
        $this->navigationItems=[
            ['label'=>'About','href'=>'#about'],
            ['label'=>'Project','href'=>'#portfolio'],
            ['label'=>'Coding Tutorials','href'=>'#tutorials'],
            ['label'=>'Contact','href'=>'#contact'],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar');
    }
}
