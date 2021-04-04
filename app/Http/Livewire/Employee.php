<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Employee extends Component
{
    public $form = [
        'name' => '',
        'father_name' => '',
        'amount' => null
    ];
    public function render()
    {
        return view('livewire.employee');
    }

    public function save(){

        $this->validate([
            'form.name' => 'required',
            'form.father_name' => 'required',
//            'form.amount' => 'number'
        ]);
        $employee = new \App\Models\Employee();
        $employee->employee_name = $this->form['name'];
        $employee->father_name = $this->form['father_name'];
        $employee->save();
        return redirect()->to('/employeeList');
    }
}
