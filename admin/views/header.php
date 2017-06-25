<nav class="navbar navbar-inverse navbar-fixed-top clr">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="color: #fff;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #fff;" href="/"><?php echo $info["title"];?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right visible-xs">
                <li>
                    <a href="/" data-id="<?php echo 'all';?>">Все
                        <!--                        <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>-->
                        <span class="badge pull-right"><?php echo $totalCount;?></span>
                    </a>
                </li>
                <?php foreach ($categories as $category) {?>
                    <li>
                        <a href="?cat_id=<?php echo $category["id"];?>" data-id="<?php echo $category["id"];?>">
                            <?php echo $category["name"];?>
                            <!--                            <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>-->
                            <span class="badge pull-right"><?php echo $category["count"];?></span>
                        </a>
                    </li>
                <?php }?>
                <hr>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Добавить картинку<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal2">Контакты<span class="glyphicon glyphicon-envelope pull-right" aria-hidden="true"></span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>