class PolarArea{

	getName(){
		return "POLARAREA";
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

	addDataBase(){
        var randomizeData = function() {
            $.each(config.data.datasets, function(i, piece) {
                $.each(piece.data, function(j, value) {
                    config.data.datasets[i].data[j] = this.randomScalingFactor();
                    config.data.datasets[i].backgroundColor[j] = this.randomColor();
                });
            });
        }

        var addData = function() {
            if (config.data.datasets.length > 0) {
                config.data.labels.push('dataset #' + config.data.labels.length);

                $.each(config.data.datasets, function(i, dataset) {
                    dataset.backgroundColor.push(this.randomColor());
                    dataset.data.push(this.randomScalingFactor());
                });
            }
        }
        
        var removeData = function() {
            config.data.labels.pop(); // remove the label first

            $.each(config.data.datasets, function(i, dataset) {
                dataset.backgroundColor.pop();
                dataset.data.pop();
            });
        }
	}

	show(position, x, y){    
        var config = {
            data: {
                datasets: [{
                    data: [ this.randomScalingFactor(),
                            this.randomScalingFactor(),
                            this.randomScalingFactor(),
                            this.randomScalingFactor(),
                            this.randomScalingFactor(),
                        ],
                    backgroundColor: [
                        "#F7464A",
                        "#46BFBD",
                        "#FDB45C",
                        "#949FB1",
                        "#4D5360",
                    ],
                    label: 'My dataset' // for legend
                }],
                labels: [
                    "Red",
                    "Green",
                    "Yellow",
                    "Grey",
                    "Dark Grey"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Polar Area Chart'
                },
                scale: {
                  ticks: {
                    beginAtZero: true
                  },
                  reverse: false
                },
                animation: {
                    animateRotate: false,
                    animateScale: true
                }
            }
        };

		//var div = document.createElement("div");
		var canvas = document.createElement("canvas");
        //div.appendChild(canvas);
        var PolarArea = new Chart(canvas,config);
        document.body.appendChild(canvas);

        //div.id = "canvas-holder";
        canvas.id = "chart-area";
	}
}

