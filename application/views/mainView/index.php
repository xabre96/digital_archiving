
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
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 120px;">#I.D</th>
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 250px;">Subject</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;">Sender</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;">Date</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Actions</th>
                                        </tr>
                                    </thead>   
                                    
                                <tbody role="alert" aria-live="polite" aria-relevant="all">

                                <tr class="odd">
                                            <td class=" sorting_1" style="width: 120px;">Dennis Ji</td>
                                            <td class="center " style="width: 250px;">Department of Environment and Natural Resources . 1021</td>
                                            <td class="center " style="width: 250px;">Shun Chuy Gwapo ang batang adib2x and pinaka gwapo</td>
                                            <td class="center " style="width: 130px;">2016/04/01</td>
                                            <td class="center ">
                                                 <a class="btn btn-info" href="<?php echo base_url('digitalController/viewDocument');?>">
                                                 <i class="halflings-icon folder-open white"></i>  
                                                    View Document
                                                </a>
                                                <a class="btn btn-success" href="#">
                                                    <i class="halflings-icon download-alt white"></i>
                                                    Download File
                                                </a>
                                            </td>
                                        </tr>

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