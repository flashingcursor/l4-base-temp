<!doctype html>
<html lang="en">
    <head>
        <title>L4 Site</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/unicorn.main.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/unicorn.light-blue.css') }}" rel="stylesheet" class="skin-color" />
    </head>
    <body>
        <div id="header">
            <h1><a href="{{ URL::route('admin.dashboard.index') }}">Admin</a></h1>

            <a id="menu-trigger" href="#"><i class="icon-align-justify"></i></a>
        </div>
        <div id="user-nav">
            {{-- @if (Sentry::check()) --}}
            <ul class="btn-group">
                <li class="btn" ><a title="" href="#"><i class="icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn"><a title="" href="#"><i class="icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class="btn"><a title="" href="{{ URL::route('admin.logout') }}"><i class="icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
            {{-- @endif --}}
        </div>
        <div id="sidebar">
            <ul>
                <li class="active"><a href="index.html"><i class="icon-home"></i> <span>Dashboard</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="icon-th-list"></i> <span>Form elements</span> <i class="arrow icon-chevron-right"></i></a>
                    <ul>
                        <li><a href="form-common.html">Common elements</a></li>
                        <li><a href="form-validation.html">Validation</a></li>
                        <li><a href="form-wizard.html">Wizard</a></li>
                    </ul>
                </li>
                <li><a href="buttons.html"><i class="icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
                <li><a href="interface.html"><i class="icon-pencil"></i> <span>Interface elements</span></a></li>
                <li><a href="tables.html"><i class="icon-th"></i> <span>Tables</span></a></li>
                <li><a href="grid.html"><i class="icon-th-list"></i> <span>Grid Layout</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="icon-file"></i> <span>Sample pages</span> <i class="arrow icon-chevron-right"></i></a>
                    <ul>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="chat.html">Support chat</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </li>
                <li>
                    <a href="charts.html"><i class="icon-signal"></i> <span>Charts &amp; graphs</span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="icon-inbox"></i> <span>Widgets</span></a>
                </li>
            </ul>
        </div>

        <div id="content">
            @yield('main')
        </div>
        <script src="{{ URL::asset('assets/js/excanvas.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery-ui.custom.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.flot.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.jpanelmenu.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/unicorn.js') }}"></script>
        <script src="{{ URL::asset('assets/js/unicorn.dashboard.js') }}"></script>
    </body>
</html>