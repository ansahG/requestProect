 <!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />

  <title>{{ auth()->user()->name }}</title>


  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/metisMenu/dist/metisMenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/Waves/dist/waves.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}"> 

  <link rel="stylesheet" href="a{{ asset('adminAssets/js/selects/cs-select.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/js/selects/cs-skin-elastic.css') }}">

  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/c3/c3.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminAssets/bower_components/zabuto_calendar/zabuto_calendar.min.css') }}">
    <script src="{{ asset('adminAssets/js/menu/modernizr.custom.js') }}"></script>
 
  <link rel="stylesheet" href="{{asset('adminAssets/css/style.css') }}">
 
  <link rel="icon" href="{{ asset('adminAssets/img/favicon.ico') }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ asset('adminAssets/img/favicon.ico') }}" type="image/x-icon" />
  <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
      <script src="bower_components/respondJs/dest/respond.min.js"></script>
    <![endif]-->

      @livewireStyles
</head>

<body>
  <!--Preloader-->
  <div id="preloader" class="preloader table-wrapper">
    <div class="table-row">
      <div class="table-cell">
        <div class="la-ball-scale-multiple la-3x">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>

  <div id="main-wrapper" class="main-wrapper">

    <ul id="gn-menu" class="gn-menu-main">
      <li class="gn-trigger">
        <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="cross">
            <span></span>
            <span></span>
          </div>
        </a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller">
            <ul class="gn-menu metismenu">
              <li class="gn-search-item">
                <input placeholder="Search" type="search" class="gn-search">
                <a class="search-icon"><i class="fa fa-search"></i><span>Search</span></a>
              </li>
              {{-- <li class="active">
                <a href="index.html" aria-expanded="true"><i class="fa fa-th"></i>Dashboards<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="true">
                  <li><a class="active" href="index.html">Dashboard v1</a></li>
                  <li><a href="dashboard_2.html">Dashboard v2</a></li>
                  <li><a href="dashboard_3.html">Dashboard v3</a></li>
                </ul>
              </li> --}}


              <li>
                <a href="calendar.html"><i class="fa fa-calendar-o"></i>Calendar<span class="label label-warning pull-right">9</span></a>
              </li>

              <li>
                <a href="mailbox.html" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>Bookings
                  <span class="fa arrow"></span>
                </a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="mailbox.html">Mailbox</a></li>
                  <li><a href="email-inbox.html">Inbox</a></li>
                  <li><a href="email-compose.html">Email Compose</a></li>
                  <li><a href="email-view.html">Email View</a></li>
                </ul>
              </li>
              <li>
                <a href="{{ route('manageWebsite') }}">
                  <i class="fa fa-th-list"></i>Manage Websites
                </a>
              </li>
              <li>
                <a href="{{ route('addProject') }}">
                  <i class="fa fa-font"></i>Project
                </a>
              </li>
              <li>
                <a href="grids.html">
                  <i class="fa fa-desktop"></i>Grid System
                </a>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-table"></i>Tables<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="tables.html">Tables</a></li>
                  <li><a href="datatables.html">Data Tables</a></li>
                </ul>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-briefcase"></i>UI Kits<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="colors.html">Colors</a></li>
                  <li><a href="animations.html">Animations</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="form-elements.html">Forms</a></li>
                  <li><a href="sliders.html">Sliders</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li><a href="nav-buttons.html">Nav buttons</a></li>
                  <li><a href="notifications.html">Notifications</a></li>
                  <li><a href="panels.html">Panels</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="components.html">Other components</a></li>
                </ul>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-edit"></i>Charts<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="flotjs.html">Flot.js</a></li>
                  <li><a href="chartjs.html">Chart.js</a></li>
                  <li><a href="morrisjs.html">Morris.js</a></li>
                </ul>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-file"></i>Other pages<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="todo_list.html">Todo list</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li><a href="chat.html">Chat</a></li>
                  <li><a href="projects.html">Projects</a></li>
                  <li><a href="wizard.html">Wizard</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="registration.html">Registration</a></li>
                  <li><a href="404.html">404</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /gn-scroller -->
          <div class="bottom-bnts">
            <a class="profile" href="#"><i class="mdi mdi-account"></i></a>
            <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
            <a class="logout" href="#"><i class="mdi mdi-power"></i></a>
          </div>
        </nav>
      </li>
      <li>
        <a href="index.html" class="logo">ADVANTAGE<i class="fa fa-toggle-on"></i></a>
      </li>
      <li class="top-clock">
        <span class="current-time"></span>
      </li>
      <li class="pull-right">
        <ul class="nav navbar-right right-menu">
          <li class="members-btn">
            <a class="show-members">
              <i class="fa fa-group"></i>
            </a>
          </li>
          <li class="lang">
            <select class="cs-select cs-skin-elastic">
              <option value="english" data-class="flag-england cs-selected" selected>English</option>
              <option value="german" data-class="flag-germany">German</option>
              <option value="french" data-class="flag-france">French</option>
            </select>
          </li>
          <li class="dropdown notifications">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="label label-warning">4</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <h4 class="zero-m text-center">Notifications</h4>
              </li>
              <li>
                <div class="messages">
                  <div class="member-info">
                    <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Sash Ficus</span>
                    <p class="members-message zero-m">Research is done!</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/member.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Vivien Hulk</span>
                    <p class="members-message zero-m">Working hard</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Sash Ficus</span>
                    <p class="members-message zero-m">Research is done!</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/member.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Vivien Hulk</span>
                    <p class="members-message zero-m">Working hard</p>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown some-btn">
            <a class="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!--Content-->
    <div id="content" class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Dashboards</li>
              <li class="active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>

        <div>
           @yield('adminContent')
        </div>

  <div class="logout-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="zero-m text-uppercase">Do you want to exit?</h3>
                  <a href="#" class="i-block" data-dismiss="modal">Yes</a>
                  <a href="#" class="i-block" data-dismiss="modal">No</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@livewireScripts

    <!--Scripts-->
  <script src="{{ asset('adminAssets/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/Waves/dist/waves.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/cta/dist/cta.min.js') }}"></script>
  
  <!--Menu-->
  <script src="{{ asset('adminAssets/js/menu/classie.js') }}"></script>
  <script src="{{ asset('adminAssets/js/menu/gnmenu.js') }}"></script>

  <!--Selects-->
  <script src="{{ asset('adminAssets/js/selects/selectFx.js') }}"></script>

  <!--Flot-->
  <script src="b{{ asset('adminAssets/ower_components/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
  <script src="{{ asset('adminAssets/js/flot/jquery.flot.orderBars.js') }}"></script>

  <!--Custom Flot Charts-->
  <script src="{{ asset('adminAssets/js/flot/line-chart-1.js') }}"></script>
  <script src="{{ asset('adminAssets/js/flot/line-chart-2.js') }}"></script>
  <script src="{{ asset('adminAssets/js/flot/line-chart-3.js') }}"></script>
  <script src="{{ asset('adminAssets/js/flot/bar-chart.js') }}"></script>

  <!--C3.js-->
  <script src="{{ asset('adminAssets/bower_components/d3/d3.min.js') }}"></script>
  <script src="{{ asset('adminAssets/bower_components/c3/c3.min.js') }}"></script>

  <!--EasyPieChart-->
  <script src="{{ asset('adminAssets/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

  <!--Zabuto Calendar-->
  <script src="{{ asset('adminAssets/bower_components/zabuto_calendar/zabuto_calendar.min.js')}}"></script>

  <!--Simple Weather-->
  <script src="{{ asset('adminAssets/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>

  <!--Notification-->
  <script src="{{ asset('adminAssets/js/notifications/notificationFx.js')}}"></script>

    <!--Custom Scripts-->
  <script src="{{ asset('adminAssets/js/common.js')}}"></script>

  <script>
    $(function () {

      // show the notification
      setTimeout(function () {
        // create the notification
        var notification = new NotificationFx({
          message: '<span>Welcome back, John!</span>',
          layout: 'attached',
          effect: 'bouncyflip',
          ttl: 4000,
          wrapper: document.getElementById("welcome"),
          type: 'notice', // notice, warning, success or error
        });
        notification.show();
      }, 1200);

      /*c3.js*/
      var chart = c3.generate({
        bindto: '#reg-history',
        size: {
          height: 90
        },
        data: {
          columns: [
            ['New users', 30, 35, 45, 33, 48, 54, 41, 66, 49, 43, 38, 46]
          ]
        },
        legend: {
          show: false
        },
        color: {
          pattern: ['#fff']
        },
        point: {
          r: 3
        },
        axis: {
          x: {
            show: false
          },
          y: {
            show: false
          }
        }
      });
      //EasyPieChart
      $('.easypiechart').easyPieChart({
        lineCap: 'square',
        trackColor: '#cccccc',
        barColor: '#42b382',
        lineWidth: 5,
        scaleLength: 0
      });

      //Zabuto Calendar
      $("#calendar-widget").zabuto_calendar({
        language: "en",
        cell_border: false,
        today: true,
        show_days: true,
        nav_icon: {
          prev: '<i class="fa fa-chevron-left"></i>',
          next: '<i class="fa fa-chevron-right"></i>'
        }
      });

      //Simple Weather
      /* Does your browser support geolocation? */
      if ("geolocation" in navigator) {
        $('#weather').show();
      } else {
        $('#weather').hide();
      }

      function geolocation() {
        navigator.geolocation.getCurrentPosition(positionFound, positionNotFound)
      }
      geolocation();

      function positionFound(position) {
        loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
      }

      function positionNotFound(error) {
        $("#weather").html('<div class="big-box yellow">Permission to check your location is denied. To allow it go to your browser settings.</div>'); //showing warning message about browsers permissions
      }


      function loadWeather(location, woeid) {
        $.simpleWeather({
          location: location,
          woeid: woeid,
          unit: 'c',
          success: function (weather) {
            //Weather widget markup
            html = '<div class="weather-container text-center"><h4 class="weather-city zero-m">Weather forecast in ' + weather.city + '</h4><div class="i-block big-box"><i class="block yellow icon-' + weather.forecast[0].code + '"></i>' + weather.forecast[0].day + ' / ' + weather.forecast[0].high + '&deg;C</div>';
            html += '<div class="i-block big-box"><i class="block blue icon-' + weather.forecast[1].code + '"></i>' + weather.forecast[1].day + ' / ' + weather.forecast[1].high + '&deg;C</div>';
            html += '<div class="i-block big-box"><i class="block red icon-' + weather.forecast[2].code + '"></i>' + weather.forecast[2].day + ' / ' + weather.forecast[2].high + '&deg;C</div></div>';


            $("#weather").html(html);
          },
          error: function (error) {
            $("#weather").html('<p>' + error + '</p>');
          }
        });
      }

      //Tooltips for Flot Charts
      if ($(".flot-chart")[0]) {
        $(".flot-chart").bind("plothover", function (event, pos, item) {
          if (item) {
          var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);

          $(".flot-tooltip").html(x + " of " + y)
            .css({top: item.pageY+5, left: item.pageX+5})
            .fadeIn(200);
        } else {
          $(".flot-tooltip").hide();
        }
        });

        $("<div class='flot-tooltip'></div>").appendTo("body");
      }
    });
  </script>


</body>

</html>
