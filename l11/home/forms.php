<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
<br>
<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
        <div class="bg-light border rounded-3">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="bg-light border rounded-3 p-3">
            <form name="guest-book" method="post" action="text-handler.php">

                <div class="mb-3">
                    <b>Your name:</b><br>
                    <input name="my-name" class="form-control" autocomplete="on">
                </div>
                <p>
                    <b>Your gender:</b><br><br>
                    <input type="radio" class="" name="gender" value="male"> Man
                    <input type="radio" class="" name="gender" value="female"> Wooman
                </p>
                <p>
                    <b>Your program language:</b><br><br>
                    <select name="language">
                        <option value="php">PHP</option>
                        <option value="c++">C++</option>
                        <option value="js">JS</option>
                        <option value="java">JAVA</option>
                        <option value="jquery">Jquery</option>
                    </select>
                </p>
                <p class="mb-3"><b>Your comments:</b><br><br>
                    <textarea name="text" class="form-control" autocomplete="on"></textarea>
                </p>
                <p>
                    <button type="submit" class="btn btn-danger">SEND</button>
                </p>
            </form>
        </div>
    </div>
</div>
<div class="mb-3">
    <?php //require __DIR__.'/text-handler.php';?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>
