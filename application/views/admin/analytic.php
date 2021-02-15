<?php
$grafikhariini = array_map('intval', $grafikhariini);
$grafikkemarin = array_map('intval', $grafikkemarin);



?>


<div class="col-12">
    <h1>Analytical Charts</h1>
    <!--main-top-->
    <div class="main-row main-top">
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; margin: 0px;">
                <div class="tab-left">
                    <h2>Page stats</h2>
                </div>
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Today</span></li>
                    <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Yesterday</span></li>

                </ul>
                <div class="clear"></div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <div class="graph-grid">
                            <canvas id="bar-chart-today" height="270" width="825"> </canvas>
                            <script>
                                var bar_chart_today = $("#bar-chart-today")

                                var lineChartData = {
                                    labels: ["00:00", "06:00", "12:00", "18:00", "23:59"],
                                    datasets: [{
                                        label: 'Grafik Pengunjung Hari Ini',
                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                        borderColor: 'rgba(255,99,132,1)',
                                        borderWidth: 1,
                                        data: <?= json_encode($grafikhariini) ?>

                                    }]

                                };

                                var mybarchart = new Chart(bar_chart_today, {
                                    type: 'line',
                                    data: lineChartData,
                                    options: {
                                        responsive: true,
                                    }
                                })
                            </script>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="graph-grid">
                            <canvas id="bar-chart-yesterday" height="270" width="825"> </canvas>
                            <script>
                                var bar_chart_yesterday = $("#bar-chart-yesterday")

                                var lineChartDataYesterday = {
                                    labels: ["00:00", "06:00", "12:00", "18:00", "23:59"],
                                    datasets: [{
                                        label: 'Grafik Pengunjung Hari Kemarin',
                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                        borderColor: 'rgba(255,99,132,1)',
                                        borderWidth: 1,
                                        data: [8,9,7,0,0]

                                    }]

                                };

                                var mybarchartyesterday = new Chart(bar_chart_yesterday, {
                                    type: 'line',
                                    data: lineChartDataYesterday,
                                    options: {
                                        responsive: true,
                                    }
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//main-top-->
    <!--main-bottom -->
    <div class="main-row main-bottom text-center">
        <ul>
            <li>
                <h3>Visitor Today</h3>
                <p><?= $pengunjunghariini  ?></p>
            </li>
            <li>
                <h3>Visitors</h3>
                <p><?= $totalpengunjung ?></p>
            </li>
            <li>
                <h3>Visitor Online</h3>
                <p><?= $pengunjungonline ?></p>
            </li>
        </ul>
    </div>
    <!--//main-bottom -->
</div>