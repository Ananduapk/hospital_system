// charts.js

document.addEventListener('DOMContentLoaded', function() {
    // Bar chart data
    var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Activity',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: [100, 250, 300, 620, 454, 545, 339]
        }]
    };

    // Get canvas element for the bar chart
    var ctxBar = document.getElementById('myBarChart');

    if (ctxBar) {
        // Bar chart
        var myBarChart = new Chart(ctxBar, {
            type: 'bar',
            data: barChartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    } else {
        console.error('Canvas element not found');
    }
});


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // Display the calendar in month view initially
        // Add any additional configurations here
    });

    calendar.render();
});
