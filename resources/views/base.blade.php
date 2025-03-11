<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENESIS ACADEMY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .title-border {
            position: relative;
            display: inline-block;
            /* Pour s'adapter à la largeur du texte */
            padding-bottom: 10px;
            /* Espace sous le texte */
        }

        .title-border::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 10px;
            /* Épaisseur de la bordure */
            background: linear-gradient(to top, green, white);
            border-radius: 5px;
            /* Coins arrondis */
        }
    </style>
</head>

<body>
    <header class="p-3 bg-success shadow-lg text-white">
        <nav class="navbar navbar-expand-lg fs-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="/images/bootstrap-logo.svg" width="36" /></a>
                <div class="collapse navbar-collapse" id="navbarExample">
                    <ul class="navbar-nav me-auto mb-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('students.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('students.create') }}">Add a student</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
                            <ul class="dropdown-menu mb-2">
                                <li><a class="dropdown-item" href="#">Reporting (En travaux)</a></li>
                                <li>
                                    <n class="dropdown-item" href="#">Analysis (En travaux)</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex align-items-start flex-column flex-lg-row fs-3">
                        <form class="me-2 mb-2 mb-lg-0">
                            <input type="text" class="form-control form-control-sm p-2" placeholder="Jordan" />
                        </form>
                        <a class="btn btn-dark" href="">Search by last name</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>