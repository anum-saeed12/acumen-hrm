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
                <div class="col-sm-3">
                    <form method="post" action="{{ route('grade.store.admin') }}">
                        @csrf
                        <div class="input-group">
                            <input type="text" id="grade" name="grade" class="form-control" placeholder="New Grade" aria-label="Grade" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary " type="submit">Save</button>
                            </div>
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
                                    <input type="text" class="form-control" placeholder="Search Grade" aria-label="Search Grade">
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
                                <th>Grade</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($grade as $item)
                                <tr>
                                    <td>{{ $item->grade }}</td>
                                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->format('d-M-Y') }}</td>
                                    <td class="text-right">
                                        <a class="text-primary m-2 mb-0 mt-0 ml-0" href="{{ route('grade.edit.admin', $item->id) }}"><i class="fas fa-edit" aria-hidden="false"></i></a>
                                        <a class="text-danger" href="{{ route('grade.delete.admin', $item->id) }}" ><i class="fas fa-trash-alt" aria-hidden="false"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        {!! $grade->links('pagination::bootstrap-4') !!}
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
