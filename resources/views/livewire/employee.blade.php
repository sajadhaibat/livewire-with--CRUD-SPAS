<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Employee</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save" >
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" wire:model.lazy="form.name">
                                @error('form.name') <span class="text-danger text-sm">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Father Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="father_name" wire:model.lazy="form.father_name">
                                @error('form.father_name') <span class="text-danger text-sm">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Amount</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="amount" wire:model.lazy="form.amount">
                                @error('form.amount') <span class="text-danger text-sm">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <button class="btn btn-danger">Save</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
