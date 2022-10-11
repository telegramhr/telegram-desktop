<?php

add_filter('wpdatatables_filter_apexcharts_render_data', 'telegram_charts_options', 10, 3);

function telegram_charts_options($apexcharts_render_data, $id, $that) {
    if ($id == 2) {
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
                            "fillColor" => "#ffffff",
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
            $apexcharts_render_data['options']['xaxis']['categories'] = [
                ["Kolaps grenlandskog ", "ledenog pokrivača"],
                ["Kolaps ledenog pokrivača ", "zapadnog Antarktika"],
                ["Odumiranje tropskog ", "koraljnog grebena"],
                ["Naglo otapanje ", "sjevernog permafrosta"],
                ["Gubitak leda ", "u Barentsovom moru"],
                ["Kolaps Labradorske ", "morske struje"],
                ["Gubitak planinskih ", "ledenjaka"],
                ["Pomak zapadnoafričkih ", "monsuna"],
                ["Kolaps istočnog ", "antarktičkog ledenjaka"],
                ["Odumiranje amazonske ", "prašume"],
                ["Kolaps sjevernog ", "permafrosta"],
                ["Kolaps atlantske struje"],
                ["Odumiranje sjevernih ", "šuma na jugu"],
                ["Odumiranje sjevernih ", "šuma na sjeveru"],
                ["Kolaps arktičkog ", "zimskog ledenjaka"],
                ["Kolaps ledenog pokrivača ", "istočne Antarktike"],
            ];
            $apexcharts_render_data['options']['legend']['onItemClick']['toggleDataSeries'] = false;
            $apexcharts_render_data['options']['yaxis']['labels']['maxWidth'] = 250;
    }


    return $apexcharts_render_data;
}
