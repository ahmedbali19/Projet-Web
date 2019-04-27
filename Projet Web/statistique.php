<?php

require_once '../core/clientC.php';
$commande= new clientC();
$dataPoints = array(
    array("label"=> "Femme", "y"=> (int)$commande->CountClientFemme()),
    array("label"=> "Homme", "y"=> (int)$commande->CountClientHomme())

);

?>


                <script>
                    window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            exportEnabled: true,
                            title:{
                                text: "Clients"
                            },
                            subtitles: [{
                                text: "Sexe"
                            }],
                            data: [{
                                type: "pie",
                                showInLegend: "true",
                                legendText: "{label}",
                                indexLabelFontSize: 16,
                                indexLabel: "{label} - #percent%",
                                yValueFormatString: "฿#,##0",
                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                        });
                        chart.render();

                    }
                </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

