<?php

function camelize(string $string, $separator = '-'): string
{
    $string = ucwords($string, $separator);
    return str_replace($separator, '', $string);
}

function generateRandomName(): string
{
    $firstName = [
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
    ];

    $lastName = [
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    ];

    $name = $firstName[random_int(0, count($firstName) - 1)];
    $name .= ' ';
    $name .= $lastName[random_int(0, count($lastName) - 1)];

    return $name;
}

function transformArray(array $myFriends): array
{
    $myNewFriends = [];

    foreach ($myFriends as $key => $values) {

        if (in_array($values['id'], array_column($myNewFriends, 'id'), true)) {
            $myNewFriends[array_key_last($myNewFriends)]['contact'][$values['type']] = $values['contact'];

        } else {

            $contact = $values['contact'];
            $type = $values['type'];
            unset($values['contact']);
            $values['contact'][$type] = $contact;
            $myNewFriends[$key] = $values;

        }
    }
    return $myNewFriends;
}

function newArrayTransform(array $myFriends): array
{
    $myNewFriends = [];

    foreach ($myFriends as $values) {

        if (array_key_exists($values['id'], $myNewFriends)) {
            $myNewFriends[$values['id']]['contact'][$values['type']] = $values['contact'];

        } else {

            $myNewFriends[$values['id']] = [
                'name' => $values['name'],
                'login' => $values['login'],
                'birthday' => $values['birthday'],
                'create_at' => $values['create_at'],
                'is_my_friend' => $values['is_my_friend'],
                'contact' => [
                    $values['type'] => $values['contact'],
                ],
            ];
        }
    }

    return $myNewFriends;
}