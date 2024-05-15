<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer as ModelsCustomer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('dashboard.layouts.app')]
#[Title('Dashboard | Customer')]
class Customer extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $name;
    public $phone_number;
    public $address;
    public $customer_id;
    public function render()
    {
        if ($this->search != null) {
            $customer = ModelsCustomer::where('name','like', '%' . $this->search . '%'  )->orderBy('id','desc')->paginate(5);
        }else{
            $customer = ModelsCustomer::orderBy('id','desc')->paginate(5);
        }
        return view('livewire.dashboard.customer', [
            'customer' => $customer
        ]);
    }

     public function store()
    {
        $rules = [
            'name' => 'required|string',
            'phone_number' => 'required|numeric',
            'address' => 'required|string',
        ];

        $validate = $this->validate($rules);
        $data = ModelsCustomer::create($validate);

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
        if ($this->customer_id) {
            $customer = ModelsCustomer::find($this->customer_id);
            if ($customer) {
                $customerName = $customer->name;
                $customer->delete();
                session()->flash('message', 'Data ' . $customerName . ' deleted successfully');
                $this->clear();
            }
        }
    }

    public function delete_confirmation($id)
    {
        if ($id != '') {
            $this->customer_id = $id;
        }
        $this->customer_id = $id;
    }

    public function clear()
    {
        $this->name = '';
        $this->phone_number = '';
        $this->address = '';
    }
}
