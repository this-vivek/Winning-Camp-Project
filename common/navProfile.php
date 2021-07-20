<nav class="navbar  navbar-inverse fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a href="../index.php" class="navbar-brand"><img src="../images/quotes.svg" width="40px" height="40px"
                class="m-0 p-0" alt="logo"> <span class="lead">"Quotation"</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-group my-2 d-sm-block d-lg-none ml-0  my-lg-0">
            <input type="search" name="" value="" class="form-control mr-sm-2" placeholder="Add Friends"
                aria-label="Search">
        </form>
        <div class="collapse float-right navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto ml-sm-auto ">
                <li class="nav-item ">
                    <a href="../index.php" class="nav-link ml-lg-4">Home</a>
                </li>
                <li class="nav-item ">
                    <a href="addQuote.php" class="nav-link">Add Posts</a>
                </li>
                <li class="nav-item active">
                    <a href="profile.php" class="nav-link">Profile </a>
                </li>
                <li class="nav-item ">
                    <a href="../api/logout.php" class="nav-link">logout</a>
                </li>

                <li class="nav-item dropdown d-sm-block d-lg-none">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown">
                        Category</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="home.php" class="dropdown-item">All</a>
                        <a href="home.php?category=Inspirational" class="dropdown-item">Inspirational</a>
                        <a href="home.php?category=Sad" class="dropdown-item">Sad</a>
                        <a href="home.php?category=Joy" class="dropdown-item">Joy</a>
                </li>
            </ul>

        </div>

    </div>
</nav>