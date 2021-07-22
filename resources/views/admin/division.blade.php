@extends('layouts.main')
@section('breadcrumbs')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-3">
               <form method="post" action="{{ route('division.store.admin') }}">
                   @csrf
                    <div class="input-group">
                        <input type="text" id="division" name="division" class="form-control" placeholder="New Division" aria-label="Division" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="." method="GET" id="perPage">
                                <label for="perPageCount">Show</label>
                                <select id="perPageCount" name="count" onchange="$('#perPage').submit();" class="input-select mx-2">
                                    <option value="15"{{ request('count')=='15'?' selected':'' }}>15 rows</option>
                                    <option value="25"{{ request('count')=='25'?' selected':'' }}>25 rows</option>
                                    <option value="50"{{ request('count')=='50'?' selected':'' }}>50 rows</option>
                                    <option value="100"{{ request('count')=='100'?' selected':'' }}>100 rows</option>
                                </select>
                            </form>
                        </div>
                        <div class="offset-md-3 col-md-3">
                            <form method="Get" action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Division" aria-label="Search Division">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="data" class="table text-nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Division</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($division as $div)
                                <tr>
                                    <td>{{ $div->division }}</td>
                                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($div->created_at))->format('d-M-Y') }}</td>
                                    <td class="text-right">
                                        <a class="text-primary m-2 mb-0 mt-0 ml-0" href="{{ route('division.edit.admin', $div->id) }}"><i class="fas fa-edit" aria-hidden="false"></i></a>
                                        <a class="text-danger" href="{{ route('division.delete.admin', $div->id) }}" ><i class="fas fa-trash-alt" aria-hidden="false"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        {!! $division->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('extras')
    @if(session()->has('success'))
        <script>
            $(function () {
                toastr.success("{{ session()->get('success') }}");
            });
        </script>
    @endif

    @if(session()->has('error'))
        <script>
            $(function () {
                toastr.error("{{ session()->get('error') }}");
            });
        </script>
    @endif
@stop
