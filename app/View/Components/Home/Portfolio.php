<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;
class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this ->items=[
            [
                'category'=>['Laravel','Tailwind.css','Vue3'],
                'title'=>'Full Stack app with Laravel,Tailwindcss and Vue3',
                'image'=> url( path:'/img/survey.png'),
                'github'=>'https://github.com/'
            ],
            [
                'category'=>['Python','Bootsrap'],
                'title'=>'E-commerce website with Laravel',
                'image'=> url( path:'/img/pyth.png'),
                'github'=>'https://github.com/'
            ],
            [
                'category'=>['Laravel','PHP'],
                'title'=>'PHP MVC Framework',
                'image'=> url( path:'/img/Frame.jpg'),
                'github'=>'https://github.com/'
            ],
            [
                'category'=>['PHP'],
                'title'=>'E-commerce website with Laravel',
                'image'=> url( path:'/img/lar.png'),
                'github'=>'https://github.com/'
            ],
            [
                'category'=>['PHP','C++'],
                'title'=>'E-commerce website with PHP and Python',
                'image'=> url( path:'/img/Comm.jpg'),
                'github'=>'https://github.com/'
            ],
            
        ];
        $this ->tabs = array_unique(Arr::flatten(Arr::pluck( $this->items,value:'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
