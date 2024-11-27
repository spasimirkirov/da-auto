<?php

namespace App\View\Components\Layouts;

use App\Services\CarService;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * @var string
     */
    public string $siteName = 'Laravel';

    /**
     * @var int
     */
    public int $carsCount = 0;

    /**
     * @var bool
     */
    public bool $isLogged = false;

    public function __construct()
    {
        $this->siteName = config('app.name');
        $this->carsCount = CarService::getCarsCount();
        $this->isLogged = Auth::check();
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.layouts.app-layout');
    }
}
