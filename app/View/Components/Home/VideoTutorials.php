<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->videoTutorials= [
            [
        'videoId' => '1SnPKhCdlsU',
        'title'=>'PHP Tutorial for Absolute Beginners -PHP Course 2022',
        'description'=>'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP.'
        ],
        [
            'videoId' =>'a_qREkJ78f4',
            'title'=>'PHP Tutorial for Absolute Beginners -PHP Course 2022',
            'description'=>'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP.'
            ],
            [
                'videoId' =>'JNhmEoBsZ48',
                'title'=>'PHP Tutorial for Absolute Beginners -PHP Course 2022',
                'description'=>'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP.'
                ],
            ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
