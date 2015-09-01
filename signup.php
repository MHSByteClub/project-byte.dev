<?php require_once("./includes/nav.php"); ?>

    <div class="container">
        
        <div class="row">
            <div class="col-md-3">&nbsp;</div>
            
            <div class="col-md-6">
                <div class="card">
                <div class="card-content">
                    <div class="card-title">Sign Up</div>
                    <p>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="username" id="username" placeholder="Username" />
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <input type="password" name="password" id="password" placeholder="Password" />
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <input type="password" name="passwordagain" id="passwordagain" placeholder="Password Again" />
                                </div>
                            </div>
                            <input type="submit" name="subsign" id="subsign" value="Sign Up" />
                        </form>
                        <hr>
                        <a href="#">Forgot Password?</a> | <a href="#">Need an Account?</a>
                    </p>
                </div>
            </div> 
            
            </div>
            <div class="col-md-3">&nbsp;</div>
        </div>
        
    </div>

<?php require_once("./includes/footer.php"); ?>