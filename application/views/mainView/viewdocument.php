
    <body>
        <?php include 'headerViewDocument.php'; ?>
            <br>
                <div class="container">
                    <div class="span12" style="background: gray; box-shadow: 10px 10px 5px #888888;">
                            <center>
                                <h2 style="color: white;">Document Details</h2>
                                <?php 
                                if(!$fileName){
                                ?>
                                <!-- <img src="<?php echo base_url('images/example_img.png'); ?>" alt="Default"> -->
                               <?php
                                redirect('digitalController/adminDashboard');
                                }else{
                                foreach ($fileName as $key => $value) {
                                ?>
                                 <img src="<?php echo base_url('documents/'.$category_id.'/'.$document_id.'/'.$value->filename); ?>" alt="<?php echo $value->filename;?>"/>
                                <?php 
                                    } 
                                }
                                ?>
                            </center>
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