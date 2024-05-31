<script>


let waktu_awal = [
    @foreach ($pengukuran as $p)
        "{!! $p->waktu !!}",
    @endforeach
];

let chart_tegangan = buatChart(document.getElementById('chart_tegangan'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-info'), 
    {
        name: 'Tegangan',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->tegangan }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'V'
);

let chart_arus = buatChart(document.getElementById('chart_arus'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-danger'), 
    {
        name: 'Arus',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->arus }},
            @endforeach]
    }, 
    waktu_awal,
    'A'
);

let chart_faktor_daya = buatChart(document.getElementById('chart_faktor_daya'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Faktor Daya',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->faktor_daya }},
            @endforeach
        ]
    }, 
    waktu_awal
);

let chart_frekuensi = buatChart(document.getElementById('chart_frekuensi'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-primary'), 
    {
        name: 'Frekuensi',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->frekuensi }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'Hz'
);

let chart_daya_aktif = buatChart(document.getElementById('chart_daya_aktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Daya Aktif',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->daya_aktif }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'W'
);

let chart_daya_reaktif = buatChart(document.getElementById('chart_daya_reaktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Daya Reaktif',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->daya_reaktif }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'VAr'
);

let chart_daya_semu = buatChart(document.getElementById('chart_daya_semu'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-teal'), 
    {
        name: 'Daya Semu',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->daya_semu }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'VA'
);

let chart_total_daya_aktif = buatChart(document.getElementById('chart_total_daya_aktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Total Daya Aktif',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->total_daya_aktif }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'W'
);

let chart_total_daya_reaktif = buatChart(document.getElementById('chart_total_daya_reaktif'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Total Daya Reaktif',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->total_daya_reaktif }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'VAr'
);
let chart_total_daya_semu = buatChart(document.getElementById('chart_total_daya_semu'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-danger'), 
    {
        name: 'Total Daya Semu',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->total_daya_semu }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'VA'
);

let chart_total_faktor_daya = buatChart(document.getElementById('chart_total_faktor_daya'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-warning'), 
    {
        name: 'Total Faktor Daya',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->total_faktor_daya }},
            @endforeach
        ]
    }, 
    waktu_awal
);

let chart_daya_aktif_yang_diminta = buatChart(document.getElementById('chart_daya_aktif_yang_diminta'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-orange'), 
    {
        name: 'Apparent Power Demand',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->apparent_power_demand }},
            @endforeach
        ]
    }, 
    waktu_awal,
    'W'
);

let chart_daya_reaktif_yang_diminta = buatChart(document.getElementById('chart_daya_reaktif_yang_diminta'),
    KTUtil.getCssVariableValue('--bs-gray-500'),
    KTUtil.getCssVariableValue('--bs-gray-200'), 
    KTUtil.getCssVariableValue('--bs-success'), 
    {
        name: 'Reactive Power Demand',
        data: [
            @foreach ($pengukuran as $p)
                {{ $p->reactive_power_demand }},
            @endforeach]
    }, 
    waktu_awal,
    'VAr'
);





/*
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
*/


setInterval(() => {
    fetch('/api/minta_data', { 
    method: "POST",
    headers: {
      "Accept": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    }).then((respon) => {
        return respon.json()
    }).then((hasil) => {
        
   
        chart_tegangan.updateSeries([{'data': hasil.tegangan}]);
        chart_arus.updateSeries([{'data': hasil.arus}]);
        chart_faktor_daya.updateSeries([{'data': hasil.faktor_daya}]);
        chart_frekuensi.updateSeries([{'data': hasil.frekuensi}]);

        tulisLabel("label_tegangan", 384.2, "V");
        tulisLabel("label_arus", 58, "A");
        tulisLabel("label_faktor_daya", 0.87);
        tulisLabel("label_frekuensi", 55, "Hz");
        tulisLabel("label_daya_aktif", 90, "W");
        tulisLabel("label_daya_reaktif", 70, "VAr");
        tulisLabel("label_daya_semu", 69.2, "VA");
        tulisLabel("label_total_daya_aktif", 85.6, "W");
        tulisLabel("label_total_daya_reaktif", 65.4, "VAr");
        tulisLabel("label_total_daya_semu", 598.2 , "VA");
        tulisLabel("label_total_faktor_daya", 0.97);
        tulisLabel("label_reactive_power_demand", 896.5, "VAr");
        tulisLabel("label_active_power_demand", 56.5, "W");

    });

    
}, 7000);


tulisLabel("label_tegangan", 384.2, "V");
tulisLabel("label_arus", 58, "A");
tulisLabel("label_faktor_daya", 0.87);
tulisLabel("label_frekuensi", 55, "Hz");
tulisLabel("label_daya_aktif", 90, "W");
tulisLabel("label_daya_reaktif", 70, "VAr");
tulisLabel("label_daya_semu", 69.2, "VA");
tulisLabel("label_total_daya_aktif", 85.6, "W");
tulisLabel("label_total_daya_reaktif", 65.4, "VAr");
tulisLabel("label_total_daya_semu", 598.2 , "VA");
tulisLabel("label_total_faktor_daya", 0.97);
tulisLabel("label_reactive_power_demand", 896.5, "VAr");
tulisLabel("label_active_power_demand", 56.5, "W");

/*
}, 6000);
*/





</script>