<?php

model('UsersModel');
model('FriendsModel');

function actionList()
{
    $page = (int)($_GET['page'] ?? 1);
    $limit = (int)($_GET['limit'] ?? config('recordsOnPage'));

    $totalPages = ceil(getAllUsersCount() / $limit);
    $userId = $_SESSION['user']['id'];
//    if ($page > 0 && $page <= $totalPages) {
        $firstPagePagination = ($page - 3) <= 0 ? 1 : $page - 3;
        $lastPagePagination = ($page + 3) > $totalPages ? $totalPages : $page + 3;
//    }

    render('contacts/list',
        [
            'users' => getAvailableFriends($userId, $page, $limit),
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'paginationUrl' => '/contacts/list',
            'firstPagePagination' => $firstPagePagination,
            'lastPagePagination' => $lastPagePagination,
        ]);
}

