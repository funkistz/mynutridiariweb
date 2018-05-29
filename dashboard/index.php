<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="css/jquery.js"></script>
        <script type="text/javascript" src="css/jquery.yiiactiveform.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/ace-fonts.css" />
        <link rel="stylesheet" href="css/ace.css" />
        <link rel="stylesheet" href="css/ace-rtl.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css">
<title>Dashboard MyNutriDiari</title>

<style type="text/css">

body
{
font-family: "Helvetica",Arial,sans-serif;
font-weight: 500;
color:#333;
background-color:#EEE
}
label
{
width:100px;
display:block;
font-weight:bold;
color:#666666;
}
#main
{
margin:0 auto;
width:800px;
}
.input
{
padding:10px;
font-size:14px;
border:1px solid #999999;
width:200px;
margin-bottom:10px;
}
.button {
padding:10px;
background-color: #5fcf80 !important;
border-color: #3ac162 !important;
}
.msg
{
font-size:11px;
color:#666;
padding:10px;
}
.selector
{
display: none;
}
#embed-api-auth-container
{
display: none;
}
#main-container
{
padding:10px;
font-size:14px;
width:100%;
margin-bottom:10px;
background-color:#FFF
}
#chart-container
{
padding:10px;
font-size:14px;
border:0px solid #999999;
width:90%;
margin-bottom:10px;
background-color:#FFF
}
#chart-container2
{
padding:10px;
font-size:14px;
border:0px solid #999999;
width:90%;
margin-bottom:10px;
background-color:#FFF
}
#chart-1-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float : left;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
#chart-2-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float : right;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
#main-chart-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float :left;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
#breakdown-chart-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float :right;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
#fb-main-chart-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float :left;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
#fb-breakdown-chart-container 
{
padding:10px;
font-size:14px;
border:0px solid #999999;
float :right;
width:48%;
margin-bottom:10px;
background-color:#FFF
}
.main-container2
{
padding:10px;
height: 330px;
font-size:14px;
border:0px solid #999999;
width:98%;
margin-bottom:10px;
background-color:#CCC
}
.main-container3
{
padding:10px;
height: 550px;
font-size:14px;
border:0px solid #999999;
width:98%;
margin-bottom:10px;
background-color:#CCC
}

    @media (min-width: 992px) { /* Change to whatever media query you require */
        .container-big {
            padding-left:15%
        }
    }

</style>

<?php

$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = 'xxxxx';


	$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

	$selected = mysql_select_db("mynutridiariv2",$dbhandle) 
  		or die("Could not select db");
        
$result = mysql_query("SELECT * from userdata where gender = '1'");

$count1 = 0;

while ($row = mysql_fetch_array($result)) {
   $height = $row['height'];
   $weight = $row['weight'];
   $data1[$count1] = "[$height, $weight]";
   $count1++;
}

$result2 = mysql_query("SELECT * from userdata where gender = '2'");

$count2 = 0;

while ($row2 = mysql_fetch_array($result2)) {
   $height2 = $row2['height'];
   $weight2 = $row2['weight'];
   $data2[$count2] = "[$height2, $weight2]";
   $count2++;
}

$result3 = mysql_query("SELECT *, count(*) as 'foodcount' FROM cart GROUP BY info1 order by foodcount desc limit 50");

$count3 = 0;

while ($row3 = mysql_fetch_array($result3)) {
   $foodname = "'".$row3['info1']."'";
   $foodcount = (int)$row3['foodcount'];
   $data3[$count3] = "[$foodname, $foodcount]";
   $count3++;
}


$result4= mysql_query("SELECT *, MAX(CONVERT(info2,UNSIGNED INTEGER)) AS maxcal FROM diaridata where type = 'CALORIE' GROUP BY diaridate ORDER BY diaridatevalue DESC");

$count4 = 0;

while ($row4 = mysql_fetch_array($result4)) {
   $maxcal = (int)$row4['maxcal'];
   $datestr = $row4['diaridate'];
   $d1 = substr($datestr,0,2);
   $m1 = ((int)substr($datestr,3,2))-1;
   $y1 = substr($datestr,6,4);
   //echo "Date.UTC(".$y1.",".$m1.",".$d1.")";
   $data4[$count4] = "[Date.UTC(".$y1.",".$m1.",".$d1.") , $maxcal]";
   //echo $data4[$count4] ;
   $count4++;
}

$result5= mysql_query("SELECT *, MIN(CONVERT(info3,SIGNED INTEGER)) AS mincal FROM diaridata where type = 'CALORIE' GROUP BY diaridate ORDER BY diaridatevalue DESC");

$count5 = 0;

