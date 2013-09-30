<?php

namespace Acme\DemoBundle\DependencyInjection;

class Charts {

public function __construct(){
 }
 
public function GenerateLineAreaChartHtmlCode($valuesArray, $title, $hAxisLabels, $yUnit, $xUnit, $bk_color, $b_reverse_sort = false)
{
    if (count($valuesArray) == 0)
        return "";

    $chart_function_name_id = rand(100, 100000);
    $chart_html_code = "<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
            <script type=\"text/javascript\">
              google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
              google.setOnLoadCallback(drawChart$chart_function_name_id);
              function drawChart$chart_function_name_id() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', '$xUnit');
                data.addColumn('number', '$yUnit');
                data.addRows([";
    if ($b_reverse_sort)
        krsort($valuesArray, SORT_NUMERIC);
    else
        ksort($valuesArray, SORT_NUMERIC);

    $values_count = count($valuesArray);
    for ($curPointN = 0; $curPointN < $values_count; $curPointN ++)
    {
        $cur_point_value = $valuesArray[$curPointN];
        if ($cur_point_value == "")
            $cur_point_value = 0;

        $chart_html_code .= "['$curPointN $xUnit', $cur_point_value],";
    }
    $chart_name = "chart_div" . rand(100, 100000);
    $chart_html_code .= "]);
                var chart = new google.visualization.AreaChart(document.getElementById('$chart_name'));
                chart.draw(data, {width: 700, height: 300, title: '$title', backgroundColor: '$bk_color', fontName: 'Antic', fontSize: 12,
                                  hAxis: {title: '$hAxisLabels', titleTextStyle: {color: '#FF0000'} },
                                  vAxis: {}
                                 });
              }
            </script><div id=\"$chart_name\"></div>";
        
    error_log($chart_html_code);

    return $chart_html_code;
}

}

?>