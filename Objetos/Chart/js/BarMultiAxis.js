
class barMultiAxis{

	getName(){
		return "CHARTBARMULTIAXIS";
	}
	randomScalingFactor() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
	}
    randomColorFactor() {
            return Math.round(Math.random() * 255);
        }
    randomColor() {
            return 'rgba(' + this.randomColorFactor() + ',' + this.randomColorFactor() + ',' + this.randomColorFactor() + ',.7)';
        }
	addDataBase(){
		
    	var randomizeData = function() {
    		$.each(barChartData.datasets, function(i, dataset) {
            if (Chart.helpers.isArray(dataset.backgroundColor)) {
                dataset.backgroundColor= [this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor()];
            } else {
                dataset.backgroundColor= this.randomColor();
            }

            dataset.data = [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()];

        });
    	}

	}

	show(position, x, y){
  
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: "rgba(220,220,220,0.5)",
                yAxisID: "y-axis-1",
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            }, {
                label: 'Dataset 2',
                backgroundColor: "rgba(151,187,205,0.5)",
                yAxisID: "y-axis-2",
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            }, {
                label: 'Dataset 3',
                backgroundColor: [this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor(), this.randomColor()],
                yAxisID: "y-axis-1",
                data: [this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor(), this.randomScalingFactor()]
            }]

        };
    //window.onload = function() {
        //var ctx = document.getElementById("canvas").getContext("2d");
        var config = {
            data: barChartData, 
            options: {
                responsive: true,
                hoverMode: 'label',
                hoverAnimationDuration: 400,
                stacked: false,
                title:{
                    display:true,
                    text:"Chart.js Bar Chart - Multi Axis"
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",
                        gridLines: {
                            drawOnChartArea: false
                        }
                    }],
                }
            }
        };
    
		//var div = document.createElement("div");
		var canvas = document.createElement("canvas");
        document.body.appendChild(canvas);
        var myBar = new Chart(canvas, config);
        canvas.id = "canvas";
	}
}


