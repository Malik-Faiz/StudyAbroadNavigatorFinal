
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        

        axisX: {
            interval: 10,
            tickLength: 15,
            tickColor: "red",
        },
        data: [
            
            {
                type: "area",
                fillOpacity: 0,
                name: "Total Listing",
                lineColor: "#5267ff",
                showInLegend: true,
                markerType: "none",
                toolTipContent: '<span style="color:#5267ff"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total',
                markerSize: 0,
               
                dataPoints: [
                    { x: new Date(2012, 00, 1), y: 2100 },
                    { x: new Date(2012, 00, 2), y: 15000 },
                    { x: new Date(2012, 00, 3), y: 4100 },
                    { x: new Date(2012, 00, 4), y: 2100 },
                    { x: new Date(2012, 00, 5), y: 3900 },
                    { x: new Date(2012, 00, 6), y: 4200 },
                    { x: new Date(2012, 00, 7), y: 7800 },
                    { x: new Date(2012, 00, 8), y: 5000 },
                    { x: new Date(2012, 00, 9), y: 3200 },
                    { x: new Date(2012, 00, 10), y: 5000 },
                ],
            },
            {
                type: "area",
                fillOpacity: 0.0,
                name: "Free",
                lineColor: "#26bfb4",
                showInLegend: true,
                markerType: "none",
                markerSize: 0,
                toolTipContent: '<span style="color:#26bfb4"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total',
                dataPoints: [
                    { x: new Date(2012, 00, 1), y: 2100 },
                    { x: new Date(2012, 00, 2), y: 8000 },
                    { x: new Date(2012, 00, 3), y: 3300 },
                    { x: new Date(2012, 00, 4), y: 1900 },
                    { x: new Date(2012, 00, 5), y: 1200 },
                    { x: new Date(2012, 00, 6), y: 4400 },
                    { x: new Date(2012, 00, 7), y: 5500 },
                    { x: new Date(2012, 00, 8), y: 7700 },
                    { x: new Date(2012, 00, 9), y: 2200 },
                    { x: new Date(2012, 00, 10), y: 2000 },
                ],
            },
            {
                type: "area",
                fillOpacity: 0.0,
                name: "Hot",
                lineColor: "#f94e67",
                showInLegend: true,
                markerType: "none",
                toolTipContent: '<span style="color:#f94e67"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total',
                markerSize: 0,
                dataPoints: [
                    { x: new Date(2012, 00, 1), y: 2600 },
                    { x: new Date(2012, 00, 2), y: 3800 },
                    { x: new Date(2012, 00, 3), y: 4300 },
                    { x: new Date(2012, 00, 4), y: 2900 },
                    { x: new Date(2012, 00, 5), y: 4100 },
                    { x: new Date(2012, 00, 6), y: 4500 },
                    { x: new Date(2012, 00, 7), y: 8600 },
                    { x: new Date(2012, 00, 8), y: 6400 },
                    { x: new Date(2012, 00, 9), y: 5300 },
                    { x: new Date(2012, 00, 10), y: 6000 },
                ],
            },
          
            {
                type: "area",
                fillOpacity: 0.0,
                name: " Super Hot ",
                lineColor: "#865cf7",
                showInLegend: true,
                markerType: "none",
                markerSize: 0,
                toolTipContent: '<span style="color:#865cf7"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total',
                dataPoints: [
                    { x: new Date(2012, 00, 1), y: 5000 },
                    { x: new Date(2012, 00, 2), y: 200 },
                    { x: new Date(2012, 00, 3), y: 3900 },
                    { x: new Date(2012, 00, 4), y: 1200 },
                    { x: new Date(2012, 00, 5), y: 1000 },
                    { x: new Date(2012, 00, 6), y: 4400 },
                    { x: new Date(2012, 00, 7), y: 2100 },
                    { x: new Date(2012, 00, 8), y: 2300 },
                    { x: new Date(2012, 00, 9), y: 8900 },
                    { x: new Date(2012, 00, 10), y: 7000 },
                ],
            },
        ],
    });

    chart.render();
};