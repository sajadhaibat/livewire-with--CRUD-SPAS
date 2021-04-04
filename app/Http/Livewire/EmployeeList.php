<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeeList extends Component
{
    public function render()
    {
        $employees = \App\Models\Employee::select('id', 'employee_name', 'father_name', 'amount')->latest()->get();
        return view('livewire.employee-list', compact('employees'));
    }
}
