@extends('users.clayout')
@section('content')
<style type="text/css">

#con {
margin: 40px;
width: 200px;
height: 200px;
position: relative;
}
#con1 {
margin: 40px;
width: 200px;
height: 200px;
position: relative;
}
</style>
<div class="community-area wow fadeInUp section-padding" id="contact">
    <div class="container">
        
        <div class="row">
            
            <div class="table-responsive">
                <table class="table  table-sm">
                    <thead class="table-info" style="color:black;">
                        <tr>
                            <th>Date</th>
                            <th>Company Name</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>High</th>
                            <th>Low</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $yday }}  <h6 style="margin-left:5px;" class="badge badge-warning">Yesterday</h6></td>
                            <td>{{ $c_name }}</td>
                            <td >{{ $open2 }}</td>
                            <td >{{ $close2 }}</td>
                            <td ><i style="color:#00FF66; font-size:18px;" class="fa fa-arrow-up" aria-hidden="true"> {{ $yph_value }}</i></td>
                            <td ><i style="color:#E53935;font-size:18px;" class="fa fa-arrow-down" aria-hidden="true"> {{  $ypl_value}}</i></td>
                            
                        </tr>
                        <tr>
                            <td>{{ $today }} <h6 style="margin-left:5px;" class="badge badge-success">Today</h6></td>
                            <td>{{ $c_name }}</td>
                            <td>{{ $open1 }}</td>
                            <td >{{ $close1 }}</td>
                             <td><i style="color:#00FF66; font-size:18px;" class="fa fa-arrow-up" aria-hidden="true"> {{ $nph_value }}</i></td>
                              <td ><i style="color:#E53935;font-size:18px;" class="fa fa-arrow-down" aria-hidden="true"> {{  $npl_value}}</i></td>
                            
                        </tr>
                         <tr>
                            <td>{{ $nday }} <h6 style="margin-left:5px;" class="badge badge-warning">Tomorrow</h6></td>
                            <td>{{ $c_name }}</td>
                            <td >{{ $f_open }}</td>
                             <td>{{ $f_close }}</td>
                            <td><i style="color:#00FF66; font-size:18px;" class="fa fa-arrow-up" aria-hidden="true"> {{ $preh_cl }}</i></td>
                              <td ><i style="color:#E53935;font-size:18px;" class="fa fa-arrow-down" aria-hidden="true"> {{  $pl_value}}</i></td>
                            
                        </tr>
                         <tr>
                            <td>{{ $aweek }}<h6 style="margin-left:5px;" class="badge badge-warning">after week</h6></td>
                            <td>{{ $c_name }}</td>
                            <td >{{ $w_open }}</td>
                             <td>{{ $w_close }}</td>
                             <td><i style="color:#00FF66; font-size:18px;" class="fa fa-arrow-up" aria-hidden="true"> {{ $w_ph }}</i></td>
                              <td ><i style="color:#E53935;font-size:18px;" class="fa fa-arrow-down" aria-hidden="true"> {{  $w_pl}}</i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
          
                
                    <div class="col-lg-6">
                    <a href="#" class="single-about">
                        
                        <div class="single-about-text">
                            
                            <h4>Prediction Statical graph Opening & Closing Price</h4>
                            <canvas id="myChart" width="200" height="90"></canvas>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="single-about">
                        
                        <div class="single-about-text">
                            
                            <h4>Prediction Statical graph Opening & Closing Price </h4>
                            <canvas id="myChart1" width="200" height="90"></canvas>

                        </div>
                    </a>
                </div>

          
        </div>
        <br>
        <div class="row">
        
                <div class="col-lg-4">
                    <a href="#" class="single-about">
                        <div class="ico-heading">
                            <h2 class="badge badge-danger">Opening</h2><h2 class="badge badge-success">Chance</h2>
                            <p class="alert alert-info">There is a chance that the tommorrows opening price of  {{ $c_name }}  will lie from </p>
                            <div id="con" ></div>
                        </div>
                    </a>
                </div>
                 <div class="col-lg-4">
                    <a href="#" class="single-about">
                        <div class="ico-heading">
                            <h2 class="badge badge-warning">closing</h2><h2 class="badge badge-success">Chance</h2>
                            <p class="alert alert-info">There is a chance that the tommorrows closing  price of {{ $c_name }} will lie from </p>
                            <div id="con1" ></div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script src="{{ url('node_modules/progressbar.js/dist/progressbar.js') }}"></script>
