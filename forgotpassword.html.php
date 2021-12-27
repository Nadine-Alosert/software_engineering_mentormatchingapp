<?php
$pageTitle="Forgotten password";
ob_start()
?>

    <div class="row">
                <h2 class="text-center">Forgotten password</h2>

                <form method="post" class="col-sm-6 offset-sm-3">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <button name="forgpass" type="submit" class="btn btn-primary">Confirm</button>
                <?php
    	        ForgotPassword();
                ?>
                </form>
                </div>
<br><br><br><br><br><br><br><br><br>




<?php
$content = ob_get_clean();

require "templates/layout.html.php";
?>
