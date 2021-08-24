@extends('layouts.main')

@section('breadcrumbs')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="{{ route('dashboard') }}" class="fw-normal" style="text-decoration: none;" >Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid content">
        <div class="row">
            <div class="card">
                <div class="card-body" id="card">
                    <form action="{{ route('leave.policy.store.admin') }}" method="POST">
                        @csrf
                        <div class="row mt-4 mb-4">
                            <div class="col p-0">
                                <h6 class="hrm-heading">Leave Application </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row custom-columns">
                                    <div class="offset-2 col-lg-8">
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Employee Name <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0">
                                                <input type="text" class="hrm-input" id="emp_name" name="emp_name"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Leave Type <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0">
                                                <select name="region" class="hrm-input" id="region">
                                                    <option value="" disabled selected>Select Leave Type</option>
                                                    <option value="annual_leave">Annual Leave</option>
                                                    <option value="casual_leave">Casual Leave</option>
                                                    <option value="hajj_leave">Hajj Leave</option>
                                                    <option value="leave_without_pay">Leave without Pay</option>
                                                    <option value="sick_leave">Sick Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Leave Start Date <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0">
                                                <input type="date" class="hrm-input" id="leave_start_date" name="leave_start_date"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Leave End Date <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0">
                                                <input type="date" class="hrm-input" id="leave_end_date" name="leave_end_date"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Reason for Leave <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0"> <textarea class="hrm-input" id="present_address" name="present_address"> </textarea></div>
                                        </div>
                                        <div class="form-check form-switch offset-md-4">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label " for="flexSwitchCheckDefault">Leave Fare Assistance(LFA)</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 p-0"><label class="hrm-label magical">Leave End Date <span style="color:#ff0000">*</span></label></div>
                                            <div class="col-md-8 p-0">
                                                <input type="date" class="hrm-input" id="leave_end_date" name="leave_end_date"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

