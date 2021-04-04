<div>
    <form action="#" method="POST" name="add_employee" enctype="multipart/form-data" wire:submit.prevent="save">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Date <span class="text-danger">*</span></label>
                    <input type="date" name="date" class="form-control" required="true" wire:model.defer="form.date">
                    @error('form.date') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Received From <span class="text-danger">*</span></label>
                    <select class="form-control" name="receiver_id" required="true" wire:model.defer="form.receiver_id">
                        <option value="">Select Employee</option>
                        @foreach($employees as $key => $employee)
                            <option value="{{$key}}" >{{$employee}}</option>
                        @endforeach
                    </select>
                    @error('form.receiver_id') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Total Amount</label>
                    <input type="number" name="amount" class="form-control" wire:model.defer="form.total">
                    @error('form.total') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Approved By <span class="text-danger">*</span></label>
                    <select class="form-control" name="approve_id" required="true" wire:model.defer="form.approve_id">
                        <option value="">Select Employee</option>
                        @foreach($employees as $key => $employee)
                            <option value="{{$key}}" >{{$employee}}</option>
                        @endforeach
                    </select>
                    @error('form.approve_id') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Payment Type <span class="text-danger">*</span></label>
                    <select class="form-control" name="type" required="true" wire:model.defer="form.paymentType">
                        <option value="">Select Type</option>
                        <option value="1">Cash In</option>
                        <option value="2">Cash Out</option>
                    </select>
                    @error('form.paymentType') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Purpose <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="comment" rows="3" name="purpose" wire:model.defer="form.purpose"></textarea>
                    @error('form.purpose') <span class="text-danger text-sm">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
</div>

