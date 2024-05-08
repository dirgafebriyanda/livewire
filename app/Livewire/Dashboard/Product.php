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
    public $status;
    public $description;
    public $search;
    public $product_id;
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
                ->orderBy('id', 'desc')
                ->paginate(5);
        } else {
            $product = ModelsProduct::orderBy('id', 'desc')->paginate(5);
        }

      
        return view('livewire.dashboard.product', [
            'product' => $product,
        ]);
    }

    public function store()
    {
        $rules = [
            'name' => 'required|string',
            'type' => 'required|unique:products|string',
            'price' => 'required|numeric',
            'description' => 'string',
        ];

        $validatedData = $this->validate($rules);

        $data = ModelsProduct::create($validatedData);

        if ($data) {
            // Set modalVisible menjadi true untuk menampilkan modal setelah berhasil menambahkan data
            session()->flash('message', 'Data added successfully');
            $this->clear();
        } else {
            // Jika gagal menambahkan data, tetapkan pesan kesalahan
            session()->flash('message', 'Data added failed!');
        }
    }

    public function delete()
    {
        if ($this->product_id) {
            $product = ModelsProduct::find($this->product_id);
            if ($product) {
                $productName = $product->name;
                $product->delete();
                session()->flash('message', 'Data ' . $productName . ' deleted successfully');
                $this->clear();
            }
        }
    }

    public function delete_confirmation($id)
    {
        if ($id != '') {
            $this->product_id = $id;
        }
        $this->product_id = $id;
    }

}
