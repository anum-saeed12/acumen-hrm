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
        <div class="row">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <form class="row g-3" method="post" action="{{ route('position.store.admin') }}">
                        @csrf
                        <div class="col-auto">
                            <label for="position_code" class="visually-hidden">Position Code</label>
                            <input type="text" class="form-control" id="position_code" name="position_code" placeholder="Position Code">
                        </div>

                        <div class="col-auto">
                            <label for="designation_id" class="visually-hidden">Designation</label>
                            <select name="designation_id" class="form-select" id="designation_id">
                                <option selected="selected" value>Select Designation</option>
                                @foreach ($designations as $designation)
                                    <option value="{{ $designation->id }}">{{ ucfirst($designation->designation) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary mb-2" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>

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
                                    <input type="text" class="form-control" placeholder="Search Position" aria-label="Search Position">
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
                                <th>Position Code</th>
                                <th>Designation</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($position as $item)
                                <tr>
                                    <td>{{ $item->position_code }}</td>
                                    <td>{{ $item->designation->designation }}</td>
                                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->format('d-M-Y') }}</td>
                                    <td class="text-right">
                                        <a class="text-primary m-2 mb-0 mt-0 ml-0" href="{{ route('position.edit.admin', $item->id) }}"><i class="fas fa-edit" aria-hidden="false"></i></a>
                                        <a class="text-danger" href="{{ route('position.delete.admin', $item->id) }}" ><i class="fas fa-trash-alt" aria-hidden="false"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        {!! $position->links('pagination::bootstrap-4') !!}
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
