<?php
include "include/header.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">EmpW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
            </ul>

            <!-- Add dropdown with logout button to the right -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img width="30" height="30" style="filter:invert(0.8);"src="https://img.icons8.com/ios-filled/50/000000/gender-neutral-user.png" alt="gender-neutral-user"/>
                    <span class='text-center'><?php echo getuserData($conn,$userid,'firstname')." ".getuserData($conn,$userid,'lastname')?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <p class="dropdown-item"><?php echo getuserData($conn,$userid,'firstname')." ".getuserData($conn,$userid,'lastname')?></p>
                      <hr>
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
