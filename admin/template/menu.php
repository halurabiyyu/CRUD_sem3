<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Kantor Halur</h5>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap2 active" aria-current="page" href="index.php">
                            <svg class="bi">
                                <use xlink:href="#house-fill"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap2" href="index.php?page=anggota">
                            <svg class="bi">
                                <use xlink:href="#people"/>
                            </svg>
                            Anggota
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap2" href="index.php?page=jabatan">
                            <svg class="bi">
                                <use xlink:href="#puzzle"/>
                            </svg>Jabatan
                        </a>
                    </li>
                </ul>

                <hr class="my-3">

                <ul class="nav flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center gap-2">
                            <svg class="bi">
                                <use xlink:href="#gear-wide-connected"/>
                            </svg>
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link d-flex align-items-center gap-2">
                            <svg class="bi">
                                <use xlink:href="#door-closed"/>
                            </svg>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>