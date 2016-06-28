class LineLegend{

    getName(){
        return "LINELEGEND";
    }

    randomScalingFactor() {
        return Math.round(Math.random() * 100);
    }

    randomColorFactor() {
        return Math.round(Math.random() * 255);
    }

    randomColor(opacity) {
        return 'rgba(' + this.randomColorFactor() + ',' + this.randomColorFactor() + ',' + this.randomColorFactor() + ',' + (opacity || '.3') + ')';
    }
    addDataBase() {
        
        var conf_dataset = function(config){  
            $.each(config.data.datasets, function(i, dataset){
                var background = this.randomColor(0.5);
                dataset.borderColor = background;
                dataset.backgroundColor = background;
                dataset.pointBorderColor = background;
                dataset.pointBackgroundColor = background;
                dataset.pointBorderWidth = 1;
            });
        }

        var randomizeData = function(){
            $.each(config.data.datasets, function(i, dataset) {
                dataset.data = dataset.data.map(function() {
                    return this.randomScalingFactor();
                });
            });
        }

        var addDataset = function(){
            var background = this.randomColor(0.5);
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                borderColor: background,
                backgroundColor: background,
                pointBorderColor: background,
                pointBackgroundColor: background,
                pointBorderWidth: 1,
                fill: false,
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()],
            };
        }

        var addData = function(){
            var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                $.each(config.data.datasets, function(i, dataset) {
                    dataset.data.push(this.randomScalingFactor());
                });
            }
        }

        var removeDataset = function(){
            config.data.datasets.splice(0, 1);
        }

        var removeData = function(){
            config.data.labels.splice(-1, 1); // remove the label first
            config.data.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });
        }
    }

    show (position, x, y){
        var background1 = this.randomColor(0.5);

        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My Third dataset - No bezier",
                    data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()],
                    borderColor: background1,
                    backgroundColor: background1,
                    pointBorderColor: background1,
                    pointBackgroundColor: background1,
                    pointBorderWidth: 1,
                    lineTension: 0,//Deixa em forma de reta
                    fill: false,
                    //borderDash: [5, 5]//tacejada
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                hover: {
                    mode: 'label'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Chart.js Line Chart - Legend'
                }
            }
        };

        //var div = document.createElement("div");
        var canvas = document.createElement("canvas");
        //div.appendChild(canvas);
        document.body.appendChild(canvas);
        var lineLegend = new Chart(canvas, config);
        canvas.id = "canvas";

    }
}
