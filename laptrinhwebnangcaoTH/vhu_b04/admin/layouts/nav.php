<a class="navbar-brand" href="../index.html">Concept</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navbar-right-top">
        <li class="nav-item">
            <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Tim kiem..">
            </div>
        </li>


        <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if(!isset($_SESSION)){
                    session_start();
                }
                if (isset($_SESSION["is_login"])) {
                    echo $_SESSION["username"];
                   
                }else{
                    header("Location: ../view/login.php");
                }
                ?>
            </a>
           
        </li>
        
        <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="../controller/usercontroller.php?action=logout" >
                <?php
                if(!isset($_SESSION)){
                session_start();
                }
                if (isset($_SESSION["is_login"])) {
                    echo 'Logout';
                }else{
                    header("Location: ../view/login.php");
                }
                ?>
            </a>
           
        </li>
    </ul>
</div>