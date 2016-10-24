<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/js/datatables/media/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/js/datatables/media/assets/css/datatables.min.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/js/datatables/extras/TableTools/media/css/TableTools.min.css" />
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<div id="main-content">
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
                                <li>
                                    <a href="#">Legal Documents</a>
                                </li>
                                <li>
                                    <?=$page_title?>
                                </li>
                            </ul>
                            <!-- /BREADCRUMBS -->
                            <div class="clearfix">
                                <h3 class="content-title pull-left"><?=$page_title?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /PAGE HEADER -->
                <!-- DATA TABLES -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BOX -->
                        <div class="box border blue">
                            <div class="box-title">
                                <h4><i class="fa fa-file"></i><?=$page_title." - ".$name?></h4>
                                <div class="tools hidden-xs">
                                    <a href="#box-config" data-toggle="modal" class="config">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="javascript:;" class="reload">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a href="javascript:;" class="collapse">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a href="javascript:;" class="remove">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="gradeX">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th class="hidden-xs">Description</th>
                                                <th>View Document</th>
                                                <th>Update Document</th>
                                                <th class="hidden-xs">Delete</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter= 1;

                           foreach ($documents as $document){
                           
                            
                           	 	 echo "<tr class='gradeX'>";
                           	 	 echo "<td> 
                           	      ".$counter."
	                       	      </td>
	                       	      <td>
                           	       ".$document['legal_document_name']."
                           	       </td>
	                       	      <td>
                           	       ".substr($document['legal_document_description'], 0,500).".............."."

                           	       </td>
                         	      
                           	       <td>
                           	       <a href='". base_url()."assets/Documents/LegalDocuments/".$document['document_full_path']."' target='_blank' class='btn btn-info fa fa-eye'>View</a>
                           	       </td>
                           	       <td>
	                           	       <a href='".base_url()."index.php/admin/edit_legal_document/".$document['legal_document_id']."' class='btn btn-success fa fa-edit'>Edit</a>
                           	       </td>

                           	       <td>
	                           	       <a href='".base_url()."index.php/admin/delete_legal_document/".$document['legal_document_id']."' class='btn btn-danger fa fa-trash-o'>Delete</a>
                           	       </td>
                           	       </tr>";
                                   $counter++;

                             
                           }

                          ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th class="hidden-xs">Description</th>
                                            <th>View Document</th>
                                            <th>Update Document</th>
                                            <th class="hidden-xs">Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /BOX -->
                    </div>
                </div>
                <div class="separator"></div>
            </div>
            <!-- /CONTENT-->
        </div>
    </div>
</div>
<!-- /CONTENT-->
<script src="<?= base_url()?>assets/js/jquery/jquery-2.0.3.min.js"></script>
<!-- DATA TABLES -->
<script type="text/javascript" src="<?= base_url()?>assets/js/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/datatables/media/assets/js/datatables.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
<script>
jQuery(document).ready(function() {
    App.setPage("dynamic_table"); //Set current page
    App.init(); //Initialise plugins and elements
});
</script>
<!-- /JAVASCRIPTS -->
