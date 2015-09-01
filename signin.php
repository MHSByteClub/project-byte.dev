<?php require_once("./includes/nav.php"); ?>

    <div class="container">
        
        <div class="row">
            <div class="col-md-3">&nbsp;</div>
            
            <div class="col-md-6">
                <div class="card">
                <div class="card-content">
                    <div class="card-title">Sign In</div>
                    <p>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="username" id="username" placeholder="Username" />
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <input type="password" name="password" id="password" placeholder="Password" />
                                </div>
                            </div>
                            <input type="submit" name="subsign" id="subsign" value="Sign In" />
                        </form>
                    </p>
                </div>
            </div> 
            
            </div>
            <div class="col-md-3">&nbsp;</div>
        </div>
        
    </div>

<?php require_once("./includes/footer.php"); ?>