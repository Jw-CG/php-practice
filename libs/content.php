<?php

function whoAreYou () {
    return 'Brad Flipsen';
}

function giveMeSomeFood() {
    $foods = [
            [
                'kind' => 'vegi',
                'healthy' => true
            ],
            [
                'kind' => 'meat',
                'healthy' => false
            ]
        ];

    return $foods;
}