<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Home')]
class Home extends Component
{
    public function render()
    {
        $product = ModelsProduct::orderBy('id','asc')->get();
        return view('livewire.home',[
            'product' => $product
        ]);
    }
}
