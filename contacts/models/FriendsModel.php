<?php

function addFriend(int $userId, int $friendId): bool
{
    $connect = getDbConnection();

    $sql = <<<SQL
        INSERT IGNORE INTO `friends` (`user_id`, `friend_id`)
        VALUES (?, ?)
    SQL;

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'ii', $userId, $friendId);
    return mysqli_stmt_execute($stmt);
}

function removeFriend(int $userId, int $friendId): bool
{
    $connect = getDbConnection();

    $sql = 'DELETE FROM `friends` WHERE (`user_id` = ? AND `friend_id` = ?)';
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'ii', $userId, $friendId);
    return mysqli_stmt_execute($stmt);
}

function getAvailableFriends(int $userId, int $page = 1, int $limit = 50): array
{
    $connect = getDbConnection();
    $sql = <<<SQL
        SELECT
               id, 
               name, 
               login, 
               birthday,
               create_at,
               (friends.user_id IS NOT NULL) AS is_my_friend
        FROM users
        LEFT JOIN friends ON (friends.friend_id = users.id AND friends.user_id = ?)
        ORDER BY name, login
        LIMIT ?
        OFFSET ?
    SQL;

    $offset = ($page - 1) * $limit;

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'iii', $userId, $limit, $offset);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMyFriends(int $userId, int $page = 1, int $limit = 50): array
{
    $connect = getDbConnection();
//    $sql = <<<SQL
//        SELECT
//               users.id,
//               name,
//               login,
//               birthday,
//               create_at,
//               (SELECT `user_contacts`.`contact`
//                    FROM `user_contacts`
//                    WHERE `type` IN ('phone') AND user_contacts.`user_id`=`users`.`id`) AS phone,
//               (SELECT `user_contacts`.`contact`
//                    FROM `user_contacts`
//                    WHERE `type` IN ('address') AND user_contacts.`user_id`=`users`.`id`) AS address,
//               (SELECT `user_contacts`.`contact`
//                    FROM `user_contacts`
//                    WHERE `type` IN ('email') AND user_contacts.`user_id`=`users`.`id`) AS email,
//               true AS is_my_friend
//        FROM users
//        INNER JOIN friends AS f ON users.id = f.friend_id
//        WHERE f.user_id = ?
//        ORDER BY name, login
//        LIMIT ?
//        OFFSET ?
//    SQL;
//#         INNER JOIN user_contacts ON user_contacts.user_id = friends.friend_id

    $sql = <<<SQL
        SELECT
               users.id, 
               name, 
               login, 
               birthday,
               create_at,
               GROUP_CONCAT(contact) AS contact,
               type,
               true AS is_my_friend
        FROM users
        INNER JOIN friends AS f ON users.id = f.friend_id
        LEFT JOIN user_contacts AS uc on users.id = uc.user_id
        WHERE f.user_id = ?
        ORDER BY name, login
        LIMIT ?
        OFFSET ?
    SQL;

    $offset = ($page - 1) * $limit;

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'iii', $userId, $limit, $offset);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
//    var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));exit();
}

function getMyFriendsCount(int $userId): int
{
    $connect = getDbConnection();
    $sql = <<<SQL
        SELECT COUNT(1) AS quantity
        FROM users
        INNER JOIN friends ON friends.friend_id = users.id
        WHERE friends.user_id = ?
    SQL;

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    return $data['quantity'];
}