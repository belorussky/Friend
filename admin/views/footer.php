<nav class="navbar navbar-inverse marginBottom0PX clr <?php  if (count($items) < 2) {echo 'navbar-fixed-bottom';}?>">
    <div class="container paddingTopBottom40px">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" style="color: #fff;" href="/"><?php echo $info["title"];?></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">&copy 2016-<?php echo date("Y")," ",$info["email"];?></a></li>
        </ul>
    </div><!-- /.container-fluid -->
</nav>