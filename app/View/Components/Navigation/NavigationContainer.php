<?php

namespace App\View\Components\Navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationContainer extends Component
{
    /**
     * @var string
     */
    public string $siteName = 'Laravel';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->siteName = config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation.navigation-container');
    }
}
