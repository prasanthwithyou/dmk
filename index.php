<?php include "header.php"; ?>
      
      <div class="am-content">
        <div class="main-content">
          <!--+general-chart("classes", "title", "height", "id", "counter value", "counter desc", tools enabled (use true or false))-->
          <div class="row">
            <div class="col-md-4">
              <div class="widget widget-pie">
                <div class="widget-head"><span class="title">Top Sales</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-1" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend"></div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-4"><span class="title">New Clients</span><span data-toggle="counter" data-end="180" class="number">0</span></div>
                  <div class="col-xs-4"><span class="title">Total Sales</span><span data-toggle="counter" data-end="500" data-prefix="$" class="number">$0</span></div>
                  <div class="col-xs-4"><span class="title">Refunds</span><span data-toggle="counter" data-end="90" class="number">0</span></div>
                </div>
              </div>	
            </div>
            <div class="col-md-4">
              <div class="widget widget-pie">
                <div class="widget-head"><span class="title">Monthly Visits</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-2" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend"></div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-4"><span class="title">New Visitors</span><span data-toggle="counter" data-end="25" data-suffix="%" class="number">0%</span></div>
                  <div class="col-xs-4"><span class="title">Conversions</span><span data-toggle="counter" data-end="350" class="number">0</span></div>
                  <div class="col-xs-4"><span class="title">Bounce Rate</span><span data-toggle="counter" data-end="40" data-suffix="%" class="number">0%</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget widget-pie widget-pie-stats">
                <div class="widget-head"><span class="title">Advertisement</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-3" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend">
                      <table>
                        <tbody>
                          <tr>
                            <td class="legendColorBox">
                              <div>
                                <div style="width:10px;height:10px;overflow:hidden" class="clr-alt3"></div>
                              </div>
                            </td>
                            <td class="legendLabel">Google Ads</td>
                            <td class="legendData">$752</td>
                          </tr>
                          <tr>
                            <td class="legendColorBox">
                              <div>
                                <div style="width:10px;height:10px;overflow:hidden" class="clr-alt4"></div>
                              </div>
                            </td>
                            <td class="legendLabel">Facebook</td>
                            <td class="legendData">$300</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-6">
                    <div id="spk1" class="sparkline"></div><span class="title">Profit</span><span data-toggle="counter" data-end="70" data-suffix="%" class="number">0%</span>
                  </div>
                  <div class="col-xs-6">
                    <div id="spk2" class="sparkline"></div><span class="title">Return</span><span data-toggle="counter" data-end="30" data-suffix="%" class="number">0%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                                    <div class="widget widget-fullwidth widget-small">
                                      <div class="widget-head">
                                        <div class="tools"><span class="value">25.3K</span></div><span class="title">Current Earnings</span>
                                      </div>
                                      <div class="chart-container">
                                        <div id="linechart-mini1" style="height: 92px;"></div>
                                      </div>
                                    </div>
                                    <div class="widget widget-fullwidth widget-small">
                                      <div class="widget-head">
                                        <div class="tools"><span class="value">18%</span></div><span class="title">Support Tickets</span>
                                      </div>
                                      <div class="chart-container">
                                        <div id="barchart-mini1" style="height: 92px;"></div>
                                      </div>
                                    </div>
                </div>
                <div class="col-md-6">
                  <div class="widget widget-radar">
                    <div class="widget-head">
                      <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span></div><span class="title">Page Views</span>
                    </div>
                    <div class="chart-container">
                      <canvas id="radar-chart1" height="180px"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                        <div class="widget widget-fullwidth line-chart">
                          <div class="widget-head">
                            <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Filled Points</span>
                          </div>
                          <div class="chart-container">
                            <div class="counter">
                              <div class="value">80%</div>
                              <div class="desc">More Visits</div>
                            </div>
                            <div id="line-chart1" style="height: 260px;"></div>
                          </div>
                        </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="widget widget-calendar">
                <div class="cal-container">
                  <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes<span class="icon s7-plus"></span></span>
                    <ul>
                      <li><span class="hour">14h</span><span class="event-name">Meeting with investors</span></li>
                      <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                    </ul>
                  </div>
                  <div class="cal-calendar">
                    <div class="ui-datepicker"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget widget-map">
                <div class="widget-head"><span class="title">Global Stats</span></div>
                <div class="map-container">
                  <div id="world-map" style="height: 227px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-map.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-68396117-1', 'auto');
      ga('send', 'pageview');
      
      
    </script>
    
  </body>

<!-- Mirrored from foxythemes.net/preview/products/amaretti-v1.1.7/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2016 21:13:14 GMT -->
</html>
