<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Product')]
class Product extends Component
{
    public function render()
    {
        $product = ModelsProduct::orderBy('id','asc')->paginate(10);
        return view('livewire.product',[
            'product' => $product
        ]);
    }
}
