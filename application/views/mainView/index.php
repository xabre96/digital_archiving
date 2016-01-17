
    <body>
        <?php include 'header.php'; ?>
            <br>
        <div class="container">

    
             <div class="box span12">
             <center>
                     <!-- <img src="<?php //echo base_url('images/main-logo.png'); ?>" id="ImgLogo" alt="image-log"> -->
               </center>
               <br>
                            <div class="box-header" data-original-title="">
<!--                                 <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2> -->
                                <div class="box-icon">
                                    <!-- <h2 style="margin-right: 35px;"><strong>Document List<i class="halflings-icon th-list"></i></strong></h2> -->
                                 </div>
                            </div>
                            <div class="box-content">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                <div class="row-fluid">
                                <div class="span6">
                                <div id="DataTables_Table_0_length" class="dataTables_length" >
                               
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
                                            <td style="font-size: 12px;" class="center " style="width: 250px;"><?php echo $val->subject; ?></td>
                                            <td style="font-size: 12px;" class="center " style="width: 250px;"><?php echo $val->sender; ?></td>
                                            <td style="font-size: 12px;" class="center " style="width: 130px;"><?php echo $val->keyword; ?></td>
                                            <td style="font-size: 12px;" class="center " style="width: 130px;"><?php echo $val->date; ?></td>
                                            </td>
                                            <td style="font-size: 12px;" class="center ">
                                                <center>
                                                 <!-- <a class="btn btn-info btn-small" href="<?php echo base_url('digitalController/viewDocument/'.$val->category_id.'/'.$val->document_id);?>"> -->
                                                 <a class="btn btn-info btn-small" href="<?php echo base_url('doc/viewDocument/'.$val->category_id.'/'.$val->document_id);?>">
                                                 <i class="halflings-icon folder-open white"></i>  
                                                    Open
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
            <br>

<!-- Modal -->
            <div class="modal hide fade" id="myModal" aria-hidden="true" style="display: none;">
                        <div class="modal-header" style="background-color: green;">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <center>
                                <h1 style="color: white;">Login User Account</h1>
                            </center>
                        </div>

                <div class="modal-body">
                    <div class=" span5">
                            <form class="form-horizontal" action="<?php echo base_url('digitalController/loginUser');?>" method="POST">
                                <center>
                                    <div>
                                    <br>
                                         <?php echo form_error('username', '<p style="color:red;">', '</p>');?>
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="Enter your username" style="height: 40px; width: 300px; text-align: center;"/>
                                        <br><br>
                                         <?php echo form_error('password', '<p style="color:red;">', '</p>');?>
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter your password"style="height: 40px; width: 300px; text-align: center;"/>
                                        <br><br><br>
                                        <button type="submit" class="btn btn-primary btn-flat" style="height: 40px; width: 300px;">Submit</button>
                                        <br><br>
                                        <?php echo "<p style='color:red;'>".@$message."</p>"; ?>
                                    </div>
                                </center>
                        </form>
                </div>
                    </div>
            </div>
        <!-- End of Modal -->

            

        <footer class="footer bg-black" style="padding: 0px; color:#ffffff; border-top: 3px ridge #cfcfcf;">
            <p class="" style="padding: 2px; margin: 0px; text-align: center; background-color: black; font-size: 12px;">
                Digital Archiving<br>
                Copyright @ 2015 Department of Environment and Natural Resources
            </p>
        </footer>


        <?php include 'script.php'; ?>
        
    </body>
</html>