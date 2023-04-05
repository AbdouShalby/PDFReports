<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav active">
                <ul class="in">
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.title') }}</li>
                    <li class="{{ $title == 'latest-reports' ? 'active' : '' }}"> <a href="{{ route('home') }}"><i class="fa fa-file-pdf-o"></i><span class="hide-menu">{{ __('sidebar.title') }}</span></a></li>
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.sick-leave-title') }}</li>
                    <li class="{{ $title == 'all-sick-leave' ? 'active' : '' }}"> <a href="{{ route('all-sick-leaves') }}"><i class="fa fa-stethoscope"></i><span class="hide-menu">{{ __('sidebar.all-sick-leave') }}</span></a></li>
                    <li class="{{ $title == 'sick-leave' ? 'active' : '' }}"> <a href="{{ route('create-sick-leave') }}"><i class="fa fa-stethoscope"></i><span class="hide-menu">{{ __('sidebar.create-sick-leave') }}</span></a></li>
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.sick-leave-fahd-title') }}</li>
                    <li class="{{ $title == 'all-sick-leave-fahd' ? 'active' : '' }}"> <a href="{{ route('all-sick-leaves-fahd') }}"><i class="fa fa-hospital-o"></i><span class="hide-menu">{{ __('sidebar.all-sick-leave-fahd') }}</span></a></li>
                    <li class="{{ $title == 'sick-leave-fahd' ? 'active' : '' }}"> <a href="{{ route('create-sick-leave-fahd') }}"><i class="fa fa-hospital-o"></i><span class="hide-menu">{{ __('sidebar.create-sick-leave-fahd') }}</span></a></li>
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.review-title') }}</li>
                    <li class="{{ $title == 'all-report' ? 'active' : '' }}"> <a href="{{ route('all-review-reports') }}"><i class="fa fa-eye"></i><span class="hide-menu">{{ __('sidebar.create-review-report') }}</span></a></li>
                    <li class="{{ $title == 'review-report' ? 'active' : '' }}"> <a href="{{ route('create-review-report') }}"><i class="fa fa-eye"></i><span class="hide-menu">{{ __('sidebar.create-review-report') }}</span></a></li>
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.scene-title') }}</li>
                    <li class="{{ $title == 'all-review-scene' ? 'active' : '' }}"> <a href="{{ route('all-review-scenes') }}"><i class="fa fa-search"></i><span class="hide-menu">{{ __('sidebar.all-review-scene') }}</span></a></li>
                    <li class="{{ $title == 'review-scene' ? 'active' : '' }}"> <a href="{{ route('create-review-scene') }}"><i class="fa fa-search"></i><span class="hide-menu">{{ __('sidebar.create-review-scene') }}</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; left: 1px; height: 247.673px;">
        </div>
        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;">
        </div>
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->
