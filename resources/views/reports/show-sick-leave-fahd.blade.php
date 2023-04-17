@php $title = 'all-sick-leaves-fahd'; $pdf_css = 'sick-leave-fahd.css' @endphp
@extends('layouts.app')
@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">{{ __('sidebar.all-sick-leaves-fahd') }}</h3>
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
                            <div id="A4">
                                <div class="row">
                                    <div class="col-4 m-auto seha">
                                        <img class="img-responsive w-50 ml-5 mt-4" src="{{ asset('images/reports/seha.png') }}" alt="Seha">
                                    </div>
                                    <div class="col-4 KSA">
                                        <img class="img-responsive" src="{{ asset('images/reports/KSA.png') }}" alt="KSA">
                                        <h6 class="text-center text-dark">Kingdom of Saudi Arabia</h6>
                                    </div>
                                    <div class="col-4 right-style">
                                        <img class="img-responsive float-right" src="{{ asset('images/reports/right.png') }}" alt="Description">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img class="img-responsive float-right KFMC" src="{{ asset('images/reports/KFMC.png') }}" alt="KFMC">
                                    </div>
                                </div>
                                <div class="row sick">
                                    <div class="col-12 text-center">
                                        <h2 dir="rtl">تقرير اجازة مرضية</h2>
                                        <h2>Sick Leave Report</h2>
                                    </div>
                                </div>
                                <div class="row mt-1">
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
                                            <tr class="gray-border">
                                                <th class="text-center head">Diagnosis</th>
                                                <th class="text-center data">{{ $report->diagnosis_en }}</th>
                                                <th class="text-center data" dir="rtl">{{ $report->diagnosis_ar }}</th>
                                                <th class="text-center head">التشخيص</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6 qrcode">
                                        <div class="text-center">
                                            <img class="img-responsive" src="{{ asset('images/reports/QRCode.png') }}" alt="QRCode">
                                            <p>قم بمسح الباركود للتحقق من التقرير إلكترونًيا تأكد من مطابقة
                                                بيانات التقرير برقم الهوية الوطنية أو الإقامة</p>
                                            <p class="mt-3">Scan the QR code to electronically check the report
                                                Make sure the information in this report matches the
                                                .ones in the National ID or Iqama</p>
                                        </div>
                                    </div>
                                    <div class="col-6 ministry">
                                        <div class="text-center">
                                            <img class="img-responsive mt-4" src="{{ asset('images/reports/ministry.png') }}" alt="Ministry Of Health">
                                        </div>
                                    </div>
                                </div>
                                <div class="row end">
                                    <div class="col-12">
                                        <img class="img-responsive" src="{{ asset('images/reports/NHIC.png') }}" alt="National Health Information Center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-3 btn-holder">
                            <button class="btn btn-success" onclick="generatePDF(1)">Print</button>
                            <button class="btn btn-primary" onclick="generatePDF(2)">Download</button>
                            <button class="btn btn-info" onclick="generatePDF(3)">Print & Download</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                /*
                function printCanvas() {
                    // Select the div element to be converted
                    var divToPrint = document.getElementById("A4");

                    // Use html2canvas to convert the div to a canvas element
                    html2canvas(divToPrint).then(function(canvas) {
                        // Create a new window to print the canvas image
                        var win = window.open();
                        win.document.write('<img src="' + canvas.toDataURL() + '" style="width:100%">');
                        win.print();
                        win.close();
                    });
                }
    */
                /*
                function printCanvas() {
                    // Select the div element to be converted
                    var divToPrint = document.getElementById("A4");

                    // Use html2canvas to convert the div to a canvas element
                    html2canvas(divToPrint).then(function(canvas) {
                        // Create a new window to print the canvas image
                        var win = window.open();
                        win.document.write('<html><head><style>@media print{.page-header,.page-footer{display:none;}@page{size:A4;margin:0;}}</style></head><body><img src="' + canvas.toDataURL() + '" style="width:100%"></body></html>');
                        win.print();
                        win.close();
                    });
                }
                */
                /*
                            function printCanvas() {
                                // Select the div element to be converted
                                var divToPrint = document.getElementById("A4");

                                // Use html2canvas to convert the div to a canvas element
                                html2canvas(divToPrint).then(function(canvas) {
                                    // Create a new window to print the canvas image
                                    var win = window.open();
                                    win.document.write('<html><head><style>body, html {font-family: \'Cairo\', sans-serif;} @media print{.page-header,.page-footer{display:none;}@page{size:A4;margin:0;}}</style></head><body><img src="' + canvas.toDataURL() + '" style="width:100%"></body></html>');
                                    win.print();
                                    win.close();
                                });
                            }
                            */

                function printCanvas_() {
                    // Select the div element to be converted
                    var divToPrint = document.getElementById("A4");

                    // Use html2canvas to convert the div to a canvas element
                    html2canvas(divToPrint, {
                        letterRendering:true
                    }).then(function(canvas) {
                        // Create a new window to print the canvas image
                        var win = window.open();
                        win.document.write('<html><head><style>@media print{.page-header,.page-footer{display:none;} @page{size:A4;margin:0;}}</style></head><body><img src="' + canvas.toDataURL() + '" style="width:100%"></body></html>');
                        win.print();
                        win.close();
                    });
                }

                function printCanvas1() {
                    html2canvas(document.querySelector("#A4")).then(canvas => {
                        document.body.appendChild(canvas);
                    });
                    setTimeout(function () {
                        var canvas = document.querySelector("canvas"),
                            link = document.createElement("a");

                        link.innerHTML = "save image";

                        link.addEventListener(
                            "click",
                            function () {
                                link.href = canvas.toDataURL();
                                link.download = "image.png";
                            },
                            false);

                        document.body.appendChild(link);
                    }, 500);
                }



                function printCanvas() {
                    // Select the div element to be converted
                    var divToPrint = document.getElementById("A4");

                    // Use dom-to-image to convert the div to a canvas element
                    domtoimage.toPng(divToPrint)
                        .then(function(dataUrl) {
                            // Create a new window to print the canvas image
                            var win = window.open();
                            win.document.write('<html><head><style>@media print{.page-header,.page-footer{display:none;}@page{size:A4;margin:0;}}</style></head><body><img src="' + dataUrl + '" style="width:100%"></body></html>');
                            win.print();
                            win.close();
                        })
                        .catch(function(error) {
                            console.error('Failed to generate image:', error);
                        });
                }

                function generatePDF_Good() {
                    // Get the div element
                    const div = document.getElementById("A4");

                    // Create a new jsPDF instance
                    const doc = new jsPDF();

                    // Convert the div to PDF using html2canvas
                    html2canvas(div).then((canvas) => {
                        // Add the canvas to the PDF document
                        doc.addImage(canvas.toDataURL(), "PNG", 10, 10, 180, 0);

                        // Print the PDF document
                        doc.autoPrint();
                        doc.output("dataurlnewwindow");
                    });
                }


                function generatePDF(method) {
                    // Get the div element
                    const div = document.getElementById("A4");

                    // Create a new jsPDF instance
                    const doc = new jsPDF();

                    // Convert the div to PNG using dom-to-image
                    domtoimage.toPng(div).then((dataUrl) => {
                        // Add the PNG image to the PDF document
                        doc.addImage(dataUrl, "PNG", 10, 10, 180, 0);

                        // Print the PDF document
                        switch(method)
                        {

                            case 1:
                                doc.autoPrint();
                                window.open(doc.output('bloburl'), '_blank');
                                break;
                            case 2:
                                doc.save("{{ $report->leave_id }}.pdf");
                                break;

                            case 3:
                                doc.autoPrint();
                                doc.save("{{ $report->leave_id }}.pdf");
                                break;
                        }

                    });
                }

            </script>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        @include('layouts.footer')
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
@endsection
