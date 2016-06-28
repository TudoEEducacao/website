
class ChartRadar{

    getName(){
        return "CHARTRADAR";
    }

    randomScalingFactor() {
            return Math.round(Math.random() * 100);
    }

    addDataBase(){
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function(opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };
        var randomizeData = function(){
            $.each(config.data.datasets, function(i, dataset) {
            dataset.data = dataset.data.map(function() {
            return randomScalingFactor();
                   });
            });
        }
        var addDataset = function(){
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                borderColor: randomColor(0.4),
                backgroundColor: randomColor(0.5),
                pointBorderColor: randomColor(0.7),
                pointBackgroundColor: randomColor(0.5),
                pointBorderWidth: 1,
                data: [],
            }
        }
        var addData = function(){
             if (config.data.datasets.length > 0) {
                config.data.labels.push('dataset #' + config.data.labels.length);
                $.each(config.data.datasets, function (i, dataset) {
                    dataset.data.push(randomScalingFactor());
                });
            }
        }
        var removeDataset = function(){
            config.data.datasets.splice(0, 1);
        }
        var removeData = function(){
            config.data.labels.pop(); // remove the label first
            $.each(config.data.datasets, function(i, dataset) {
                dataset.data.pop();
            });
        }
    }


    show(position, x, y){

        var config = {
        type: 'radar',
        data: {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: "rgba(220,220,220,0.2)",
                pointBackgroundColor: "rgba(220,220,220,1)",
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            }, {
                label: 'Hidden dataset',
                hidden: true,
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            }, {
                label: "My Second dataset",
                backgroundColor: "rgba(151,187,205,0.2)",
                pointBackgroundColor: "rgba(151,187,205,1)",
                hoverPointBackgroundColor: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            },]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Radar Chart'
            },
            scale: {
              reverse: false,
              gridLines: {
                color: ['black', 'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']
              },
              ticks: {
                beginAtZero: true
              }
            }
        }
    };

        var canvas = document.createElement("canvas");
        document.body.appendChild(canvas);
        var myRadar = new Chart(canvas, config);
        //document.body.appendChild(myRadar);
        //div.style = "width:75%";
        canvas.id = "canvas";
    }
}