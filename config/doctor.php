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
        ],
        [
            'question' => 'PHP : サポート期間中のバージョンを使っている',
            'yes'      => 10,
            'no'       => -100,
        ],
        [
            'question' => 'Bladeに直接jQueryを書いている',
            'yes'      => -100,
            'no'       => 10,
        ],
        [
            'question' => 'Laravel mixを使っている',
            'yes'      => 10,
            'no'       => -10,
        ],
        [
            'question' => '短いFacadeを使っている(use Auth;)',
            'yes'      => -10,
            'no'       => 10,
        ],
        [
            'question' => 'サービスクラスをstaticメソッドで作っている',
            'yes'      => -100,
            'no'       => 10,
        ],
        [
            'question' => 'env()はconfigファイルでしか使ってない',
            'yes'      => 10,
            'no'       => -100,
        ],
        [
            'question' => 'レンタルサーバーで動かしている',
            'yes'      => -100,
            'no'       => 10,
        ],
        [
            'question' => '開発環境はXAMPP/MAMP',
            'yes'      => -100,
            'no'       => 10,
        ],
        [
            'question' => 'テストを書いている',
            'yes'      => 10,
            'no'       => -10,
        ],
        [
            'question' => 'CI/CD 自動デプロイ環境が整っている',
            'yes'      => 10,
            'no'       => -10,
        ],
    ],
];
