<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($SESSION['uderId'])) {
                        echo '<p class="login-status">You are logged in!</p>';
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                    }
                ?>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>