
@section('title')
   Employees List
@stop
@section('styles')
{{--    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">--}}
@stop

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Employees List</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0 datatable">
                        <thead>
                        <tr>
                            <th class="disable_sort">#</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employee->employee_name }}</td>
                                <td>{{ $employee->father_name }}</td>
                                <td>{{ $employee->amount }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
