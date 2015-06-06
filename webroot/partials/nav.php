<nav id="mainbar" class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <!-- <img class="navbar-brand" src="assets/images/mini_logo2.png" alt="Logo de Tenji 1" id="logo1" /> -->
            <span class="navbar-brand"><label>Patrice Petit</label></span>     
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" >
                <li><a class="bar" href="#">Blog</a></li>
                <li><a class="bar" href="cv.php">CV</a></li>
                <li><a class="bar" href="#">Contact</a></li>
                <li class="dropdown"> 
                    <a class="bar" data-toggle="dropdown" href="#">Projets<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <hr class="separator">
                        <li class="dropdown-header">PHP</li>
                        <li><a href="#">LibraryOnline</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Java/J2EE</li>
                        <li><a href="#">LibraryOnline</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">NodeJS</li>
                        <li><a href="#">real time chat</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-right">
                <div class="row">
                    <form class="topbar-search col-md-6" id="topbar-search" method="get" action="/search">
                        <span>     
                        </span>
                        <a class="icon-search glyphicon glyphicon-search" href="/search" aria-hidden="true"></a>
                        <input id="q" name="q" placeholder="Rechercher" />
                
                    </form>
                    <a class="col-md-3 btn" id="btn-login" href="/MonSite/partials/signup.php">S&#39;inscrire</a>
                   <!--  <button type="submit" class="col-md-3 btn login-btn">S&#39;inscrire</button> -->
                    <a class="col-md-3 btn" id="btn-login" href="/login.php">Se connecter</a>
                </div>
                
            </div>
        </div>
    </div> <!-- container fluid -->
</nav> <!-- Navigation-->