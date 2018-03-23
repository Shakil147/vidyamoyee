<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Students Info<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/all-student') }}"><i class="fa fa-table fa-fw"></i>All Students</a>
                        </li>
                        <li>
                            <a href="{{ url('/add-student') }}"><i class="fa fa-table fa-fw"></i>Add Students</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('/result-search') }}"><i class="glyphicon glyphicon-search"></i>Search Result</a>
                </li>
                <li>
                    <a href="{{ url('/result-add') }}"><i class="fa fa-plus-square fa-fw"></i>Add Result</a>
                </li>
                <li>
                    <a href="{{ url('/section-add') }}"><i class="fa fa-edit fa-fw"></i>Sections</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="panels-wells.html">Panels and Wells</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="icons.html"> Icons</a>
                        </li>
                        <li>
                            <a href="grid.html">Grid</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i>Tool<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Class Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/class-add') }}">Add Class</a>
                                </li>
                                <li>
                                    <a href="{{ url('/class-menage') }}">Menage Class</a></li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                        <li>
                            <a href="#">Group Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/group-add') }}">Add Group</a>
                                </li>
                                <li>
                                    <a href="{{ url('/group-menage') }}">Menage Group</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
<!--                 <li>
<a href="#"><i class="fa fa-files-o fa-fw"></i>Class info<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="">Add Class</a>
        </li>
        <li>
            <a href="login.html">menage Class</a>
        </li>
    </ul>
    /.nav-second-level
</li>

<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Group<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('/group-add') }}">ADD Group</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
    /.nav-second-level
</li>
 
 <li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Exam<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('/exam-add') }}">ADD Exam</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
    /.nav-second-level
</li>

<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Subject<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('/subject-add') }}">ADD Subject</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
    /.nav-second-level
</li>
<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Session<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('/session-add') }}">ADD Session</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
    /.nav-second-level
</li>
<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Shift<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('/shift-add') }}">ADD Shift</a>
        </li>
        <li>
            <a href="morris.html">Morris.js Charts</a>
        </li>
    </ul>
    /.nav-second-level
</li> -->
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>