<script type="text/javascript">
        var bar = new ProgressBar.Circle(con, {
        color: 'white',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 4,
        trailWidth: 1,
        easing: 'easeInOut',
        duration: 2500,
        text: {
        autoStyleContainer: false
        },
        from: { color: 'rgba(233, 30, 99  ,0.2)', width: 5},
        to: { color: 'rgba(233, 30, 99  ,0.2)', width: 7 },
        // Set default step function for all animate calls
        step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);
        var value = Math.round({{ $open_per}});
        if (value === 0) {
        circle.setText('');
        } else {
        circle.setText(value+"%\nChances");
        }
        }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(1.0);


                    var bar = new ProgressBar.Circle(con1, {
            color: 'white',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 2500,
            text: {
            autoStyleContainer: false
            },
            from: { color: 'rgba(255, 87, 34  ,0.2)', width: 5 },
            to: { color: 'rgba(255, 87, 34  ,0.2)', width: 7 },
            // Set default step function for all animate calls
            step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
            var value = Math.round({{ $pre_ch}});
            if (value === 0) {
            circle.setText('');
            } else {
            circle.setText(value+"%\nChances");
            }
            }
            });
            bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
            bar.text.style.fontSize = '2rem';
            bar.animate(1.0);


</script>
<script src="{{ url('node_modules/chart.js/dist/Chart.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    
                        var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                    labels: ["Yesterday", "Today", "tomorrow", "after week"],
                    datasets: [{
                    label: "Opening",
                    type: "bar",
                    borderColor: "#E74C3C",
                    
                    data: [{{ $open2 }},{{ $open1 }},{{ $f_open }},{{ $w_open }}],
                    fill: true,
                    }, {
                    label: "Closing",
                    type: "bar",
                    borderColor: "#2ECC71",
                    fontColor: "white",
                    fontStyle: "bold",
                    backgroundColor: "#2ECC71",
                    data: [{{ $close2 }},{{ $close1 }},{{ $f_close }},{{ $w_close }}],
                    fill: true,
                    }, 
                    ]
                    },
                    options: {
                    legend: {
                    display:true,
                    fontColor:"white",

                    },
                    animation: {
                    easing: "easeInOutBack"
                    },
                    scales: {
                    yAxes: [{
                    display: 1,
                    ticks: {
                    fontColor: "white",
                    fontStyle: "bold",
                    beginAtZero: !0,
                    maxTicksLimit: 5,
                    padding: 0
                    },
                    gridLines: {
                    drawTicks: 1,
                    display: 1
                    }
                    }],
                    xAxes: [{
                    display: 3,

                    gridLines: {
                    zeroLineColor: "transparent"
                    },
                    ticks: {
                    padding: 0,
                    fontColor: "white",
                    fontStyle: ""
                    }
                    }]
                    }
                    }
});




var ctx1 = document.getElementById("myChart1").getContext('2d');
var myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ["Yesterday", "Today", "tomorrow", "after week"],
        datasets: [{
            label: '#Opening',
            data: [{{ $open2 }},{{ $open1 }},{{ $f_open }},{{ $w_open }}],
            backgroundColor:"#F5B041",
            borderColor:"#E74C3C",
            borderWidth: 1
        },

        {
                    label: "#Closing",
                    type: "bar",
                    borderColor: "#E74C3C",
                    fontColor: "white",
                    fontStyle: "bold",
                  
                    data: [{{ $close2 }},{{ $close1 }},{{ $f_close }},{{ $w_close }}],
                        backgroundColor: [
                
            ],
            borderColor: [
                
            
            ],
            borderWidth: 1
                    
         }

        ]
    },
    options: {
        legend: {
                    display:true,

                    },
        scales: {
            yAxes: [{
                    display: 1,
                    ticks: {
                    fontColor: "white",
                    fontStyle: "bold",
                    beginAtZero: !0,
                    maxTicksLimit: 5,
                    padding: 0
                    },
                    gridLines: {
                    drawTicks: 1,
                    display: 1
                    }
                    }],
                    xAxes: [{
                    display: 2,
                    gridLines: {
                    zeroLineColor: "transparent"
                    },
                    ticks: {
                    padding: 0,
                    fontColor: "white",
                    fontStyle: ""
                    }

            }]
        }
    },
  
               

});




</script>
@endsection