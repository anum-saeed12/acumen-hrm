@extends('layouts.main')
@section('breadcrumbs')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Employee Grade</h4>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table id="data" class="table text-nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Grade</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($grade as $item)
                                <tr>
                                    <td>{{ $item->grade }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-right">
                                        <a class="text-primary mr-4" href="#" ><i class="fas fa-edit" aria-hidden="false"></i></a>
                                        <a class="text-danger" href="#" ><i class="fas fa-trash-alt" aria-hidden="false"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('extras')
    <script>
        $(document).ready(function () {
            var table = $('#data').DataTable({
                responsive: true
            });
            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
@stop
