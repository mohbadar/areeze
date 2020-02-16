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
                ctx.shadowColor = '#E6155E';
                ctx.shadowBlur = 10;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 9;
                _stroke.apply(this, arguments)
                ctx.restore();
            }
        }
    });

    //  Mixed chart
    var ctx = document.getElementById("avgChart");
    // ctx.height = 70;
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Product Sold",
                    type: "line",
                    borderColor: "#E6155E",
                    backgroundColor: 'transparent',
                    data: [32, 59, 87, 45, 63, 57, 34, 74, 68, 29, 84, 96],
                    pointColor: "#E6155E",
                    pointBorderColor: "#E6155E",
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#E6155E",
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverBackgroundColor: "#E6155E",
                    pointHoverBorderColor: "#E6155E",
                    pointHoverRadius: 7,
                    fill: true
                },
                {
                    label: "Avarage Sales",
                    type: "bar",
                    backgroundColor: "rgba(255, 255, 255, 0.5)",
                    backgroundColorHover: "#E6155E",
                    data: [32, 59, 87, 45, 63, 57, 34, 74, 68, 29, 84, 96],
                }
            ]
        },
        options: {
            responsive: true, 
            maintainAspectRatio: false, 
            barRadius: 4,
            title: {
                display: false,
                text: 'Market Sales Avarage'
            },
            legend: {
                position: 'top',
                display: false,
                labels: {
                    // usePointStyle: true,
                    fontFamily: 'CircularStdBook',
                },


            },
            scales: {
                yAxes: [{
                    // display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        beginAtZero: true,
						fontColor: "#ffffff", // this here
                    }
                }],
                xAxes: [{
                    // Change here
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
						fontColor: "#ffffff", // this here
                    },
                    // display: false,
                    barPercentage: 0.1
                }]
            }
        }
    });

	

        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#3e8ef7', '#E6155E'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#cccccc',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });
	
	$('#vmap2').vectorMap({
          map: 'us_aea_en',
          showTooltip: true,
          backgroundColor: 'rgba(255, 255, 255, 0.0)',
          color: '#60adff',
          regionStyle : {
				initial : {
					fill : '#0bb2d4'
				}
			},
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: 0.85
        });

	
    var ctx = document.getElementById("total-revenue");
    // ctx.height = 250;
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["2015", "2016", "2017", "2018", "2019"], 
            datasets: [{
                data: [1000, 2260, 2135, 2525, 3732],
                backgroundColor: "rgba(250, 167, 0, 0.1)", 
                borderWidth: 3,
                borderColor: "#faa700",
                pointBackgroundColor: "#fff",
                pointBorderColor: "#faa700",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#faa700",
                pointRadius: 0,
                pointHoverRadius: 5,
                fill: true
            }, {
                data: [1000, 1830, 1735, 2135, 3232],
                backgroundColor: "rgba(230, 21, 94, 0.1)", 
                borderWidth: 3,
                borderColor: "#E6155E",
                pointBackgroundColor: "#fff",
                pointBorderColor: "#E6155E",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#E6155E",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: true
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
                        stepSize: 500,
                        max: 4000,
                        min: 1000
                    },
                    gridLines: {
                        display: !0,
                        draw1Border: !1,
                        lineWidth: 0.5,
                        zeroLineColor: "transparent",
                        drawBorder: false
                    }
                }]
            }
        }
    });

	 var ctx = document.getElementById("sold-product");
    // ctx.height = 110;
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["01 July", "02 July", "03 July", "04 July", "05 July", "06 July", "07 July"], 
            datasets: [{
                data: [1, 14, 5, 8, 1, 14, 2],
                borderWidth: 3,
                borderColor: "#fff",
                pointBackgroundColor: "#FB9D46",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#FA9B48",
                pointHoverBorderColor: "#fff",
                pointRadius: 5,
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
                        stepSize: 5,
                        max: 15,
                        min: 0
                    },
                    gridLines: {
                        display: !1,
                        draw1Border: !1,
                        lineWidth: 0.5,
                        // zeroLineColor: "transparent",
                        // drawBorder: false
                    }
                }]
            },
            tooltips: {
                enabled: true
            }
        }
    });

	
	$("#linearea").sparkline([1,2,3,5,4,3,6,4,4,1], {
		type: 'line',
		width: '100%',
		height: '80',
		lineColor: '#26c6da',
		fillColor: 'rgba(38, 198, 218, 0.5)',
		lineWidth: 2,
	});
	
	$("#linearea2").sparkline([1,2,3,5,4,3,6,4,4,1], {
		type: 'line',
		width: '100%',
		height: '80',
		lineColor: '#fc4b6c',
		fillColor: 'rgba(252, 75, 108, 0.5)',
		lineWidth: 2,
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


                


