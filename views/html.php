<!DOCTYPE html>
<html>
<?php include 'head.php';?>

<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <?php include 'nav.php';?>
        <?php if (!in_array($hal, $atas)): ?>
        <?php include 'Pages/' . $data['path'] . ".php";?>
        <?php endif;?>
         <div class="container">
            <div class="row ">
                <div class="col-12 mt-2 text-md-center text-left">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Nova | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>

        <?php include 'js.php';?>
</body>

</html>