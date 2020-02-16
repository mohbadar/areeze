//[Dashboard Javascript]

//Project:	Hyper Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	let draw = Chart.controllers.line.prototype.draw;
    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function() {
            draw.apply(this, arguments);
            let ctx = this.chart.chart.ctx;
            let _stroke = ctx.stroke;
            ctx.stroke = function() {
                ctx.save();
                ctx.shadowColor = '#ccc';
                ctx.shadowBlur = 20;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 1;
                _stroke.apply(this, arguments)
                ctx.restore();
            }
        }
    });

    var ctx = document.getElementById("canvas1");
    // ctx.height = 200;
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
            datasets: [{
                data: [100, 70, 150, 120, 300, 250, 400, 300],
                borderWidth: 3,
                borderColor: "#0bb2d4",
                pointBackgroundColor: "#FFF",
                pointBorderColor: "#0bb2d4",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#0bb2d4",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: !1
            }]
        },
        options: {
            responsive: !0,
            maintainAspectRatio: false, 
            legend: {
                display: !1
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: {
                        display: !1
                    }
                }],
                yAxes: [{
                    display: !1,
                    ticks: {
                        padding: 10,
                        stepSize: 100,
                        max: 600,
                        min: 0
                    },
                    gridLines: {
                        display: !0,
                        draw1Border: !1,
                        lineWidth: 0.5,
                        zeroLineColor: "#e5e5e5"
                    }
                }]
            }
        },
    });



    var ctx = document.getElementById("canvas2");
    // ctx.height = 200;
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
            datasets: [{
                data: [100, 70, 150, 120, 300, 250, 400, 300],
                borderWidth: 3,
                borderColor: "#ff4c52",
                pointBackgroundColor: "#FFF",
                pointBorderColor: "#ff4c52",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#ff4c52",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: !1
            }]
        },
        options: {
            responsive: !0,
            maintainAspectRatio: false, 
            legend: {
                display: !1
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: {
                        display: !1
                    }
                }],
                yAxes: [{
                    display: !1,
                    ticks: {
                        padding: 10,
                        stepSize: 100,
                        max: 600,
                        min: 0
                    },
                    gridLines: {
                        display: !0,
                        draw1Border: !1,
                        lineWidth: 0.5,
                        zeroLineColor: "#e5e5e5"
                    }
                }]
            }
        },
    });


    var ctx = document.getElementById("canvas3");
    // ctx.height = 200;
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
            datasets: [{
                data: [100, 70, 150, 120, 300, 250, 400, 300],
                borderWidth: 3,
                borderColor: "#faa700",
                pointBackgroundColor: "#FFF",
                pointBorderColor: "#faa700",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#faa700",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: !1
            }]
        },
        options: {
            responsive: !0,
            maintainAspectRatio: false, 
            legend: {
                display: !1
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: {
                        display: !1
                    }
                }],
                yAxes: [{
                    display: !1,
                    ticks: {
                        padding: 10,
                        stepSize: 100,
                        max: 600,
                        min: 0
                    },
                    gridLines: {
                        display: !0,
                        draw1Border: !1,
                        lineWidth: 0.5,
                        zeroLineColor: "#e5e5e5"
                    }
                }]
            }
        },
    });

	var plot = $.plot('#flotChart', [{
          data: flotSampleData3,
          color: '#E6155E',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        },{
          data: flotSampleData4,
          color: '#7231F5',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
            			show: true,
    					min: 0,
    					max: 100,
            			ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            			tickColor: 'rgba(255, 255, 255, 0.10)',
						font: {
							color: '#cccccc'
						  }
    			},
    			xaxis: {
            			show: true,
            			color: 'rgba(255, 255, 255, 0.10)',
            			ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
						font: {
							color: '#cccccc'
						  }
          }
        });

        $.plot('#flotChart1', [{
          data: dashData2,
          color: '#faa700'
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
            max: 50
          }
    		});

        $.plot('#flotChart2', [{
          data: dashData2,
          color: '#0bb2d4'
        }], {
    			series: {
    				shadowSize: 0,
            bars: {
              show: true,
              lineWidth: 0,
              fill: 1,
              barWidth: .5
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
            max: 20
          }
    		});


        //-------------------------------------------------------------//
	
	
	var ctx5 = document.getElementById('chartBar1').getContext('2d');
        new Chart(ctx5, {
          type: 'bar',
          data: {
            labels: [0,1,2,3,4,5,6,7],
            datasets: [{
              data: [2, 4, 10, 20, 45, 40, 35, 18],
              backgroundColor: '#17b3a3'
            }, {
              data: [3, 6, 15, 35, 50, 45, 35, 25],
              backgroundColor: '#3e8ef7'
            }]
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              enabled: false
            },
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                display: false,
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  max: 80
                }
              }],
              xAxes: [{
                barPercentage: 0.6,
                gridLines: {
                  color: 'rgba(0,0,0,0.08)'
                },
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  display: false
                }
              }]
            }
          }
        });
	
	// [ Bar Chart2 ] Start
       var chart = AmCharts.makeChart("bar-chart2", {
           "type": "serial",
           "theme": "dark",
           "marginTop": 10,
           "marginRight": 0,
           "valueAxes": [{
               "id": "v1",
               "position": "left",
               "axisAlpha": 0,
               "lineAlpha": 0,
				"color": '#ffffff',
               "autoGridCount": false,
               "labelFunction": function(value) {
                   return +Math.round(value) + "00";
               }
           }],
           "graphs": [{
               "id": "g1",
               "valueAxis": "v1",
               "lineColor": ["#0bb2d4", "#3e8ef7"],
               "fillColors": ["#0bb2d4", "#3e8ef7"],
               "fillAlphas": 1,
               "type": "column",
               "title": "SALES",
               "valueField": "sales",
               "columnWidth": 0.3,
               "legendValueText": "$[[value]]M",
               "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
           },{
               "id": "g2",
               "valueAxis": "v1",
               "lineColor": ["#ff4c52", "#E6155E"],
               "fillColors": ["#ff4c52", "#E6155E"],
               "fillAlphas": 1,
               "type": "column",
               "title": "VISITS ",
               "valueField": "visits",
               "columnWidth": 0.3,
               "legendValueText": "$[[value]]M",
               "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
           },{
               "id": "g3",
               "valueAxis": "v1",
               "lineColor": ["#17b3a3", "#57c7d4"],
               "fillColors": ["#17b3a3", "#57c7d4"],
               "fillAlphas": 1,
               "type": "column",
               "title": "CLICKS",
               "valueField": "clicks",
               "columnWidth": 0.3,
               "legendValueText": "$[[value]]M",
               "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
           }],
           "chartCursor": {
               "pan": true,
               "valueLineEnabled": true,
               "valueLineBalloonEnabled": true,
               "cursorAlpha": 0,
               "valueLineAlpha": 0.2
           },
           "categoryField": "Year",
           "categoryAxis": {
               "dashLength": 1,
               "gridAlpha": 0,
               "axisAlpha": 0,
               "lineAlpha": 0,
			   "color": '#ffffff',
               "minorGridEnabled": true
           },
           "legend": {
               "useGraphSettings": true,
               "position": "top",
			   "color": '#ffffff',
           },
           "balloon": {
               "borderThickness": 1,
               "shadowAlpha": 0
           },
           "dataProvider": [{
               "Year": "2014",
               "sales": 2,
               "visits": 4,
               "clicks": 3
           },{
               "Year": "2015",
               "sales": 4,
               "visits": 7,
               "clicks": 5
           },{
               "Year": "2016",
               "sales": 2,
               "visits": 3,
               "clicks": 4
           },{
               "Year": "2017",
               "sales": 4.5,
               "visits": 6,
               "clicks": 4
           }]
       });
   // [ Bar Chart2 ] end
	
	
	var ch6 = new Rickshaw.Graph({
		element: document.querySelector('#ch6'),
		renderer: 'area',
		max: 50,
		series: [{
		  data: [
			{ x: 0, y: 40 },
			{ x: 1, y: 49 },
			{ x: 2, y: 38 },
			{ x: 3, y: 30 },
			{ x: 4, y: 32 },
			{ x: 5, y: 40 },
			{ x: 6, y: 20 },
			{ x: 7, y: 10 },
			{ x: 8, y: 20 },
			{ x: 9, y: 25 },
			{ x: 10, y: 35 },
			{ x: 11, y: 20 },
			{ x: 12, y: 40 }
		  ],
		  color: '#1CAF9A'
		}]
	  });
	  ch6.render();
	
	$("#baralc").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '95',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#0bb2d4',
		});
	
		  // Sparkline charts
		  var myvalues = [1300, 500, 1920, 927, 831, 1127, 719, 1930, 1221];
		  $('#sparkline-1').sparkline(myvalues, {
			type     : 'line',
			lineColor: '#67757c',
			fillColor: '#7231F5',
			height   : '50',
			width    : '70'
		  });
		  myvalues = [715, 319, 620, 342, 662, 990, 730, 467, 559, 340, 881];
		  $('#sparkline-2').sparkline(myvalues, {
			type     : 'line',
			lineColor: '#67757c',
			fillColor: '#E6155E',
			height   : '50',
			width    : '70'
		  });
		  myvalues = [88, 49, 22,35, 45, 72, 11, 55, 25, 19, 27];
		  $('#sparkline-3').sparkline(myvalues, {
			type     : 'line',
			lineColor: '#67757c',
			fillColor: '#faa700',
			height   : '50',
			width    : '70'
		  });
