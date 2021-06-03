<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Top navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main class="container">
    <div class="bg-light p-5 rounded">

        <form action="comment-processor.php" method="post">
            <div class="mb-3">
                <label id="username" for="username">Name</label>
                <input type="text" name="username" class="form-control" id="username">

            </div>
            <div class="mb-3">
                <label>Gender</label>
                <input type="radio" name="gender" value="male" id="gender-male">
                <label for="gender-male">Male</label>
                <input type="radio" name="gender" value="female" id="gender-female">
                <label for="gender-female">Female</label>
            </div>
            <div class="mb-3">
                <label>Program Language
                    <select name="programing_language">
                        <optgroup label="backend">
                            <option>PHP</option>
                            <option>Java</option>
                            <option>C++</option>
                        </optgroup>
                        <optgroup label="fronend">
                            <option>JS</option>
                            <option>HTML</option>
                            <option>CSS</option>
                        </optgroup>
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
            </div>
            <button class="btn btn-success">Send</button>
            <?php require __DIR__ . '/comments-list.php' ?>
        </form>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>