
    <body>
        <?php include 'header.php'; ?>
            <br>
        <div class="container">

                <center>
                     <img src="<?php echo base_url('images/logo.png'); ?>" id="ImgLogo" alt="image-log">
               </center>
             <br>
             <div class="box span12">
                            <div class="box-header" data-original-title="">
<!--                                 <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2> -->
                                <div class="box-icon">
<!--                                     <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a> -->
                                </div>
                            </div>
                            <div class="box-content">
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
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 120px;">I.D.</th>
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 250px;">Subject</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;">Sender</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;">Keyword</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;">Date</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Actions</th>
                                        </tr>
                                    </thead>   
                                    
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <?php foreach ($document as $key => $val) { ?>
                                <tr class="odd">
                                            <td class=" sorting_1" style="width: 120px;"><?php echo $val->document_id; ?></td>
                                            <td class="center " style="width: 250px;"><?php echo $val->subject; ?></td>
                                            <td class="center " style="width: 250px;"><?php echo $val->sender; ?></td>
                                            <td class="center " style="width: 130px;"><?php echo $val->keyword; ?></td>
                                            <td class="center " style="width: 130px;"><?php echo $val->date; ?></td>
                                            </td>
                                            <td class="center ">
                                                 <a class="btn btn-info" href="<?php echo base_url('digitalController/viewDocument/'.$val->category_id.'/'.$val->document_id);?>">
                                                 <i class="halflings-icon folder-open white"></i>  
                                                    View Document
                                                </a>
                                            </td>
                                 </tr>
                                <?php } ?>

                                </tbody>
                                </table>           
                            </div>
                        </div>
            </div>
            
        </div>
            <br>

        <footer class="footer bg-black" style="padding: 0px; color:#ffffff; border-top: 3px ridge #cfcfcf;">
            <p class="" style="padding: 2px; margin: 0px; text-align: center; background-color: black; font-size: 12px;">
                Digital Archiving<br>
                Copyright @ 2015 Department of Environment and Natural Resources
            </p>
        </footer>


        <?php include 'script.php'; ?>
        
    </body>
</html>