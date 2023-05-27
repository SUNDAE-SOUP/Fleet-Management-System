<?php

namespace App\View\Components\User\Section;

use Illuminate\View\Component;

class UserCarRepairHistory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.section.user-car-repair-history');
    }
}
