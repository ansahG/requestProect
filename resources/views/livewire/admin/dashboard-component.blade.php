
 <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
        
                    <span class="w-amount blue"> {{ $esttimatedIncome ?? 00.00 }}GHS</span>
                    <br>
                    <span class="text-uppercase w-name">Estimated income</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                   {{--  <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">45%</div> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount green">{{ $bookingsCount ?? 0 }}</span>
                    <br>
                    <span class="text-uppercase w-name"> Bookings </span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-book"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                  </div>
                 {{--  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">67%</div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount red">  {{ $projects->count() }}</span>
                    <br>
                    <span class="text-uppercase w-name"> Active Projects</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-hammer"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                  </div>
{{--                   <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">34%</div>
                  </div> --}}
                </div>
              </div>
            </div>
          {{--   <div class="col-sm-6 col-lg-3">
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
            </div> --}}
