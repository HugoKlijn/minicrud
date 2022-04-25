<?php
include_once "includes/connect.php";
?>


<header class="p-3 bg-white text-black">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <h2>すし</h2>
                <li><a href="index.php" class="nav-link px-2 text-black">Home</a></li>
                <li><a href="menu.php" class="nav-link px-2 text-black">Menu</a></li>
            </ul>


            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="menu.php">
                <input type="search" class="form-control form-control-dark" placeholder="Zoeken.." aria-label="Search">
            </form>


            <div class="text-end">
                <?php
                if(isset($_SESSION['username'])){
                    echo "<a href='logout.php' class='btn btn-outline-primary'>Logout</a>";
                    echo "<a href='admin.php' class='btn btn-outline-primary'>admin pagina</a>";

                } 
                
                else {
                    echo "<a href='login.php' class='btn btn-outline-primary'>login </a>";
                    
                    echo "<a href='signup.php' class='btn btn-outline-primary'>registreren</a>";
                    
                }
                ?>


            </div>
        </div>
    </div>
</header>