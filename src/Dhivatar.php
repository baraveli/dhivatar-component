<?php

namespace Jinas\DhivatarComponent;

use Illuminate\View\Component;
use Jinas\Dhivatar\DhivatarFactory;

class Dhivatar extends Component
{
    public $text;
    public $background;
    public $color;

    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $text, string $background = null, string $color = null)
    {
        $this->text = $text;
        $this->background = $background;
        $this->color = $color;

        $this->buildImage();
    }

    protected function buildImage()
    {
        $image = DhivatarFactory::create()
            ->setText($this->text, $this->color ?? "#fff");
        if (!is_null($this->background)) {
            $image->setBackground($this->background);
        }
        $this->image = (string) $image->build()
            ->encode('data-url');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dhivatar');
    }
}
