<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
#[Title('Employee')]
class Employee extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama;
    public $email;
    public $alamat;
    public $employee_id;
    public $katakunci;
    public $employee_selected_id = [];
    public $updateData = false;

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ];
        $pesan = [
            'nama.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Format Email Salah',
            'alamat.required' => 'Alamt Wajib Diisi',
        ];
        $validate = $this->validate($rules, $pesan);
        ModelsEmployee::create($validate);
        session()->flash('message', 'Data berhasil dimasukan');
        $this->clear();
    }

    public function edit($id)
    {
        $data = ModelsEmployee::find($id);
        $this->nama = $data->nama;
        $this->email = $data->email;
        $this->alamat = $data->alamat;

        $this->updateData = true;
        $this->employee_id = $id;
    }

    public function update()
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ];
        $pesan = [
            'nama.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Format Email Salah',
            'alamat.required' => 'Alamt Wajib Diisi',
        ];
        $validate = $this->validate($rules, $pesan);
        $data = ModelsEmployee::find($this->employee_id);
        $data->update($validate);
        session()->flash('message', 'Data berhasil diupdate');
        $this->clear();
    }

    public function clear()
    {
        $this->nama = '';
        $this->email = '';
        $this->alamat = '';
        $this->updateData = false;
        $this->employee_id = '';
        $this->employee_selected_id = [];
    }

    public function delete()
    {
        if ($this->employee_id != '') {
            $id = $this->employee_id;
            ModelsEmployee::find($id)->delete();
        }
        if (count($this->employee_selected_id)) {
            for ($x = 0; $x < count($this->employee_selected_id); $x++) {
                ModelsEmployee::find($this->employee_selected_id[$x])->delete();
            }
        }
        session()->flash('message', 'Data berhasil didelete');
        $this->clear();
    }

    public function delete_confirmation($id)
    {
        if ($id != '') {
            $this->employee_id = $id;
        }
        $this->employee_id = $id;
    }
    public function render()
    {
        if ($this->katakunci != null) {
            $data = ModelsEmployee::where('nama', 'like', '%' . $this->katakunci . '%')
                ->orderBy('nama', 'asc')
                ->paginate(10);
        } else {
            $data = ModelsEmployee::orderBy('nama', 'asc')->paginate(10);
        }

        return view('livewire.employee', [
            'dataemployees' => $data
        ]);
    }
}
