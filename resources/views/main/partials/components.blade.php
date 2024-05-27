<script>


function buatChart(element, labelColor, borderColor, baseColor, sumbu_x, sumbu_y) {
    let lightColor = '#F8F5FF';
    let height = parseInt(KTUtil.css(element, 'height'));
    let options = {
    series: [sumbu_x],
    chart: {
        fontFamily: 'inherit',
        type: 'area',
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {

    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        enabled:false
    },
    stroke: {
        curve: 'smooth',
        show: true,
        width: 3,
        colors: [baseColor]
    },
    xaxis: {
        categories: sumbu_y,
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: '12px'
            }
        },
        crosshairs: {
            position: 'front',
            stroke: {
                color: baseColor,
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
                fontSize: '12px'
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: '12px'
            }
        }
    },
    states: {
        normal: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        hover: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: 'none',
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: '12px'
        },
        y: {
            formatter: function (val) {
                return val + ' Volt'
            }
        }
    },
    colors: [lightColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    },
    markers: {
        strokeColor: baseColor,
        strokeWidth: 3
    }
    
}

let chart = new ApexCharts(element, options);

chart.render();

    return chart;
}



var chart_tegangan = buatChart(document.getElementById('chart_tegangan'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-info'), 
    {
        name: 'Tegangan',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_arus'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-danger'), 
    {
        name: 'Arus',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_faktor_daya'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Faktor Daya',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_frekuensi'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-primary'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_daya_aktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Daya Aktif',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_daya_reaktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Daya Reaktif',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_daya_semu'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-teal'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_total_daya_aktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_total_daya_reaktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_total_daya_semu'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-teal'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_total_faktor_daya'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-warning'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('daya_aktif_yang_diminta'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

buatChart(document.getElementById('chart_daya_reaktif_yang_diminta'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Frekuensi',
        data: [380, 385, 386, 384.6, 398.4, 385.2, 380.7]
    }, 
    ['Feb 23 08:56', 'Feb 23 08:57', 'Feb 23 08:58', 'Feb 23 08:59', 'Feb 23 09:00', 'Feb 23 09:01', 'Feb 23 09:02']
);

//    x:[387, 384, 386.2, 382.6, 390.5, 375.2, 378.7],
        //    y:['Feb 23 09:03', 'Feb 23 09:04', 'Feb 23 09:05', 'Feb 23 09:06', 'Feb 23 09:07', 'Feb 23 09:08', 'Feb 23 09:09']
        
setTimeout(() => {
    chart_tegangan.updateSeries([{
        data:[{
            x : 'Feb 23 09:04',
            y : 385
        },{
            x : 'Feb 23 09:05',
            y : 386
        },{
            x : 'Feb 23 09:06',
            y : 384.6
        },{
            x : 'Feb 23 09:07',
            y : 398.4
        },{
            x : 'Feb 23 09:08',
            y : 385.2
        },{
            x : 'Feb 23 09:09',
            y : 380.7
        },{
            x : 'Feb 23 09:10',
            y : 398.2
        },
    ]
    }]);
}, 6000);


</script>