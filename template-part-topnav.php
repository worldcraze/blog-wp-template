
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
     <nav class="navbar navbar-default navbaroutbordure fontnavbar" role="navigation">
        <div class="container-fluid navbarsection">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <nav class="nav navbar-nav navbar-right">
                        <form method="get" class="form-inline spaceforsearch" role="form" action="<?php bloginfo('home'); ?>/">
                            <div class="form-group">
                                <input type="text" class="form-control searchbar" placeholder="Search" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-link noneborder-button"><span class="glyphicon glyphicon-search loupe"></span></button>
                            </div>
                        </form>        
                    </nav>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Features</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Hi-Tech</a></li>
                                <li class="divider"></li>
                                <li><a href="#">For Men</a></li>
                                <li class="divider"></li>
                                <li><a href="#">For Women</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Travels Tips</a></li>
                        <li><a href="#">Event</a></li>
                    </ul>
                    <nav class="nav navbar-nav navbar-right">
                        <form class="form-inline spaceforsearch" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Search on blog</label>
                                <input type="email" class="form-control  searchbar" id="exampleInputEmail2" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-search loupe"></span></button>
                            </div>
                        </form>         
                    </nav>
                </div> --><!-- /.navbar-collapse
            </div><!-- /.container-fluid -->
        </nav>
        
        
       
  </div>

<?php endif; ?>


