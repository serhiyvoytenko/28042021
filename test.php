
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Flexbox 0 — starting code</title>
    <style>
        html {
            font-family: sans-serif;
        }

        body {
            margin: 0;
        }

        header {
            background: purple;
            height: 100px;
        }

        h1 {
            text-align: center;
            color: white;
            line-height: 100px;
            margin: 0;
        }

        article {
            padding: 10px;
            margin: 10px;
            background: aqua;
        }

        section {
            display: flex;
            flex-direction: row-reverse;
        }

        /* Add your flexbox CSS below here */



    </style>
</head>
<body>
<header>
    <h1>Sample flexbox example</h1>
</header>

<section>
    <article>
        <h2>First article</h2>

        <p>Tacos actually microdosing, pour-over semiotics banjo chicharrones retro fanny pack portland everyday carry vinyl typewriter. Tacos PBR&B pork belly, everyday carry ennui pickled sriracha normcore hashtag polaroid single-origin coffee cold-pressed. PBR&B tattooed trust fund twee, leggings salvia iPhone photo booth health goth gastropub hammock.</p>
    </article>

    <article>
        <h2>Second article</h2>

        <p>Tacos actually microdosing, pour-over semiotics banjo chicharrones retro fanny pack portland everyday carry vinyl typewriter. Tacos PBR&B pork belly, everyday carry ennui pickled sriracha normcore hashtag polaroid single-origin coffee cold-pressed. PBR&B tattooed trust fund twee, leggings salvia iPhone photo booth health goth gastropub hammock.</p>
    </article>

    <article>
        <h2>Third article</h2>

        <p>Tacos actually microdosing, pour-over semiotics banjo chicharrones retro fanny pack portland everyday carry vinyl typewriter. Tacos PBR&B pork belly, everyday carry ennui pickled sriracha normcore hashtag polaroid single-origin coffee cold-pressed. PBR&B tattooed trust fund twee, leggings salvia iPhone photo booth health goth gastropub hammock.</p>

        <p>Cray food truck brunch, XOXO +1 keffiyeh pickled chambray waistcoat ennui. Organic small batch paleo 8-bit. Intelligentsia umami wayfarers pickled, asymmetrical kombucha letterpress kitsch leggings cold-pressed squid chartreuse put a bird on it. Listicle pickled man bun cornhole heirloom art party.</p>
    </article>
</section>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            1 из 3
        </div>
        <div class="col-md-auto">
            Содержимое адаптивной ширины
        </div>
        <div class="col col-lg-2">
            3 из 3
        </div>
    </div>
    <div class="row">
        <div class="col">
            1 из 3
        </div>
        <div class="col-md-auto">
            Содержимое адаптивной ширины
        </div>
        <div class="col col-lg-2">
            3 из 3
        </div>
    </div>
</div>
</body>
</html>