        <footer>
            <div class="container fc">
                <div class="row">
                    <div class="col-xs-6">
                        <h4>Information</h4><p class="f"><a href="contact.php">Contact Us</a></p>
                    </div>
                    <div class="col-xs-6">
                        <?php
                        if(!isset($_SESSION['id'])){?>
                        <h4>Business</h4>
                        <p class="f"><a href="biz_log.php">Login As Business</a></p>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </footer>

