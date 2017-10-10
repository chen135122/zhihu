<!DOCTYPE html>
<!-- saved from url=(0039)http://www.bublinastudio.com/flattybs3/ -->
<html class=" js no-touch localstorage svg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style id="flot-default-styles">.flot-tick-label {
            font-size: smaller;
            color: #545454;
        }</style>
    <title>新闻后台</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta content="Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support."
          name="description">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/favicon.ico" rel="shortcut icon"
          type="image/x-icon">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon.png"
          rel="apple-touch-icon-precomposed">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-57x57.png"
          rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-72x72.png"
          rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-114x114.png"
          rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-144x144.png"
          rel="apple-touch-icon-precomposed" sizes="144x144">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- / START - page related stylesheets [optional] -->
    <link href="{{ asset('css/dashboard/bootstrap-daterangepicker.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard/fullcalendar.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard/bootstrap-wysihtml5.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="{{ asset('css/dashboard/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / theme file [required] -->
    <link href="{{ asset('css/dashboard/light-theme.css') }}" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css">
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{{ asset('css/dashboard/theme-colors.css') }}" media="all" rel="stylesheet"
          type="text/css">
    <!-- / demo file [not required!] -->
    <link href="{{ asset('css/dashboard/demo.css') }}" media="all" rel="stylesheet"
          type="text/css">
    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body class="contrast-red wysihtml5-supported">
<header>
    <nav class="navbar navbar-default">
        <a class="navbar-brand" href="">
            <img width="81" height="21" class="logo" alt="Flatty"
                 src="{{ asset('img/logo.svg') }}">
            <img width="21" height="21" class="logo-xs" alt="Flatty"
                 src="{{ asset('img/logo_xs.svg') }}">
        </a>
        <a class="toggle-nav btn pull-left" href="http://www.bublinastudio.com/flattybs3/#">
            <i class="icon-reorder"></i>
        </a>
        <ul class="nav">
            <li class="dropdown light only-icon">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <i class="icon-cog"></i>
                </a>
                <ul class="dropdown-menu color-settings">
                    <li class="color-settings-body-color">
                        <div class="color-title">Change body color</div>
                        <a data-change-to="assets/stylesheets/light-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Light
                            <small>(default)</small>
                        </a>
                        <a data-change-to="assets/stylesheets/dark-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Dark
                        </a>
                        <a data-change-to="assets/stylesheets/dark-blue-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Dark blue
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="color-settings-contrast-color">
                        <div class="color-title">Change contrast color</div>
                        <a data-change-to="contrast-red" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-red"></i>
                            Red
                            <small>(default)</small>
                        </a>

                        <a data-change-to="contrast-blue" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-blue"></i>
                            Blue
                        </a>

                        <a data-change-to="contrast-orange" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-orange"></i>
                            Orange
                        </a>

                        <a data-change-to="contrast-purple" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-purple"></i>
                            Purple
                        </a>

                        <a data-change-to="contrast-green" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-green"></i>
                            Green
                        </a>

                        <a data-change-to="contrast-muted" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-muted"></i>
                            Muted
                        </a>

                        <a data-change-to="contrast-fb" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-fb"></i>
                            Facebook
                        </a>

                        <a data-change-to="contrast-dark" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-dark"></i>
                            Dark
                        </a>

                        <a data-change-to="contrast-pink" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-pink"></i>
                            Pink
                        </a>

                        <a data-change-to="contrast-grass-green" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-grass-green"></i>
                            Grass green
                        </a>

                        <a data-change-to="contrast-sea-blue" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-sea-blue"></i>
                            Sea blue
                        </a>

                        <a data-change-to="contrast-banana" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-banana"></i>
                            Banana
                        </a>

                        <a data-change-to="contrast-dark-orange" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-dark-orange"></i>
                            Dark orange
                        </a>

                        <a data-change-to="contrast-brown" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-brown"></i>
                            Brown
                        </a>

                    </li>
                </ul>
            </li>
            <li class="dropdown medium only-icon widget">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <i class="icon-rss"></i>
                    <div class="label">5</div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-user text-success"></i>
                                </div>
                                <div class="pull-left text">
                                    John Doe signed up
                                    <small class="text-muted">just now</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-inbox text-error"></i>
                                </div>
                                <div class="pull-left text">
                                    New Order #002
                                    <small class="text-muted">3 minutes ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-comment text-warning"></i>
                                </div>
                                <div class="pull-left text">
                                    America Leannon commented Flatty with veeery long text.
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-user text-success"></i>
                                </div>
                                <div class="pull-left text">
                                    Jane Doe signed up
                                    <small class="text-muted">last week</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-inbox text-error"></i>
                                </div>
                                <div class="pull-left text">
                                    New Order #001
                                    <small class="text-muted">1 year ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="widget-footer">
                        <a href="http://www.bublinastudio.com/flattybs3/#">All notifications</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown dark user-menu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <img width="23" height="23" alt="Mila Kunis"
                         src="{{ asset('img/avatar.jpg') }}">
                    <span class="user-name">Mila Kunis</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/user_profile.html">
                            <i class="icon-user"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/user_profile.html">
                            <i class="icon-cog"></i>
                            Settings
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/sign_in.html">
                            <i class="icon-signout"></i>
                            Sign out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <form action="http://www.bublinastudio.com/flattybs3/search_results.html"
              class="navbar-form navbar-right hidden-xs" method="get">
            <button class="btn btn-link icon-search" name="button" type="submit"></button>
            <div class="form-group">
                <input value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" name="q"
                       type="text">
            </div>
        </form>
    </nav>
</header>
<div id="wrapper">
    <div id="main-nav-bg"></div>
    <nav id="main-nav">
        <div class="navigation">
            <div class="search">
                <form action="http://www.bublinastudio.com/flattybs3/search_results.html" method="get">
                    <div class="search-wrapper">
                        <input value="" class="search-query form-control" placeholder="Search..." autocomplete="off"
                               name="q" type="text">
                        <button class="btn btn-link icon-search" name="button" type="submit"></button>
                    </div>
                </form>
            </div>
            <ul class="nav nav-stacked">
                <li class="active">
                    <a href="">
                        <i class="icon-dashboard"></i>
                        <span>后台首页</span>
                    </a>
                </li>
                <li class="">
                    <a class="dropdown-collapse" ><i
                                class="icon-edit"></i>
                        <span>分类管理</span>
                        <i class="icon-angle-down angle-down"></i>
                    </a>

                    <ul class="nav nav-stacked">
                        <li class="">
                            <a href="{{ url('dashboard/newstype') }}">
                                <i class="icon-caret-right"></i>
                                <span>分类列表</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="dropdown-collapse " >
                        <i class="icon-tint"></i>
                        <span>文章管理</span>
                        <i class="icon-angle-down angle-down"></i>
                    </a>
                    <ul class="nav nav-stacked">
                        <li class="">
                            <a href="{{ url('/dashboard/newslist') }}">
                                <i class="icon-caret-right"></i>
                                <span>新闻列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <section id="content">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">

                    <div class="page-header page-header-with-buttons">
                        <h1 class="pull-left">
                            <i class="icon-dashboard"></i>
                            <span>后台首页</span>
                        </h1>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- / jquery [required] -->
<script src="{{ asset('js/dashboard/jquery.min.js') }}" type="text/javascript"></script>
<!-- / jquery mobile (for touch events) -->
<script src="{{ asset('js/dashboard/jquery.mobile.custom.min.js') }}"
        type="text/javascript"></script>
<!-- / jquery migrate (for compatibility with new jquery) [required] -->
<script src="{{ asset('js/dashboard/jquery-migrate.min.js') }}"
        type="text/javascript"></script>
<!-- / jquery ui -->
<script src="{{ asset('js/dashboard/jquery-ui.min.js') }}"
        type="text/javascript"></script>
<!-- / jQuery UI Touch Punch -->
<script src="{{ asset('js/dashboard/jquery.ui.touch-punch.min.js') }}"
        type="text/javascript"></script>
<!-- / bootstrap [required] -->
<script src="{{ asset('js/dashboard/bootstrap.js') }}" type="text/javascript"></script>
<!-- / modernizr -->
<script src="{{ asset('js/dashboard/modernizr.min.js') }}"
        type="text/javascript"></script>
<!-- / retina -->
<script src="{{ asset('js/dashboard/retina.js') }}" type="text/javascript"></script>
<!-- / theme file [required] -->
<script src="{{ asset('js/dashboard/theme.js') }}" type="text/javascript"></script>
<!-- / demo file [not required!] -->
<script src="{{ asset('js/dashboard/demo.js') }}" type="text/javascript"></script>
<!-- / START - page related files and scripts [optional] -->
<script src="{{ asset('js/dashboard/excanvas.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/flot.resize.js') }}" type="text/javascript"></script>
<script>
    var data, dataset, gd, options, previousLabel, previousPoint, showTooltip, ticks;
    var blue, data, datareal, getRandomData, green, i, newOrders, options, orange, orders, placeholder, plot, purple,
        randNumber, randSmallerNumber, red, series, totalPoints, update, updateInterval;
    var red = "#f34541";
    var orange = "#f8a326";
    var blue = "#00acec";
    var purple = "#9564e2";
    var green = "#49bf67";
    randNumber = function () {
        return ((Math.floor(Math.random() * (1 + 50 - 20))) + 20) * 800;
    };
    randSmallerNumber = function () {
        return ((Math.floor(Math.random() * (1 + 40 - 20))) + 10) * 200;
    };
    if ($("#stats-chart1").length !== 0) {
        orders = [[1, randNumber() - 10], [2, randNumber() - 10], [3, randNumber() - 10], [4, randNumber()], [5, randNumber()], [6, 4 + randNumber()], [7, 5 + randNumber()], [8, 6 + randNumber()], [9, 6 + randNumber()], [10, 8 + randNumber()], [11, 9 + randNumber()], [12, 10 + randNumber()], [13, 11 + randNumber()], [14, 12 + randNumber()], [15, 13 + randNumber()], [16, 14 + randNumber()], [17, 15 + randNumber()], [18, 15 + randNumber()], [19, 16 + randNumber()], [20, 17 + randNumber()], [21, 18 + randNumber()], [22, 19 + randNumber()], [23, 20 + randNumber()], [24, 21 + randNumber()], [25, 14 + randNumber()], [26, 24 + randNumber()], [27, 25 + randNumber()], [28, 26 + randNumber()], [29, 27 + randNumber()], [30, 31 + randNumber()]];
        newOrders = [[1, randSmallerNumber() - 10], [2, randSmallerNumber() - 10], [3, randSmallerNumber() - 10], [4, randSmallerNumber()], [5, randSmallerNumber()], [6, 4 + randSmallerNumber()], [7, 5 + randSmallerNumber()], [8, 6 + randSmallerNumber()], [9, 6 + randSmallerNumber()], [10, 8 + randSmallerNumber()], [11, 9 + randSmallerNumber()], [12, 10 + randSmallerNumber()], [13, 11 + randSmallerNumber()], [14, 12 + randSmallerNumber()], [15, 13 + randSmallerNumber()], [16, 14 + randSmallerNumber()], [17, 15 + randSmallerNumber()], [18, 15 + randSmallerNumber()], [19, 16 + randSmallerNumber()], [20, 17 + randSmallerNumber()], [21, 18 + randSmallerNumber()], [22, 19 + randSmallerNumber()], [23, 20 + randSmallerNumber()], [24, 21 + randSmallerNumber()], [25, 14 + randSmallerNumber()], [26, 24 + randSmallerNumber()], [27, 25 + randSmallerNumber()], [28, 26 + randSmallerNumber()], [29, 27 + randSmallerNumber()], [30, 31 + randSmallerNumber()]];
        plot = $.plot($("#stats-chart1"), [
            {
                data: orders,
                label: "Orders"
            }, {
                data: newOrders,
                label: "New rders"
            }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 3
                },
                shadowSize: 0
            },
            legend: {
                show: false
            },
            grid: {
                clickable: true,
                hoverable: true,
                borderWidth: 0,
                tickColor: "#f4f7f9"
            },
            colors: ["#00acec", "#f8a326"]
        });
    }
    if ($("#stats-chart2").length !== 0) {
        orders = [[1, randNumber() - 5], [2, randNumber() - 6], [3, randNumber() - 10], [4, randNumber()], [5, randNumber()], [6, 4 + randNumber()], [7, 10 + randNumber()], [8, 12 + randNumber()], [9, 6 + randNumber()], [10, 8 + randNumber()], [11, 9 + randNumber()], [12, 10 + randNumber()], [13, 11 + randNumber()], [14, 12 + randNumber()], [15, 3 + randNumber()], [16, 14 + randNumber()], [17, 14 + randNumber()], [18, 15 + randNumber()], [19, 16 + randNumber()], [20, 17 + randNumber()], [21, 18 + randNumber()], [22, 19 + randNumber()], [23, 20 + randNumber()], [24, 21 + randNumber()], [25, 14 + randNumber()], [26, 24 + randNumber()], [27, 25 + randNumber()], [28, 26 + randNumber()], [29, 27 + randNumber()], [30, 31 + randNumber()]];
        newOrders = [[1, randSmallerNumber() - 10], [2, randSmallerNumber() - 10], [3, randSmallerNumber() - 10], [4, randSmallerNumber()], [5, randSmallerNumber()], [6, 4 + randSmallerNumber()], [7, 5 + randSmallerNumber()], [8, 6 + randSmallerNumber()], [9, 6 + randSmallerNumber()], [10, 8 + randSmallerNumber()], [11, 9 + randSmallerNumber()], [12, 10 + randSmallerNumber()], [13, 11 + randSmallerNumber()], [14, 12 + randSmallerNumber()], [15, 13 + randSmallerNumber()], [16, 14 + randSmallerNumber()], [17, 15 + randSmallerNumber()], [18, 15 + randSmallerNumber()], [19, 16 + randSmallerNumber()], [20, 17 + randSmallerNumber()], [21, 18 + randSmallerNumber()], [22, 19 + randSmallerNumber()], [23, 20 + randSmallerNumber()], [24, 21 + randSmallerNumber()], [25, 14 + randSmallerNumber()], [26, 24 + randSmallerNumber()], [27, 25 + randSmallerNumber()], [28, 26 + randSmallerNumber()], [29, 27 + randSmallerNumber()], [30, 31 + randSmallerNumber()]];
        plot = $.plot($("#stats-chart2"), [
            {
                data: orders,
                label: "Orders"
            }, {
                data: newOrders,
                label: "New orders"
            }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 3
                },
                shadowSize: 0
            },
            legend: {
                show: false
            },
            grid: {
                clickable: true,
                hoverable: true,
                borderWidth: 0,
                tickColor: "#f4f7f9"
            },
            colors: ["#f34541", "#49bf67"]
        });
        $("#stats-chart2").bind("plotclick", function (event, pos, item) {
            if (item) {
                return alert("Yeah! You just clicked on point " + item.dataIndex + " in " + item.series.label + ".");
            }
        });
    }
