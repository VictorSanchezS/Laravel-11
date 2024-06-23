<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'text-blue-800 bg-blue-50 blue:bg-gray-800 blue:text-blue-400';
                break;
            case 'danger':
                $class = 'text-red-800 bg-red-50 red:bg-red-800 red:text-red-400';
                break;
            case 'success':
                $class = 'text-green-800 bg-green-50 green:bg-green-800 green:text-green-400';
                break;
            case 'warning':
                $class = 'text-yellow-800 bg-yellow-50 yellow:bg-yellow-800 yellow:text-yellow-400';
                break;
            case 'dark':
                $class = 'text-gray-800 bg-gray-50 gray:bg-gray-800 gray:text-gray-400';
                break;
    
            default:
                $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                break;
        }

        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
