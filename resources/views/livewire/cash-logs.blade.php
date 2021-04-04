
@section('title')
    Cash Logs
@stop
@section('styles')
@stop

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">All Payments (Cash Logs)</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New Payment</button>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6 float-right">
                    <input type="text" class="form-control mb-2" placeholder="Search...." wire:model="keyword">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th class="disable_sort">#</th>
                            <th class="disable_sort">Date</th>
                            <th class="disable_sort">Received From</th>
                            <th>Balance</th>
                            <th class="disable_sort">Approved By</th>
                            <th class="disable_sort">Type</th>
                            <th class="disable_sort">Purpose</th>
                            <th class="text-right">Action</th>
                            {{--                                <th>Actions</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cashlogs as $cash)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $cash->date }}</td>
                                <td>{{ ucfirst($cash->payer->employee_name) }}</td>
                                <td>{{ $cash->amount }}</td>
                                <td>{{ ucfirst($cash->approver->employee_name) }}</td>
                                <td>
                                    @if ($cash->cash_type == 1)
                                        <span class="badge badge-success">Cash In</span>
                                    @else
                                        <span class="badge badge-danger">Cash Out</span>
                                    @endif
                                </td>
                                <td style="width: 25%">{{ $cash->purpose }}</td>

                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"  wire:click="selectItem({{$cash->id}}, 'view')"><i class="fa fa-eye m-r-5"></i> View</a>
                                            <a class="dropdown-item"  wire:click="selectItem({{$cash->id}}, 'update')"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item"  wire:click="selectItem({{$cash->id}}, 'delete')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>

{{--                                <td>--}}
{{--                                    <div class="btn-group">--}}

{{--                                        <button class="btn btn-sm btn-info mr-1" wire:click="selectItem({{$cash->id}}, 'view')"> <i class="fa fa-eye"></i></button>--}}
{{--                                        <button class="btn btn-sm btn-success mr-1" wire:click="selectItem({{$cash->id}}, 'update')"> <i class="fa fa-pencil"></i></button>--}}

{{--                                        <button class="btn btn-sm btn-danger" wire:click="selectItem({{$cash->id}}, 'delete')"> <i class="fa fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                                {{--                                    <td></td>--}}
                            </tr>

                        @endforeach

                        </tbody>
                        {{--                            <tfoot>--}}
                        {{--                            <tr>--}}
                        {{--                                <th  style="text-align:right">Available:</th>--}}
                        {{--                                <th>{{$cashIn - $cashOut}}</th>--}}
                        {{--                                <th  style="text-align:right">Cash In:</th>--}}
                        {{--                                <th>{{$cashIn}}</th>--}}
                        {{--                                <th  style="text-align:right">Cash Out:</th>--}}
                        {{--                                <th>{{$cashOut}}</th>--}}
                        {{--                                <th  style="text-align:right">Total:</th>--}}
                        {{--                                <th>{{$total}}</th>--}}
                        {{--                                <th colspan="7" style="text-align:right">Cash Out:</th>--}}
                        {{--                                <th>$12300</th>--}}
                        {{--                            </tr>--}}
                        {{--                            </tfoot>--}}

                    </table>
                    <br>
                    {{$cashlogs->links()}}
{{--                    {{$cashlogs->links('layouts.pagination')}}--}}
            </div>
        </div>
<div>
{{--    <p>okkk </p>--}}
{{--                                <livewire:view-cash-log, ['cashLogId' => 'okk']/>--}}

{{--    <livewire:view-cash-log ['cashLogId' => "it is"]>--}}

</div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
{{--                            <livewire:cash-log-form />--}}
                            @livewire('cash-log-form', key(time()))

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="ViewCashLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Cash Log</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if ($viewCashLog)
                                @livewire('view-cash-log', ['cashLogId' => $viewCashLogData], key($viewCashLogData))
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confimation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Are you sure you want to Delete?</h3>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" wire:click="delete">Yes</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>
</div>
<script>
    window.addEventListener('closeCashLogModal', event =>{
        $('#exampleModal').modal('hide');
    })
</script>
<script>
    window.addEventListener('openCashLogModal', event =>{
        $('#exampleModal').modal('show');
    })
</script>
<script>
    window.addEventListener('openDeleteModal', event =>{
        $('#DeleteModal').modal('show');
    });
    window.addEventListener('closeDeleteModal', event =>{
        $('#DeleteModal').modal('hide');
    });
    window.addEventListener('openViewCashLogModal', event =>{
        $('#ViewCashLog').modal('show');
    })
</script>
