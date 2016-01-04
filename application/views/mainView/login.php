
    <body>
        <?php include 'headerMain.php'; ?>
            <div class="row-fluid">
         
                <div class="login-box">
                    <!-- <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div> -->
                    <br/>
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" action="<?php echo base_url('digitalController/loginUser');?>" method="POST">
                        <fieldset>
                            
                            <!-- USERNAME -->
                            <?php echo form_error('username', '<p style="color:red;">', '</p>');?>
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="username" id="username" type="text" placeholder="Username">
                            </div>
                            <div class="clearfix"></div>
                            <!-- END OF USERNAME -->
                            
                            <!-- PASSWORD -->
                            <?php echo form_error('password', '<p style="color:red;">', '</p>');?>
                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="Password">
                            </div>
                            <!-- END OF PASSWORD -->

                            <div class="clearfix"></div>
                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    <hr> 
                            <?php echo "<p style='color:red;'>".@$message."</p>"; ?>
                </fieldset>
                </form>


               </div>
               </div>
        <footer class="footer bg-black" style="padding: 0px; color:#ffffff; border-top: 3px ridge #cfcfcf;">
            <p class="" style="padding: 2px; margin: 0px; text-align: center; background-color: black; font-size: 12px;">
                Digital Archiving<br>
                Copyright @ 2015 Department of Environment and Natural Resources
            </p>
        </footer>
        <?php include 'script.php'; ?>
    </body>
</html>