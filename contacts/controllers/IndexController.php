<?php

model('FriendsModel');

function actionIndex()
{
    $page = (int)($_GET['page'] ?? 1);
    $limit = (int)($_GET['limit'] ?? config('recordsOnPage'));
    $userId = $_SESSION['user']['id'];

    $totalPages = ceil(getMyFriendsCount($userId) / $limit);

    $firstPagePagination = ($page - 3) <= 0 ? 1 : $page - 3;
    $lastPagePagination = ($page + 3) > $totalPages ? $totalPages : $page + 3;



    render('index/index', [
        'users' => getMyFriends($userId, $page, $limit),
        'totalPages' => $totalPages,
        'currentPage' => $page,
        'paginationUrl' => '/',
        'firstPagePagination' => $firstPagePagination,
        'lastPagePagination' => $lastPagePagination,
    ]);
}
