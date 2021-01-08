<?php

return [
    /**
     * 結果の判定基準.
     */
    'result'    => [
        'good'   => [
            'score'   => 100,
            'message' => '○',
        ],
        'bad'    => [
            'score'   => -100,
            'message' => '×',
        ],
        'normal' => [
            'message' => '△',
        ],
    ],

    /**
     * 質問.
     */
    'questions' => [
        [
            'question' => 'Laravel : サポート期間中のバージョンを使っている',
            'yes'      => 10,
            'no'       => -100,
            'neither'  => 0,
        ],
        [
            'question' => 'PHP : サポート期間中のバージョンを使っている',
            'yes'      => 10,
            'no'       => -100,
            'neither'  => 0,
        ],
        [
            'question' => 'Bladeに直接jQueryを書いている',
            'yes'      => -100,
            'no'       => 10,
            'neither'  => 0,
        ],
        [
            'question' => 'Laravel mixを使っている',
            'yes'      => 10,
            'no'       => -10,
            'neither'  => 0,
        ],
        [
            'question' => '短いFacadeを使っている(use Auth;)',
            'yes'      => -10,
            'no'       => 10,
            'neither'  => 0,
        ],
        [
            'question' => 'サービスクラスをstaticメソッドで作っている',
            'yes'      => -100,
            'no'       => 10,
            'neither'  => 0,
        ],
        [
            'question' => 'env()はconfigファイルでしか使ってない',
            'yes'      => 10,
            'no'       => -100,
            'neither'  => 0,
        ],
    ],

];
