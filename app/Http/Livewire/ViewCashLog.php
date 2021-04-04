<?php

namespace App\Http\Livewire;

use App\Models\CashLog;
use Livewire\Component;

class ViewCashLog extends Component
{
    public $cashLogId;
    public $cashLog;
    public $listeners = ['viewNewCashLog'];

    public function render()
    {
        return view('livewire.view-cash-log');
    }

    public function mount($cashLogId){
        if ($cashLogId != null){
            $this->cashLogId = $cashLogId;
            $this->cashLog = CashLog::find($cashLogId);
        }

    }

    public function viewNewCashLog(){
        $this->dispatchBrowserEvent('openViewCashLogModal');
    }
}
