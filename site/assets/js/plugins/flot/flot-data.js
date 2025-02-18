// Flot Charts sample data for SB Admin template

// Monthly Registration and Revenue Chart
$(document).ready(function() {
    // Monthly Registration Data
    var registrations = [
        [new Date('2024-01-01').getTime(), 245],
        [new Date('2024-02-01').getTime(), 312],
        [new Date('2024-03-01').getTime(), 198],
        [new Date('2024-04-01').getTime(), 156]
    ];

    var revenue = [
        [new Date('2024-01-01').getTime(), 15600],
        [new Date('2024-02-01').getTime(), 19450],
        [new Date('2024-03-01').getTime(), 12250],
        [new Date('2024-04-01').getTime(), 9450]
    ];

    var options = {
        series: {
            lines: { show: true },
            points: { show: true }
        },
        grid: {
            hoverable: true
        },
        xaxis: {
            mode: "time",
            timeformat: "%b %Y"
        },
        yaxes: [
            { min: 0 },  // Left y-axis
            {           // Right y-axis
                min: 0,
                position: "right",
                tickFormatter: function(v) {
                    return "$" + v;
                }
            }
        ],
        tooltip: true,
        tooltipOpts: {
            content: "%s: %y",
            xDateFormat: "%b %Y"
        }
    };

    $.plot($("#flot-line-chart"), [
        { 
            data: registrations,
            label: "Registrations",
            yaxis: 1
        },
        { 
            data: revenue,
            label: "Revenue",
            yaxis: 2
        }
    ], options);
});

// Runner Demographics Pie Chart
$(function() {
    var data = [
        { label: "18-24", data: 345 },
        { label: "25-34", data: 810 },
        { label: "35-44", data: 1012 },
        { label: "45-54", data: 601 },
        { label: "55+", data: 221 }
    ];

    var options = {
        series: {
            pie: {
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 2/3,
                    formatter: function(label, series) {
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'
                            + label + '<br/>' + Math.round(series.percent) + '%</div>';
                    },
                    threshold: 0.1
                }
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0% (%s)",
            shifts: {
                x: 20,
                y: 0
            }
        }
    };

    $.plot("#flot-pie-chart", data, options);
});

// Race Participation Bar Chart
$(function() {
    var data = [
        {
            label: "Spring Marathon",
            data: [[1, 1265]],
            bars: { show: true }
        },
        {
            label: "Summer Half",
            data: [[2, 861]],
            bars: { show: true }
        },
        {
            label: "Winter 10K",
            data: [[3, 665]],
            bars: { show: true }
        }
    ];

    var options = {
        grid: {
            hoverable: true,
            borderWidth: 1
        },
        bars: {
            align: "center",
            barWidth: 0.5
        },
        xaxis: {
            ticks: [[1, "Spring"], [2, "Summer"], [3, "Winter"]]
        },
        tooltip: true,
        tooltipOpts: {
            content: "%s: %y runners"
        }
    };

    $.plot("#flot-multiple-axes-chart", data, options);
});