</script>
<script src="{{ asset('js/dashboard/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootstrap-daterangepicker.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootbox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.timeago.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/wysihtml5.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootstrap-wysihtml5.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/fullcalendar.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootbox.min.js') }}" type="text/javascript"></script>
<script>
    (function () {
        var cal, calendarDate, d, m, y;

        this.setDraggableEvents = function () {
            return $("#events .external-event").each(function () {
                var eventObject;
                eventObject = {
                    title: $.trim($(this).text())
                };
                $(this).data("eventObject", eventObject);
                return $(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });
        };

        setDraggableEvents();

        calendarDate = new Date();

        d = calendarDate.getDate();

        m = calendarDate.getMonth();

        y = calendarDate.getFullYear();

        cal = $(".full-calendar-demo").fullCalendar({
            header: {
                center: "title",
                left: "basicDay,basicWeek,month",
                right: "prev,today,next"
            },
            buttonText: {
                prev: "<span class=\"icon-chevron-left\"></span>",
                next: "<span class=\"icon-chevron-right\"></span>",
                today: "Today",
                basicDay: "Day",
                basicWeek: "Week",
                month: "Month"
            },
            droppable: true,
            editable: true,
            selectable: true,
            select: function (start, end, allDay) {
                return bootbox.prompt("Event title", function (title) {
                    if (title !== null) {
                        cal.fullCalendar("renderEvent", {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        }, true);
                        return cal.fullCalendar('unselect');
                    }
                });
            },
            eventClick: function (calEvent, jsEvent, view) {
                return bootbox.dialog({
                    message: $("<form class='form'><label>Change event name</label></form><input id='new-event-title' class='form-control' type='text' value='" + calEvent.title + "' /> "),
                    buttons: {
                        "delete": {
                            label: "<i class='icon-trash'></i> Delete Event",
                            className: "pull-left",
                            callback: function () {
                                return cal.fullCalendar("removeEvents", function (ev) {
                                    return ev._id === calEvent._id;
                                });
                            }
                        },
                        success: {
                            label: "<i class='icon-save'></i> Save",
                            className: "btn-success",
                            callback: function () {
                                calEvent.title = $("#new-event-title").val();
                                return cal.fullCalendar('updateEvent', calEvent);
                            }
                        }
                    }
                });
            },
            drop: function (date, allDay) {
                var copiedEventObject, eventClass, originalEventObject;
                originalEventObject = $(this).data("eventObject");
                originalEventObject.id = Math.floor(Math.random() * 99999);
                eventClass = $(this).attr('data-event-class');
                console.log(originalEventObject);
                copiedEventObject = $.extend({}, originalEventObject);
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if (eventClass) {
                    copiedEventObject["className"] = [eventClass];
                }
                $(".full-calendar-demo").fullCalendar("renderEvent", copiedEventObject, true);
                if ($("#calendar-remove-after-drop").is(":checked")) {
                    return $(this).remove();
                }
            },
            events: [
                {
                    id: "event1",
                    title: "All Day Event",
                    start: new Date(y, m, 1),
                    className: 'event-orange'
                }, {
                    id: "event2",
                    title: "Long Event",
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: "event-red"
                }, {
                    id: 999,
                    id: "event3",
                    title: "Repeating Event",
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                    className: "event-blue"
                }, {
                    id: 999,
                    id: "event3",
                    title: "Repeating Event",
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false,
                    className: "event-green"
                }, {
                    id: "event4",
                    title: "Meeting",
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: "event-orange"
                }, {
                    id: "event5",
                    title: "Lunch",
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    className: "event-red"
                }, {
                    id: "event6",
                    title: "Birthday Party",
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    className: "event-purple"
                }
            ]
        });

    }).call(this);
</script>
<script>
    $(".chat .new-message").live('submit', function (e) {
        var chat, date, li, message, months, reply, scrollable, sender, timeago;
        date = new Date();
        months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        chat = $(this).parents(".chat");
        message = $(this).find("#message_body").val();
        $(this).find("#message_body").val("");
        if (message.length !== 0) {
            li = chat.find("li.message").first().clone();
            li.find(".body").text(message);
            timeago = li.find(".timeago");
            timeago.removeClass("in");
            var month = (date.getMonth() + 1);
            var date_day = (date.getDate());
            timeago.attr("title", "" + (date.getFullYear()) + "-" + (month < 10 ? '0' : '') + month + "-" + (date_day < 10 ? '0' : '' ) + date_day + " " + (date.getHours()) + ":" + (date.getMinutes()) + ":" + (date.getSeconds()) + " +0200");
            timeago.text("" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
            setTimeAgo(timeago);
            sender = li.find(".name").text().trim();
            chat.find("ul").append(li);
            scrollable = li.parents(".scrollable");
            $(scrollable).slimScroll({
                scrollTo: scrollable.prop('scrollHeight') + "px"
            });
            li.effect("highlight", {}, 500);
            reply = scrollable.find("li").not(":contains('" + sender + "')").first().clone();
            setTimeout((function () {
                date = new Date();
                timeago = reply.find(".timeago");
                timeago.attr("title", "" + (date.getFullYear()) + "-" + (month < 10 ? '0' : '') + month + "-" + (date_day < 10 ? '0' : '' ) + date_day + " " + (date.getHours()) + ":" + (date.getMinutes()) + ":" + (date.getSeconds()) + " +0200");
                timeago.text("" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
                setTimeAgo(timeago);
                scrollable.find("ul").append(reply);
                $(scrollable).slimScroll({
                    scrollTo: scrollable.prop('scrollHeight') + "px"
                });
                return reply.effect("highlight", {}, 500);
            }), 1000);
        }
        return e.preventDefault();
    });
</script>
<script>
    $(".recent-activity .ok").live("click", function (e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function () {
            return $(this).remove();
        });
        return e.preventDefault();
    });
    $(".recent-activity .remove").live("click", function (e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function () {
            return $(this).remove();
        });
        return e.preventDefault();
    });
    $("#comments-more-activity").live("click", function (e) {
        $(this).button("loading");
        setTimeout((function () {
            var list;
            list = $("#comments-more-activity").parent().parent().find("ul");
            list.append(list.find("li:not(:first)").clone().effect("highlight", {}, 500));
            return $("#comments-more-activity").button("reset");
        }), 1000);
        e.preventDefault();
        return false;
    });
    $("#users-more-activity").live("click", function (e) {
        $(this).button("loading");
        setTimeout((function () {
            var list;
            list = $("#users-more-activity").parent().parent().find("ul");
            list.append(list.find("li:not(:first)").clone().effect("highlight", {}, 500));
            return $("#users-more-activity").button("reset");
        }), 1000);
        e.preventDefault();
        return false;
    });
</script>
<script>
    (function () {
        $("#daterange").daterangepicker({
            ranges: {
                Yesterday: [moment().subtract("days", 1), moment().subtract("days", 1)],
                "Last 30 Days": [moment().subtract("days", 29), moment()],
                "This Month": [moment().startOf("month"), moment().endOf("month")]
            },
            startDate: moment().subtract("days", 29),
            endDate: moment(),
            opens: "left",
            cancelClass: "btn-danger",
            buttonClasses: ['btn', 'btn-sm']
        }, function (start, end) {
            return $("#daterange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        });

    }).call(this);
</script>
</body>
</html>