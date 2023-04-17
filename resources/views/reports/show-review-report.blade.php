@php $title = 'all-review-reports'; $pdf_css = 'review-report.css' @endphp
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
                    <div class="card-body a4">
                        <div class="row my-4">
                            <div class="col-12 table-responsive m-auto" id="A4">
                                <table class="table">
                                    <tr>
                                        <th class="text-center KFMC-en" colspan="1">
                                            <span class="d-block">Kingdom of Saudi Arabia</span>
                                            <span class="d-block">Ministry of Health</span>
                                            <span class="d-block">King Fahd Medical Hospital</span>
                                        </th>
                                        <th class="text-center KFMC-img" colspan="1"><img class="img-fluid w-75" src="{{ asset('images/reports/KFMC.png') }}" alt="KFMC"></th>
                                        <th class="text-center KFMC-ar" colspan="1">
                                            <span class="d-block">المملكة العربية السعودية</span>
                                            <span class="d-block">وزارة الصحة</span>
                                            <span class="d-block">مدينة الملك فهد الطبية</span>
                                    </tr>
                                    <tr>
                                        <th class="text-center RS" colspan="3">تقرير مراجعة</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center KFMC-en" colspan="1">
                                            <span class="d-block text-right">نوع الهوية</span>
                                            <span class="data d-block">{{ $report->national_type }}</span>
                                        </th>
                                        <th class="text-center KFMC-img" colspan="1">
                                            <span class="d-block text-right">رقم الهوية</span>
                                            <span class="data d-block">{{ $report->national_id }}</span>
                                        </th>
                                        <th class="text-center KFMC-ar" colspan="1">
                                            <span class="d-block text-right">الرقم التسلسلي</span>
                                            <span class="data d-block">{{ $report->leave_id }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center print" colspan="1">
                                            <span class="d-block text-right">تاريخ الطباعة</span>
                                            <span class="data d-block">{{ $report->print_date }}</span>
                                        </th>
                                        <th class="text-center name" colspan="2">
                                            <span class="d-block text-right">اسم المريض</span>
                                            <span class="data d-block">{{ $report->name_ar }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center KFMC-en" colspan="1">
                                            <span class="d-block text-right">جهة العمل</span>
                                            <span class="data d-block">{{ $report->work }}</span>
                                        </th>
                                        <th class="text-center KFMC-img" colspan="1">
                                            <span class="d-block text-right">تاريخ الميلاد</span>
                                            <span class="data d-block">{{ $report->birth_date }}</span>
                                        </th>
                                        <th class="text-center KFMC-ar" colspan="1">
                                            <span class="d-block text-right">الجنسية</span>
                                            <span class="data d-block">{{ $report->nationality }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center KFMC-en" colspan="1">
                                            <span class="d-block text-right">تاريخ الخروج</span>
                                            <span class="data d-block">{{ $report->discharge }}</span>
                                        </th>
                                        <th class="text-center KFMC-img" colspan="1">
                                            <span class="d-block text-right">تاريخ الدخول</span>
                                            <span class="data d-block">{{ $report->admission }}</span>
                                        </th>
                                        <th class="text-center KFMC-ar" colspan="1">
                                            <span class="d-block text-right">تاريخ المراجعة</span>
                                            <span class="data d-block">{{ $report->review_date }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-right" colspan="3">{{ $report->details }}</th>
                                    </tr>
                                    <tr class="treating">
                                        <th class="physician" colspan="1">
                                            <span class="ml-5">Treating Physician</span><br>
                                            <span class="ml-1 d-block">Name</span>
                                            <span class="ml-1 d-block">Signature</span>
                                            <span class="ml-5 d-block" dir="rtl">وحدة إصدار المعلومات :
                                            @php if ($report->status == 0) { echo '<span style="color: green;">Conformed<span>'; } elseif ($report->status == 1) { echo '<span style="color: red;">Not Conformed<span>'; } @endphp
                                            </span>
                                        </th>
                                        <th class="doctor text-right" colspan="2" dir="rtl">
                                            <span class="d-block">الطبيب المعالج</span>
                                            <span class="d-block">الاسم:</span><span class="doctor_name d-inline-block">{{ $report->physician_name }}{{ $report->physician_position }}</span>
                                            <span class="d-block signture-holder">التوقيع:</span><img class="signture d-inline-block" src="{{ asset('images/reports/signture.png') }}" alt="">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center ekrar" colspan="3">(هذه وثيقة صادرة من قسم التقارير الطبية عن طريق الحاسب الآلي معتمدة بتوقيع الإلكتروني, ولا تحتاج الي توقيع يري ويكتفي بالختم الرسمي لمدينة الملك فهد الطبية)</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center ekrar-2" colspan="3">(This computer generated report is signed through e-signature released by the Medical Reports Dept. This report is invalid without the King Fahd Medical City official stamp)</th>
                                    </tr>
                                    <tr class="foot-end">
                                        <th class="text-right stamp" colspan="3"><img class="img-responsive float-right" id="formal" src="{{ asset('images/reports/Formal.png') }}" alt="Formal Stamp"></th>
                                    </tr>
                                </table>
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
            function printCanvas_() {
                // Select the div element to be converted
                var divToPrint = document.getElementById("A4");

                // Use html2canvas to convert the div to a canvas element
                html2canvas(divToPrint, {
                    letterRendering:true
                }).then(function(canvas) {
                    // Create a new window to print the canvas image
                    var win = window.open();
                    win.document.write('<html><head><style>@media print{.page-header,.page-footer{display:none;}@page{size:A4;margin:0;}}</style></head><body><img src="' + canvas.toDataURL() + '" style="width:100%"></body></html>');
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
                        win.document.write('<html><head><style>@media print{.page-header,.page-footer{display:none;}  @page{size:A4;margin:0;}}</style></head><body><img src="' + dataUrl + '" style="width:100%"></body></html>');
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
                    doc.addImage(canvas.toDataURL(), "PNG", 5, 10, 200, 220);

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
                    doc.addImage(dataUrl, "PNG", 5, 10, 200, 220);

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
