<?php

namespace App\Livewire\Dashboard;

use App\Models\Product as ModelsProduct;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Dashboard | Product')]
#[Layout('dashboard.layouts.app')]
class Product extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $image; 
    public $name; 
    public $type; 
    public $price; 
    public $description;
    public $search;
    public $modalVisible = false;

    public function clear()
    {
        $this->name = '';
        $this->type = '';
        $this->price = '';
        $this->description = '';
    }

    public function render()
    {
        if ($this->search != null) {
            $product = ModelsProduct::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('id', 'asc')->paginate(5);
        } else {
            $product = ModelsProduct::orderBy('id', 'asc')->paginate(5);
        }
        return view('livewire.dashboard.product', [
            'product' => $product
        ]);
    }

   public function store()
{
    $rules = [
        'name' => 'required',
        'type' => 'required',
        'price' => 'required',
    ];

    $validatedData = $this->validate($rules);

    $data = ModelsProduct::create($validatedData);

    if ($data) {
        // Set modalVisible menjadi true untuk menampilkan modal setelah berhasil menambahkan data
        session()->flash('message', 'Data berhasil ditambahkan');
        $this->clear();
    } else {
        // Jika gagal menambahkan data, tetapkan pesan kesalahan
        session()->flash('message', 'Data gagal ditambahkan');
    }
}

}
