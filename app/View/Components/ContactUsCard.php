<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactUsCard extends Component
{
    /**
     * @var string
     */
    public ?string $siteName = '';

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
        return view('components.contact-us-card');
    }
}
