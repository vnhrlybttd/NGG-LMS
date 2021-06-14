<?php

namespace App\Widgets;

use App\Hotel;
use Arrilot\Widgets\AbstractWidget;
Use Alert;

class HotelBranches extends AbstractWidget
{

    public $reloadTimeout = 5; 
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'count' => 5
    ];

    public function placeholder()
{
    
    return 'Loading...';
}

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $hotel = Hotel::latest()->get();
        //dd($hotel);
       
        return view('widgets.hotel_branches', [
            'config' => $this->config,
            'hotel' => $hotel
        ]);
    }
}
