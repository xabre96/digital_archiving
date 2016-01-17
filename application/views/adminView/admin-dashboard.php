
    <body>
        <?php include 'header.php'; ?>
            <br>
        <div class="container">

             <br>
             <?php echo $this->session->flashdata('message'); ?>
             <div class="box span12">
                            <div class="box-header" data-original-title="">
                            </div>
                            <div class="box-content">
                                <a href="#" class="btn btn-info btn-setting btn-small"><i class="halflings-icon edit white"></i>Add Document</a>
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                <div class="row-fluid">
                                <div class="span6">
                                <div id="DataTables_Table_0_length" class="dataTables_length">
                               
                                </div>
                                </div>
                                <div class="span6">
                                <div class="dataTables_filter" id="DataTables_Table_0_filter">
                                
                                </div>
                                </div>
                                </div>

                                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                        <th style="font-size: 14px;" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 250px;">Subject</th>
                                        <th style="font-size: 14px;" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;">Sender</th>
                                        <th style="font-size: 14px;" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;">Keyword</th>
                                        <th style="font-size: 14px;" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;">Date</th>
                                        <th style="font-size: 14px;" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Actions</th>
                                        </tr>
                                    </thead>   
                                    
                                <tbody role="alert" aria-live="polite" aria-relevant="all">

                              <?php foreach ($document as $key => $val) { ?>
                              
                                <tr class="odd">
                                            <td style="font-size: 12px;" class="center " ><?php echo $val->subject; ?></td>
                                            <td style="font-size: 12px;" class="center " ><?php echo $val->sender; ?></td>
                                            <td style="font-size: 12px;" class="center " ><?php echo $val->keyword; ?></td>
                                            <td style="font-size: 12px;" class="center " ><?php echo $val->date; ?></td>
                                            </td>
                                            
                                            <td style="font-size: 12px;" class="center ">
                                            <center>
                                                 <a class="btn btn-info btn-small white" href="<?php echo base_url('doc/viewDocument/'.$val->category_id.'/'.$val->document_id);?>">
                                                 <i class="halflings-icon folder-open white"></i>  
                                                    Open
                                                </a>
                                                 <a class="btn btn-danger btn-small" data-toggle="modal" data-target="#delete<?php echo $val->document_id ;?>" >
                                                    <i class="halflings-icon white trash"></i> 
                                                    Delete
                                                </a>
                                                </center>
                                            </td>
                                 </tr>
                                <?php } ?>
                                        </tbody>
                                    </table>           
                            </div>
                        </div>
            </div>
            
        </div>

        <!-- Modal -->
            <div class="modal hide fade" id="myModal" aria-hidden="true" style="display: none;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h3><i class="halflings-icon plus"></i>Add Documents</h3>
                        </div>

                <div class="modal-body">
                    <div class=" span5">
                            <br>
                            <form class="form-horizontal" action="<?php echo base_url('digitalController/uploadDocument'); ?>" method="POST" enctype="multipart/form-data">
                              <fieldset>
                                <div class="control-group">
                                 <?php echo form_error('subject', '<p style="color:red;">', '</p>');?>
                                  <label class="control-label" for="subject"> Subject</label>
                                  <div class="controls">
                                    
                                    <textarea name="subject" id="" cols="30" rows="5"></textarea>
                                  </div>
                                </div>
                                <div class="control-group">
                                 <?php echo form_error('sender', '<p style="color:red;">', '</p>');?>
                                  <label class="control-label" for="sender"> Sender</label>
                                  <div class="controls">
                                    <input type="text" name="sender" placeholder="Ex. Sender Name">
                                  </div>
                                </div>
                                <div class="control-group">
                                 <?php echo form_error('keyword', '<p style="color:red;">', '</p>');?>
                                  <label class="control-label" for="keyword">Keywords</label>
                                  <div class="controls">
                                    <!-- <input type="text" name="keyword" placeholder="Ex. Keyword"> -->
                                    <textarea name="keyword" style="width:205px;height:100px;"> </textarea>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label" for="cat">Category</label>
                                  <div class="controls">
                                    <select name="category">
                                    <?php 
                                        foreach ($category as $key => $value) {
                                     ?>
                                     <option value="<?php echo $value->category_id; ?>"><?php echo $value->category; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label" for="date01">Document Date</label>
                                  <div class="controls">
                                    <input type="date" id="date01" name="date">
                                  </div>
                                </div>

                                <div class="control-group">
                                  <?php echo "<p style='color: red'>".@$err_file."</p>"; ?>
                                  <label class="control-label" for="fileInput">File</label>
                                  <div class="controls">
                                    <div class="uploader" id="uniform-fileInput">
                                        <input class="input-file uniform_on" id="fileInput" name="fileUpload[]" type="file" multiple="multiple">
                                        <span class="filename" style="-webkit-user-select: none;">No file selected</span>
                                        <span class="action" style="-webkit-user-select: none;">Choose File</span>
                                    </div>
                                  </div>
                                </div> 
                          </fieldset>
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        <input type="submit" value="Save Document" class="btn btn-primary">
                    </div>
                    </form> 
            </div>
        <!-- End of Modal -->


        <!-- Modal -->
        <?php foreach ($document as $key => $val) {
        	if($val->document_id == 0){
        	} ?>

            <div class="modal fade" id="delete<?php echo $val->document_id;?>" aria-hidden="true" style="display: none;">
                        <div class="modal-header" style="background-color: red;">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h2 style="color: white; font-size: 27px;">!Warning</h2>
                        </div>

                <div class="modal-body">
                    <div class=" span5">
                              <center>
                             	 <h3>Do you want to delete this document?</h3>
                        	  </center>
                	</div>
               
                    </div>
                    <div class="modal-footer">
                    
                        <a href="<?php echo base_url('digitalController/deleteDocument/'.$val->category_id.'/'.$val->document_id);?>" value="Yes" class="btn btn-primary btn-flat pull-left" style="width: 70px;">Yes</a>
                        <a href="#" class="btn btn-default btn-flat pull-right" data-dismiss="modal" style="width: 45px;">No</a>
                     
                    </div>
            </div>
           <?php } ?>
        <!-- End of Modal -->

               <br>

        <footer class="footer bg-black" style="padding: 0px; color:#ffffff; border-top: 3px ridge #cfcfcf;">
            <p class="" style="padding: 2px; margin: 0px; text-align: center; background-color: black; font-size: 12px;">
                Digital Archiving<br>
                Copyright @ 2015 Department of Environment and Natural Resources
            </p>
        </footer>


        <?php include 'script.php'; ?>
        <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 278px; left: 414.547px; z-index: 51; display: none;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2012</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">15</a></td><td class="  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default ui-state-active" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2012"><a class="ui-state-default" href="#">29</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div>

    </body>
</html>