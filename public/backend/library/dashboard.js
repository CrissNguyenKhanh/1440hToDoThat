(function($) {
    "use strict";
    var HT = {}; 

    HT.createChart = (label, data) => {
        let canvas = document.getElementById('barChart');
        let ctx = canvas.getContext('2d');
        
        // Destroy the existing chart if it exists
        if (window.myBarChart) {
            window.myBarChart.destroy();
        }

        let chartData = {
            labels: label,
            datasets: [{
                label: "Doanh thu",
                backgroundColor: "rgba(26,179,148,0.5)",
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: data
            }]
        };

        let chartOptions = {
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        let value = tooltipItem.yLabel;
                        value = value.toString();
                        value = value.split(/(?=(?:...)*$)/);
                        value = value.join('.');
                        return value;
                    }
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function (value) {
                            value = value.toString();
                            value = value.split(/(?=(?:...)*$)/);
                            value = value.join('.');
                            return value;
                        }
                    }
                }],
                xAxes: [{
                    ticks: {}
                }]
            }
        };

        // Create the chart
        window.myBarChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: chartOptions
        });
    };
    HT.changeChart = () =>{
        $(document).on('click','.chartButton',function(e){
            e.preventDefault()
            let button = $(this);
            let chartType = $(this).attr('data-chart')
            $('.chartButton').removeClass('active')
            button.addClass('active')
          HT.callChart(chartType);
            

        })
    }
    HT.callChart = (chartType) =>{
        $.ajax({
            url: "ajax/order/chart",
            type: "GET",
            data: {
                chartType:chartType
            },
            dataType: "json",
            success: function (res) {
                console.log(res);
                
               HT.createChart(res.label,res.data)
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: " + textStatus + " " + errorThrown);
            },
          });
    }

    $(document).ready(function() {
       
        HT.createChart(label, data);
        HT.changeChart();
    });

})(jQuery);