//map	
jQuery('#world-map-markers').vectorMap(
{
    map: 'world_mill_en',
    backgroundColor: 'rgba(255,255,255,0)',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    regionStyle : {
        initial : {
          fill : '#1e88e5'
        }
      },
    markerStyle: {
      initial: {
                    r: 9,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 5,
                    'stroke-opacity': 0.4
                },
                },
    enableZoom: true,
    hoverColor: '#0a89c1',
    markers : [{
        latLng : [37.00, 96.00],
        name : 'Text'
      
      }],
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();

        alert(message);
    }
});

	
//dashboard_daterangepicker
	
	if(0!==$("#dashboard_daterangepicker").length) {
		var n=$("#dashboard_daterangepicker"),
		e=moment(),
		t=moment();
		n.daterangepicker( {
			startDate:e, endDate:t, opens:"left", ranges: {
				Today: [moment(), moment()], Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")], "Last 7 Days": [moment().subtract(6, "days"), moment()], "Last 30 Days": [moment().subtract(29, "days"), moment()], "This Month": [moment().startOf("month"), moment().endOf("month")], "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}
		, a),
		a(e, t, "")
	}
	function a(e, t, a) {
		var r="",
		o="";
		t-e<100||"Today"==a?(r="Today:", o=e.format("MMM D")): "Yesterday"==a?(r="Yesterday:", o=e.format("MMM D")): o=e.format("MMM D")+" - "+t.format("MMM D"), n.find(".subheader_daterange-date").html(o), n.find(".subheader_daterange-title").html(r)
	}
	
	
}); // End of use strict




                


