<?php
namespace UiBuilder\Card\View;

use Illuminate\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public string $size;

    public string $title;

    public function __construct(string $size,string $title)
    {
        $this->size = $size;
        $this->title = $title;
    }

    public function render()
    {
        return view('card::basic');
    }
}