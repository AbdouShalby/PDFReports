<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav active">
                <ul id="sidebarnav" class="in">
                    <li class="nav-devider"></li>
                    <li class="nav-label">{{ __('sidebar.title') }}</li>
                    <li> <a href="{{ route('home') }}"><i class="fa fa-file-pdf-o"></i><span class="hide-menu">{{ __('sidebar.all-reports') }}</span></a></li>
                    <li> <a href="#"><i class="fa fa-plus-square-o"></i><span class="hide-menu">{{ __('sidebar.create-report') }}</span></a></li>
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
