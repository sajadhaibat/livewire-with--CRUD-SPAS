<?php

namespace App\Http\Livewire;

use App\Models\CashLog;
use App\Models\Employee;
use Livewire\Component;

class CashLogForm extends Component
{
    public $listeners = ['fillModel'];
    public $cashId;
    public $form = [
        'date' => '',
        'receiver_id' => '',
        'approve_id',
        'total',
        'paymentType',
        'purpose' => ''
    ];

    public function render()
    {
        $employees = Employee::pluck('employee_name', 'id');
        return view('livewire.cash-log-form', compact('employees'));
    }

    public function save()
    {
        $this->validate([
            'form.date' => 'required',
            'form.receiver_id' => 'required',
            'form.approve_id' => 'required',
            'form.total' => 'required',
            'form.paymentType' => 'required',
        ]);
        if ($this->cashId != null && $this->cashId){
            $cashlog = CashLog::find($this->cashId);
        }
        else {
            $cashlog = new CashLog();
        }
        $cashlog->date = $this->form['date'];
        $cashlog->receiver_id = $this->form['receiver_id'];
        $cashlog->approve_id = $this->form['approve_id'];
        $cashlog->purpose = $this->form['purpose'];
        $cashlog->amount = $this->form['total'];
        $cashlog->cash_type = $this->form['paymentType'];
        $cashlog->save();
        $this->dispatchBrowserEvent('closeCashLogModal');
        $this->emit('refreshCashLogs');
    }

    public function fillModel($id)
    {
        $this->cashId = $id;
        $cashLog = CashLog::find($this->cashId);
        $this->form['date'] = $cashLog->date;
        $this->form['receiver_id'] = $cashLog->receiver_id;
        $this->form['approve_id'] = $cashLog->approve_id;
        $this->form['purpose'] = $cashLog->purpose;
        $this->form['total'] = $cashLog->amount;
        $this->form['paymentType'] = $cashLog->cash_type;
    }

}