while ($row5 = mysql_fetch_array($result5)) {
   $mincal = 0-(int)$row5['mincal'];
   $datestr = $row5['diaridate'];
   $d1 = substr($datestr,0,2);
   $m1 = ((int)substr($datestr,3,2))-1;
   $y1 = substr($datestr,6,4);
   //echo "Date.UTC(".$y1.",".$m1.",".$d1.")";
   $data5[$count5] = "[Date.UTC(".$y1.",".$m1.",".$d1.") , $mincal]";
   //echo $data5[$count5] ;
   $count5++;
}



?>




<script>

$(function () {
    $('#container').highcharts({
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Height Versus Weight of <?php echo $count1 ?> male and <?php echo $count2 ?> female Individuals'
        },
        subtitle: {
            text: 'Source: MyNutriDiari App Service'
        },
        xAxis: {
            title: {
                enabled: true,
                text: 'Height (cm)'
            },
			min: 120,
			max: 200,
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Weight (kg)'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x} cm, {point.y} kg'
                }
            }
        },
        series: [{
            name: 'Female',
            color: 'rgba(223, 83, 83, .5)',
            data: [<?php echo join($data1, ',') ?>]

        }, {
            name: 'Male',
            color: 'rgba(119, 152, 191, .5)',
            data: [<?php echo join($data2, ',') ?>]
        }]
    });
	
});	


$(function () {

$('#container2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Most Food Consumed'
        },
        subtitle: {
            text: 'From MyNutriDiari App Service'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number of Consumption'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Consumed: <b>{point.y:.1f} times</b>'
        },
        series: [{
            name: 'Food Consumption',
            data: [
               <?php echo join($data3, ',') ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: -50, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });

 });
 
 
 $(function () {

        $('#container3').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Max Calories Consumed Against Date'
            },
            subtitle: {
                text: 'Source: MyNutriDiari App'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            },
            yAxis: {
                title: {
                    text: 'Calories (kCal)'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Maximum Consumed Calories',
                data: [<?php echo join($data4, ',') ?>]
            }]
        });
});


$(function () {

        $('#container4').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Max Calories Burned With Exercise Against Date'
            },
            subtitle: {
                text: 'Source: MyNutriDiari App'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            },
            yAxis: {
                title: {
                    text: 'Calories (kCal)'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[5]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[5]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Maximum Calories Burned',
                data: [<?php echo join($data5, ',') ?>]
            }]
        });
});



</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
					<script src="https://code.highcharts.com/modules/exporting.js"></script>


</head>

<body>

<div class="container container-big">
  
<h1>MyNutriDiari Real Time Dashboard</h1>
<h3>Data Source : MyNutriDiari Application Users</h3>
<hr>
    <!--div class="row"-->
      
        <div class="col-xs-12">
        <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="widget-title orange"><i class="ace-icon fa fa-bar-chart"></i>User Weight / Height Characteristics</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main no-padding">
            
            <div class="col-sm-12"">
                <div id="graphstats" style="min-width: 310px; height: 400px; margin: 0 auto" data-highcharts-chart="0">
                  

				<div id="container" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
                  
                </div>
                
                <div class="hr hr32 hr-dotted"></div>
            </div>
            
            			</div>
                    </div>
         </div>
         <!-----------------------graph 2-------------->
         <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="widget-title orange"><i class="ace-icon fa fa-bar-chart"></i>Food / Products Characteristics</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main no-padding">
            
            <div class="col-sm-12"">
                <div id="graphstats" style="min-width: 310px; height: 400px; margin: 0 auto" data-highcharts-chart="0">
                  
                  <div id="container2" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
                  
                </div>
                
                <div class="hr hr32 hr-dotted"></div>
            </div>
            
            			</div>
                    </div>
         </div>
         <!-----------------------graph 3-------------->
         <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="widget-title orange"><i class="ace-icon fa fa-bar-chart"></i>Maximum Calories Consumed</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main no-padding">
            
            <div class="col-sm-12"">
                <div id="graphstats" style="min-width: 310px; height: 400px; margin: 0 auto" data-highcharts-chart="0">
                  
                  <div id="container3" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
                  
                </div>
                
                <div class="hr hr32 hr-dotted"></div>
            </div>
            
            			</div>
                    </div>
         </div>
         <!-----------------------graph 4-------------->
         <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="widget-title orange"><i class="ace-icon fa fa-bar-chart"></i>Maximum Exercise Done</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main no-padding">
            
            <div class="col-sm-12"">
                <div id="graphstats" style="min-width: 310px; height: 400px; margin: 0 auto" data-highcharts-chart="0">
                  
                  <div id="container4" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
                  
                </div>
                
                <div class="hr hr32 hr-dotted"></div>
            </div>
            
            			</div>
                    </div>
         </div>
         
         
        </div>
    <!--/div-->
</div>


</body>
</html>