
@extends('layouts.admin')

@section('adminContent')

      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount blue">6500$</span>
                    <br>
                    <span class="text-uppercase w-name">Total profit</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">45%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount green">2436</span>
                    <br>
                    <span class="text-uppercase w-name">New feedbacks</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-thumbs-o-up"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">67%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount red">492</span>
                    <br>
                    <span class="text-uppercase w-name">New orders</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-cart-plus"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">34%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount yellow">341</span>
                    <br>
                    <span class="text-uppercase w-name">New users</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-user"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">52%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>









      
     {{--  <div class="row">
        <div class="col-lg-6">
          <div class="content-box">
            <div class="green-bg big-box reg-chart">
              <div class="content-title i-block">
                <h4 class="zero-m">Registration history</h4>
                <div class="content-tools i-block pull-right">
                  <a class="repeat-btn">
                    <i class="fa fa-repeat"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Config option 1</a></li>
                    <li><a href="#">Config option 2</a></li>
                  </ul>
                  <a class="close-btn">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="big-box">
                <div id="reg-history"></div>
              </div>
              <span class="fa-stack fa-2x icon">
                    <i class="fa fa-circle fa-stack-2x yellow"></i>
                    <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                  </span>
            </div>

            <div class="biggest-box">
              <div class="row">
                <div class="col-md-6">
                  <span class="lead">Information is available every</span>
                  <div class="reg-info">
                    <div class="item pull-left text-center">
                      <span class="block text-center"><i class="fa fa-arrow-circle-o-up yellow"></i>50%</span>
                      <small class="block text-center">Go up</small>
                    </div>
                    <div class="item pull-left text-center">
                      <span class="block"><i class="fa fa-arrow-circle-o-down red"></i>20%</span>
                      <small class="block">Go down</small>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="easypiechart pull-right" data-percent="25"><span>25%</span></div>
                </div>
              </div>
            </div>

          </div>
        </div> --}}
        {{-- <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Line chart</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Option 1</a></li>
                  <li><a href="#">Option 2</a></li>
                </ul>
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <div id="line-chart-1" class="flot-chart"></div>
            </div>
          </div>
        </div> --}}
      </div>
     {{--  <div class="row">
        <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Site activity</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Config option 1</a></li>
                  <li><a href="#">Config option 2</a></li>
                </ul>
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
              <div class="line-chart-2-legend chart-legend"></div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <div id="line-chart-2" class="flot-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Line chart</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Config option 1</a></li>
                  <li><a href="#">Config option 2</a></li>
                </ul>
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <div id="line-chart-3" class="flot-chart"></div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="row">
        <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Bar Chart Example</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Config option 1</a></li>
                  <li><a href="#">Config option 2</a></li>
                </ul>
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
              <div class="chart-legend left">
                <div class="pull-left item">
                  <span id="new-visitor" class="text-lowercase block">New visitor</span><span class="position-title blue">12.349</span>
                </div>
                <span id="new-orders" class="text-lowercase block">New orders</span><span class="position-title red">+75%</span>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <div id="bar-chart" class="flot-chart"></div>
            </div>
          </div>
          <div class="content-box">
            <div id="weather"></div>
          </div>
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Teammates</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Config option 1</a></li>
                  <li><a href="#">Config option 2</a></li>
                </ul>
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
              <div class="chart-legend">
                <span class="round red-bg"></span><span class="count">31</span>
                <span class="round blue-bg"></span><span class="count">65</span>
                <span class="round yellow-bg"></span><span class="count">120</span>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <div class="member-info">
                <img src="img/team/admin.png" alt="admin" class="img-circle">
                <span class="member-name">Sash Ficus</span>
                <span class="member-role red pull-right">Admin</span>
              </div>
              <div class="member-info">
                <img src="img/team/member.png" alt="member" class="img-circle">
                <span class="member-name">Vivien Hulk</span>
                <span class="member-role blue pull-right">Member</span>
              </div>
              <div class="member-info">
                <img src="img/team/editor.png" alt="editor" class="img-circle">
                <span class="member-name">Sash Ficus</span>
                <span class="member-role yellow pull-right">Editor</span>
              </div>
            </div>
          </div>
        </div> --}}
      {{--   <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                  <span class="block">Pageviews</span>
                  <h1 class="text-uppercase zero-m">28,473,585</h1>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-box biggest-box green-bg">
                <div class="pull-left">
                  <span class="block">Visitors</span>
                  <h1 class="text-uppercase zero-m">19,594,958</h1>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="content-box biggest-box red-bg">
                <div class="pull-left">
                  <span class="block">Sales</span>
                  <h1 class="text-uppercase zero-m">$274,392,374</h1>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-box biggest-box yellow-bg">
                <div class="pull-left">
                  <span class="block">Visitors</span>
                  <h1 class="text-uppercase zero-m">19,594,958</h1>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="content-box">
            <div class="blue-bg big-box calendar text-center">
              <div class="content-title i-block">
                <h4 class="zero-m">Today</h4>
                <div class="content-tools i-block pull-right">
                  <a class="repeat-btn">
                    <i class="fa fa-repeat"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Config option 1</a></li>
                    <li><a href="#">Config option 2</a></li>
                  </ul>
                  <a class="close-btn">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="small-box">
                <div class="weekday"></div>
                <div class="date"></div>
                <div class="month-year"><span class="month"></span> / <span class="year"></span></div>
              </div>
            </div>

            <div class="big-box">
              <div id="calendar-widget"></div>
            </div>
          </div>
        </div>
      </div>

      <!--Footer-->
      <div class="footer">© 2015 Copyright</div>
    </div>

    <!--Welcome notification-->
    <div id="welcome"></div>

    <!--Members Sidebar-->
    <div id="members-sidebar" class="members-sidebar">
      <h4 class="pull-left zero-m">Members</h4>
      <span class="close-members-sidebar"><i class="fa fa-remove pull-right"></i></span>
      <div class="clearfix"></div>
      <ul class="nav">
        <li>
          <div class="messages">
            <div class="member-info">
              <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
              <span class="member-name">Sash Ficus</span>
              <p class="members-message zero-m">Sushi time)))</p>
            </div>
            <div class="member-info">
              <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
              <span class="member-name">Sash Ficus</span>
              <p class="members-message zero-m">Working hard</>
            </div>
          </div>
        </li>
        <li class="members-group">Work</li>
        <li><span class="status online"></span>Sash Ficus</li>
        <li><span class="status online"></span>Sash Ficus</li>
        <li><span class="status not-available"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li class="members-group">Partner</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
      </ul>
    </div>

  </div> --}}

{{--     <div class="login-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">

                  <h1 class="zero-m text-uppercase">Welcome</h1>

                </div>
                <div class="big-box text-left login-form">
                  <h4 class="text-center">Login</h4>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control material" id="login" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control material" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-block btn-info text-uppercase waves">Login</button>

                  </form>
                  <a href="#" class="green i-block">Forgot password?</a>
                  <p>Do not have an account?</p>
                  <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div> --}}

  @endsection