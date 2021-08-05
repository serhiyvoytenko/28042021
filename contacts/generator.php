<?php

require_once __DIR__ . '/configs/main.php';
require_once __DIR__ . '/helpers/strings.php';
require_once __DIR__ . '/components/db.php';

require_once __DIR__ . '/models/UsersModel.php';
generateRandomUsers(1000);
//generateRandomContacts(174,500);