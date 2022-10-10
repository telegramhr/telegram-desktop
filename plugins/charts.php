<?php

add_filter('wpdatatables_filter_apexcharts_render_data', 'telegram_charts_options', 10, 3);

function telegram_charts_options($apexcharts_render_data, $id, $that) {
    if ($id == 2) {
        /*$apex_mydata = array(
            "annotations" => [
                "xaxis" => [
                    "x" => 1.1,
                }
                "borderColor" => "#efefef",
                    "label" => [
                        "style" => [
                            "color" => "#212112"
                        ],
                        "text" => "Trenutna razina zagrijavanja"
                    ]
                ]
            ]
        );*/
        $apexcharts_render_data['options']['annotations'] =
            [
                "xaxis" => [
                    [
                        "x" => 1.1,
                        "borderColor" => "#efefef",
                        "label" => [
                            "style" => [
                                "color" => "#212112"
                            ],
                            "text" => "Trenutna razina zagrijavanja",
                            "offsetY" => 150,
                        ]
                        ],
                        [
                            "x" => 1.5,
                            "x2" => 2,
                            "fillColor" => "#3737ae",
                            "textAnchor" => "middle",
                            "label" => [
                                "style" => [
                                    "color" => "#212112"
                                ],
                                "text" => "Ciljevi Pariškog sporazuma",
                                "offsetY" => 300,
                            ],
                        ]
                ]
            ];
            $apexcharts_render_data['options']['legend']['onItemClick']['toggleDataSeries'] = false;
    }


    return $apexcharts_render_data;
}
