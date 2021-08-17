<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="zzz">
    <p>This class zzz</p>
</div>
<h1>This is h1</h1>
<h3 class="zzz">Hi</h3>
<h4>This is H4</h4>
<?php

var_dump(class_exists('ZMQContext'));
?>

<script src="/web/public/autobahn.js"></script>
<script>
    var conn = new ab.Session(
        'ws://ws.skillup.local:3000/chat',
        function () {
            conn.subscribe('kittensCategory', function (topic, data) {
                // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                console.log('New article published to category "' + topic + '" : ' + data.title);
            });
        },
        function () {
            console.warn('WebSocket connection closed');
        },
        {
            'skipSubprotocolCheck': true
        }
    );
</script>

</body>
</html>