<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="./index.php"><img src="./site/inc/img/logo.png" alt="Example Navbar 1" class="mr-2" height="30"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
            <ul class="navbar-nav ml-auto">
                <?php
                foreach ($ar_page as $key => $tb_page){
                    if ($tb_page['KeyFile'] == $ar_page) {
                        $active ='active';
                    }
                    else {$active ='';}
                    if($tb_page['Navbar'] == 1){
                        echo '<li class="nav-item">
                                <a  class="nav-link'.$active.'" href="page-'.$tb_page['KeyFile'].'">'.$tb_page['Menu'].'</a>
                            </li>';
                    }
                }
                ?>
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="../documentation/getting_started.html" target="_blank">
                        Connexion
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
