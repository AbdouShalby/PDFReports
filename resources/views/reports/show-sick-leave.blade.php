@php $title = 'all-sick-leaves'; $pdf_css = 'sick-leave.css' @endphp
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-sick-leaves') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body a4 border border-dark">
                        <div class="row">
                            <div class="col-4 m-auto">
                                <img class="img-responsive w-50 ml-5 mt-4" src="{{ asset('images/sick-leave/img_01.png') }}" alt="Seha">
                            </div>
                            <div class="col-4 KSA">
                                <img class="img-responsive" src="{{ asset('images/sick-leave/img_06.png') }}" alt="KSA">
                                <h6 class="text-center text-dark">Kingdom of Saudi Arabia</h6>
                            </div>
                            <div class="col-4">
                                <img class="img-responsive float-right" src="{{ asset('images/sick-leave/img_05.png') }}" alt="Description">
                            </div>
                        </div>
                        <div class="row sick">
                            <div class="col-12 text-center">
                                <h2>تقرير اجازة مرضية</h2>
                                <h2>Sick Leave Report</h2>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-11 table-responsive m-auto">
                                <table class="table">
                                    <tr>
                                        <th class="text-center head">Leave ID</th>
                                        <th class="text-center data" colspan="2">{{ $report->leave_id }}</th>
                                        <th class="text-center head">رمز الاجازة</th>
                                    </tr>
                                    <tr class="with-border">
                                        <th class="text-center head">Leave Duration</th>
                                        <th class="text-center data">{{ $report->leave_duration }} day ({{ $report->leave_start }} to {{ $report->leave_end }})</th>
                                        <th class="text-center data" dir="rtl">{{ $report->leave_duration }} يوم ({{ $hijri_start }} الي {{ $hijri_end }})</th>
                                        <th class="text-center head">مدة الاجازة</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center head">Issue Date</th>
                                        <th class="text-center data" colspan="2">{{ $report->issue_date }}</th>
                                        <th class="text-center head">تاريخ اصدار التقرير</th>
                                    </tr>
                                    <tr class="gray-border">
                                        <th class="text-center head">Name</th>
                                        <th class="text-center data">{{ $report->name_en }}</th>
                                        <th class="text-center data" dir="rtl">{{ $report->name_ar }}</th>
                                        <th class="text-center head">الاسم</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center head">National ID/Iqama</th>
                                        <th class="text-center data" colspan="2">{{ $report->national_id }}</th>
                                        <th class="text-center head">رقم الهوية/الإقامة</th>
                                    </tr>
                                    <tr class="gray-border">
                                        <th class="text-center head">Nationality</th>
                                        <th class="text-center data">{{ $report->nationality_en }}</th>
                                        <th class="text-center data" dir="rtl">{{ $report->nationality_ar }}</th>
                                        <th class="text-center head">الجنسية</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center head">Employer</th>
                                        <th class="text-center data"></th>
                                        <th class="text-center data">{{ $report->employer }}</th>
                                        <th class="text-center head">جهة العمل</th>
                                    </tr>
                                    <tr class="gray-border">
                                        <th class="text-center head">Physician Name</th>
                                        <th class="text-center data">{{ $report->physician_name_en }}</th>
                                        <th class="text-center data" dir="rtl">{{ $report->physician_name_ar }}</th>
                                        <th class="text-center head">اسم الطبيب المعالج</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center head">Position</th>
                                        <th class="text-center data">{{ $report->position_en }}</th>
                                        <th class="text-center data">{{ $report->position_ar }}</th>
                                        <th class="text-center head">المسمي الوظيفي</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-3 btn-holder">
                        <button class="btn btn-primary" onclick="window.print()">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    @include('layouts.footer')
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
@endsection
