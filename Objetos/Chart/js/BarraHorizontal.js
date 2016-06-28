class CarraHorizontal{

    getName(){

        return "BARRAHORIZONTAL";
    }

    addDataBase(){

        var myRadar.onload = function  {
             window.myRadar = new Chart(document.getElementById("canvas"), config);
            // body...
        }

        var randomScalingFactor = function() {
            return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
        };
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function() {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
        };
          var randomizeData = function(){
            var zero = Math.random() < 0.2 ? true : false;
                $.each(horizontalBarChartData.datasets, function(i, dataset) {
                    dataset.backgroundColor = randomColor();
                    dataset.data = dataset.data.map(function() {
                        return zero ? 0.0 : randomScalingFactor();
                    });
                }
            }
            var addDataset = function(){
                    var newDataset = {
                    label: 'Dataset ' + horizontalBarChartData.datasets.length,
                    backgroundColor: randomColor(),
                    data: []
                };
            }
            var addData = function(){

                for (var index = 0; index < horizontalBarChartData.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());
                }
                if (horizontalBarChartData.datasets.length > 0) {
                    var month = MONTHS[horizontalBarChartData.labels.length % MONTHS.length];
                    horizontalBarChartData.labels.push(month);

                    for (var index = 0; index < horizontalBarChartData.datasets.length; ++index) {
                        horizontalBarChartData.datasets[index].data.push(randomScalingFactor());
                    }
                }
            }
            var removeDataset = function(){
                horizontalBarChartData.datasets.splice(0, 1);
            }
            var removeData = function(){
                horizontalBarChartData.labels.splice(-1, 1); // remove the label first

            horizontalBarChartData.datasets.forEach(function (dataset, datasetIndex) {
                dataset.data.pop();
            });
            }
        }
    show (position, x, y){

        var div = document.createElement ("div");
        var canvas = document.createElement("canvas");

        div1.appendChild(div);
        div.appendChild(canvas);

        div.id = "container";
        div.style = "width: 75%"
        canvas.id = "canvas";

        var horizontalBarChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: "rgba(220,220,220,0.5)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }, {
                hidden: true,
                label: 'Dataset 2',
                backgroundColor: "rgba(151,187,205,0.5)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }, {
                label: 'Dataset 3',
                backgroundColor: "rgba(151,187,205,0.5)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }]

        };


            var ctx = document.getElementById("canvas").getContext("2d");
            window.myHorizontalBar = new Chart(ctx, {
                type: 'horizontalBar',
                data: horizontalBarChartData,
                options: {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each horizontal bar to be 2px wide and green
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: 'rgb(0, 255, 0)',
                            borderSkipped: 'left'
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Horizontal Bar Chart'
                    }
                }
            });
    }
}
