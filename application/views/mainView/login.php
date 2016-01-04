
    <body>
        <?php include 'headerMain.php'; ?>
            <div class="row-fluid">
         
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" action="#" method="post">
                        <fieldset>
                            
                            <!-- USERNAME -->
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="username" id="username" type="text" placeholder="type username">
                            </div>
                            <div class="clearfix"></div>
                            <!-- END OF USERNAME -->
                            
                            <!-- PASSWORD -->
                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="type password">
                            </div>
                            <!-- END OF PASSWORD -->

                            <div class="clearfix"></div>
                            
                            <label class="remember" for="remember"><div id="uniform-remember"><span><input type="checkbox" id="remember"></span></div>Remember me</label>

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    
                    <hr>
                    <h3>Forgot Password?</h3>
                    <p>
                        No problem, <a href="#">click here</a> to get a new password.
                    </p>    
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