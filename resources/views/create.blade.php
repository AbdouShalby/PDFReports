@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-reports') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Visitor in Device</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                <tr>
                                    <th>Device</th>
                                    <th>Visits</th>
                                    <th>Avg. time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Unknown</td>
                                    <td>2,456</td>
                                    <td>00:02:36</td>
                                </tr>
                                <tr>
                                    <td>Apple iPad</td>
                                    <td>1,006</td>
                                    <td>00:03:41</td>
                                </tr>
                                <tr>
                                    <td>Apple iPhone</td>
                                    <td>68</td>
                                    <td>00:04:10</td>
                                </tr>
                                <tr>
                                    <td>HTC Desire</td>
                                    <td>38</td>
                                    <td>00:01:40</td>
                                </tr>
                                <tr>
                                    <td>Samsung</td>
                                    <td>20</td>
                                    <td>00:04:54</td>
                                </tr>
                                <tr>
                                    <td>Apple iPad</td>
                                    <td>1,006</td>
                                    <td>00:03:41</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
@endsection
