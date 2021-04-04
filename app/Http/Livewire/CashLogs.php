<?php

namespace App\Http\Livewire;

use App\Models\CashLog;
use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;


class CashLogs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $listeners = ['refreshCashLogs' => '$refresh'];
    public $keyword;
    public $selectedItem;
    public $action;
    public $viewCashLog = false;
    public $viewCashLogData = null;

    public function render()
    {
        $keyword = $this->keyword;
        if (!empty($keyword)){
            $cashlogs = CashLog::where('amount', 'LIKE', "%$keyword%")
                ->orwhere('purpose', 'LIKE', "%$keyword%")
                ->orwhere('date', 'LIKE', "%$keyword%")
                ->with('payer', 'approver')->latest()->paginate(10);
        }
        else {
            $cashlogs = CashLog::with('payer', 'approver')->latest()->paginate(10);
        }
        return view('livewire.cash-logs', compact('cashlogs'));
    }

    public function delete()
    {
        if ($this->selectedItem != null){
            CashLog::destroy($this->selectedItem);
            $this->dispatchBrowserEvent('closeDeleteModal');
        }
    }

    public function selectItem($item, $action)
    {
        $this->selectedItem = $item;
        $this->action = $action;
        if ($action == "delete"){
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        elseif ( $action == "update"){
            $this->emit('fillModel', $this->selectedItem);
            $this->dispatchBrowserEvent('openCashLogModal');
        }
        elseif ( $action == "view"){
            $this->viewCashLog = true;
            $this->viewCashLogData = $this->selectedItem;
            $this->emit('viewNewCashLog');

        }
    }
}
