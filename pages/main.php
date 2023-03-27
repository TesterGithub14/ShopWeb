<div id="main">
    <?php
    include("sidebar/sidebar.php");
    ?>
    
    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }
        else{
            $tam = '';
        }
        if($tam == 'danhmucsanpham'){
            include("main/danhmuc.php");
        }
        else if ($tam == 'giohang') {
            include("main/giohang.php");
        }
        else if ($tam == 'tintuc') {
            include("main/tintuc.php");
        }
        else if ($tam == 'lienhe') {
            include("main/lienhe.php");
        }
        else{
            include("main/index.php");
        }
        ?>
    </div>
</div>