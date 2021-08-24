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
                    <form action="{{ route('company.store.admin') }}" method="POST">
                        @csrf
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Attendance and Leave</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Provident Fund(PF)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                <div class="row mt-4 mb-4">
                                    <div class="col p-0">
                                        <h6 class="hrm-heading">Leave Policy</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="row custom-columns">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Leave Policy Basis <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0">
                                                        <select name="leave_policy" class="hrm-input" id="leave_policy">
                                                            <option value="" disabled selected>Select Leave Policy</option>
                                                            <option value="employee_base">Employee Type Wise</option>
                                                            <option value="leave_type">Leave Type Wise</option>
                                                            <option value="grade_type">Grade Type</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Leave Fare Assistance(LFA) </label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Minimum no of Leaves<span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 mb-4">
                                    <div class="col p-0">
                                        <h6 class="hrm-heading">Late Coming Policy</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="row custom-columns">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Late Policy Basis <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0">
                                                        <select name="leave_policy" class="hrm-input" id="leave_policy">
                                                            <option value="" disabled selected>Select Late Policy</option>
                                                            <option value="grace_time">Grace Time</option>
                                                            <option value="no_of_hours">No of Hours </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">No of Leaves to deduct <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Chargeable Leaves<span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Types of late(Month)<span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0">
                                                        <select name="leave_policy" class="hrm-input" id="leave_policy">
                                                            <option value="" disabled selected>Select Type of Late</option>
                                                            <option value="monthly_late">Monthly Late</option>
                                                            <option value="consecutive_late">No of Hours </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Applicable No of Leaves to deduct <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 mb-4">
                                    <div class="col p-0">
                                        <h6 class="hrm-heading">Half Day Policy</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="row custom-columns">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Half Day Policy <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0">
                                                        <select name="leave_policy" class="hrm-input" id="leave_policy">
                                                            <option value="" disabled selected>Select Half Day Policy</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">No of Leaves to deduct <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Chargeable Leaves<span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Hours required for Half Day<span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 p-0"><label class="hrm-label magical">Applicable No of Leaves to deduct <span style="color:#ff0000">*</span></label></div>
                                                    <div class="col-md-8 p-0"><input type="text" class="hrm-input" id="contact_email" name="contact_email"/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 mb-4">
                                    <div class="col p-0">
                                        <h6 class="hrm-heading">Attendance</h6>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col p-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Multiple Check In/ Check Out
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">..err.</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">..fff.</div>
                        </div>
                        <div class="row" id="shift_add"></div>
                        <div class="row mt-2">
                            <div class="col-12 mb-2 mt-2 text-center bold">
                                <button type="submit" class="btn btn-light btn-lg">Cancel</button>
                                <span class="mr-3"></span>
                                <button type="submit" class="btn btn-primary btn-lg">{{$title}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

