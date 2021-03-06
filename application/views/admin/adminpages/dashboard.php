<div id="main-content">
      <!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
      <div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Box Settings</h4>
          </div>
          <div class="modal-body">
            Here goes box setting content.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
          </div>
        </div>
        </div>
      <!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
      <div class="container">
        <div class="row">
          <div id="content" class="col-lg-12">
            <!-- PAGE HEADER-->
            <div class="row">
              <div class="col-sm-12">
                <div class="page-header">
                  <!-- STYLER -->
                  
                  <!-- /STYLER -->
                  <!-- BREADCRUMBS -->
                  <ul class="breadcrumb">
                    <li>
                      <i class="fa fa-home"></i>
                      <a href="index.html">Home</a>
                    </li>
                    <li>Dashboard</li>
                  </ul>
                  <!-- /BREADCRUMBS -->
                  <div class="clearfix">
                    <h3 class="content-title pull-left">Dashboard</h3>
                    
                  </div>
                  <div class="description">Overview, Statistics</div>
                </div>
              </div>
            </div>
            <!-- /PAGE HEADER -->
            <!-- DASHBOARD CONTENT -->
            <div class="row">
              <!-- COLUMN 1 -->
              <div class="col-md-11">
                <div class="row">
                  <div class="col-lg-3">
                   <div class="dashbox panel panel-default">
                    <div class="panel-body">
                       <div class="panel-left red">
                        <i class="fa fa-book"></i>
                       </div>
                       <div class="panel-right">
                        <div class="number">
                        <?php if(isset($count_legal_documents) && $count_legal_documents != null){ echo $count_legal_documents;}else{ echo 0;} ?>
                        </div>
                        <div class="title">Legal Documents</div>
                       
                       </div>
                    </div>
                   </div>
                  </div>
                  <div class="col-lg-3">
                   <div class="dashbox panel panel-default">
                    <div class="panel-body">
                       <div class="panel-left blue">
                        <i class="fa fa-users"></i>
                       </div>
                       <div class="panel-right">
                        <div class="number"><?php if(isset($clients) && $clients != null){ echo $clients; }else{ echo $clients; } ?>
                        </div>
                        <div class="title">Clients</div>
                       
                       </div>
                    </div>
                   </div>
                  </div>
                   <div class="col-lg-3">
                   <div class="dashbox panel panel-default">
                    <div class="panel-body">
                       <div class="panel-left blue">
                        <i class="fa fa-users"></i>
                       </div>
                       <div class="panel-right">
                        <div class="number">
                        <?php echo $this->db->get('attorneys')->num_rows();?>
                        </div>
                        <div class="title">Attorneys</div>
                        
                       </div>
                    </div>
                   </div>
                  </div>
                  <div class="col-lg-3">
                   <div class="dashbox panel panel-default">
                    <div class="panel-body">
                       <div class="panel-left blue">
                        <i class="fa fa-legal"></i>
                       </div>
                       <div class="panel-right">
                        <div class="number"><?php 
                        $all_matters = $this->db->get('matters');
                        $all_cases = $all_matters->num_rows();
                        echo $all_cases;
                       
                       ?>
                        </div>
                        <div class="title">Cases</div>
                       
                       </div>
                    </div>
                   </div>
                  </div>
                </div>


                <?php
                $all_matters = $this->db->get('matters');
                $all_cases = $all_matters->num_rows();
               



                $open = "Open";

                $open_query = $this->db->get_where('matters', array('matter_status' => $open));
                $open_cases = $open_query->num_rows();
                


                $closed = "Closed";

                $closed_query = $this->db->get_where('matters', array('matter_status' => $closed));
                $closed_cases = $closed_query->num_rows();
                


                $pending = "Pending";

                $query = $this->db->get_where('matters', array('matter_status' => $pending));
                $pending_cases = $query->num_rows();

                

                $open_percentage = (($open_cases/$all_cases) * 100);
                 

                $pending_percentage = (($pending_cases / $all_cases) * 100);

                $closed_percentage = (($closed_cases / $all_cases) * 100);
                

                ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="quick-pie panel panel-default">
                      <div class="panel-body">
                        <div class="col-md-4 text-center">
                          <div id="dash_pie_1" class="piechart" data-percent="<?=$open_percentage ?>">
                            <span class="percent"></span>
                          </div>
                          <a href="#" class="title">Open Cases <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-4 text-center">
                          <div id="dash_pie_2" class="piechart" data-percent="<?=$pending_percentage ?>">
                            <span class="percent"></span>
                          </div>
                          <a href="#" class="title">Pending Cases <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-4 text-center">
                          <div id="dash_pie_3" class="piechart" data-percent="<?=$closed_percentage?>">
                            <span class="percent"></span>
                          </div>
                          <a href="#" class="title">Closed cases <i class="fa fa-angle-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>
              <!-- /COLUMN 1 -->
              
              <!-- COLUMN 2 -->
              <div class="col-md-1">
                <div class="box solid grey">
                 
                  <div class="box-body">
                    <div id="chart-revenue" style="height:0.1px"></div>
                  </div>
                </div>
              </div>
              <!-- /COLUMN 2 -->
            </div>
             <!-- /DASHBOARD CONTENT -->



                          <!-- HERO GRAPH -->
            <div class="row">
              <div class="col-md-12">
                <!-- BOX -->
                              
                <!-- /BOX -->
              </div>
            </div>
            <!-- /HERO GRAPH -->




             <!-- HERO GRAPH -->
            <div class="row">
              <div class="col-md-12">
                <!-- BOX -->
                <div class="box border green">
                  <div class="box-title">
                    <h4><i class="fa fa-bars"></i> <span class="hidden-inline-mobile"><!-- Traffic & Sales --></span></h4>
                  </div>
                  <div class="box-body">
                    <div class="tabbable header-tabs">
                      <ul class="nav nav-tabs">
                         <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-search-plus"></i> <span class="hidden-inline-mobile"></span></a></li>
                         <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> <span class="hidden-inline-mobile"></span></a></li>
                       </ul>
                       <div class="tab-content">
                         <div class="tab-pane fade in active" id="box_tab1">
                          <!-- TAB 1 -->
                          <div id="chart-dash" class="chart"></div>
                          <hr class="margin-bottom-0">
                           <!-- /TAB 1 -->
                         </div>
                         <div class="tab-pane fade" id="box_tab2">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="demo-container">
                                <div id="placeholder" class="demo-placeholder"></div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="demo-container" style="height:100px;">
                                <div id="overview" class="demo-placeholder"></div>
                              </div>
                              <div class="well well-bottom">
                                
                              
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                  </div>
                </div>
                <!-- /BOX -->
              </div>
            </div>
            <!-- /HERO GRAPH -->
            
           
            </div>
            <!-- /CALENDAR & CHAT -->
            
          </div><!-- /CONTENT-->

          <!-- JQUERY -->
  <script src="<?= base_url()?>assets/js/jquery/jquery-2.0.3.min.js"></script>