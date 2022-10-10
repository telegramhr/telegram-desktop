<?php

add_filter('wpdatatables_filter_apexcharts_render_data', 'telegram_charts_options', 10, 3);

function telegram_charts_options($apexcharts_render_data, $id, $that) {
    if ($id == 1) {
        $apexcharts_render_data['annotations'] = [];
    }

    return $apexcharts_render_data;
}
