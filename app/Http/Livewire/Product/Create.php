<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Create extends Component
{

    public $title;
    public $description;
    public $price;
    public $image;
    
    public function render()
    {
        return view('livewire.product.create');
    }
}
