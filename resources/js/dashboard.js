/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // --- PRVI GRAFIKON: Line Chart ---
  var ctx = document.getElementById('myChart')
  if (ctx) { // Provera da li element postoji na stranici
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: window.chartLabels,
        datasets: [
          {
            label: 'Income',
            data: window.incomeData,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          },
          {
            label: 'Expense',
            data: window.expenseData,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#dc3545',
            borderWidth: 4,
            pointBackgroundColor: '#dc3545'
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: true
        }
      }
    })
  }

  // --- DRUGI GRAFIKON: Pie Chart ---
  var ctxPie = document.getElementById('myPieChart')
  if (ctxPie) {
    var myPieChart = new Chart(ctxPie, {
      type: 'pie',
      data: {
        labels: ['Total Income', 'Total Expense'],
        datasets: [{
          data: [
            window.totalIncomeSum, 
            window.totalExpenseSum
          ],
          backgroundColor: ['#007bff', '#dc3545'], // Plava i Crvena
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        legend: {
          display: true,
          position: 'bottom'
        }
      }
    })
  }
})()