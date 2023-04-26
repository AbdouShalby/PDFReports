<!-- header header  -->
<div class="header bg-transparent p-5">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header bg-transparent">
            <a class="navbar-brand" href="{{ route('check') }}">
                <!-- Logo icon -->
                <b><img class="w-25 m-0 p-0" src="{{ asset('images/logo.svg') }}" alt="homepage" /></b>
                <!--End Logo icon -->
            </a>
        </div>
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
            </ul>
            <!-- User profile and search -->
            <ul class="navbar-nav my-lg-0">

                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-globe fa-2x pt-2 text-light"></i>
                        <div class="notify"> </div>
                    </a>
                    <div id="lang-dd" class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                        <ul>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 120px;"><div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                        <!-- Message -->
                                        <a href="{{ route('switchLang','ar') }}">
                                            <div class="user-img"> <img src="{{ asset('images/ar.svg') }}" alt="Arabic"></div>
                                            <div class="mail-contnet">
                                                {{ __('dashboard.arabic') }}
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="{{ route('switchLang','en') }}" style="border-bottom: none">
                                            <div class="user-img"> <img src="{{ asset('images/en.svg') }}" alt="user"></div>
                                            <div class="mail-contnet">
                                                {{ __('dashboard.english') }}
                                            </div>
                                        </a>
                                    </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--Waves end-->
