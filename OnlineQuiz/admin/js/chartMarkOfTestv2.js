
//getData
let listMarks = document.querySelectorAll(".mark");
let arrayMark = []
listMarks.forEach(function (listMark) {
  return arrayMark.push(listMark)
})
var arrayListMark = arrayMark.map(function (listMark) {
  return listMark.innerHTML
})

//get tiêu đề
let listUserNames = document.querySelectorAll(".userName")
let arrayUserName = []
listUserNames.forEach(function (listUserName) {
  return arrayUserName.push(listUserName)
})
var arrayListUserName = arrayUserName.map(function (listUserName) {
  return listUserName.innerHTML
})
// Chart bar
var myChartBar = document.querySelector('#myChartBar').getContext('2d');
// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

configBar = {
  type: 'bar', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
  data: {
    labels: [
      `${arrayListUserName[0]}`,
      `${arrayListUserName[1]}`,
      `${arrayListUserName[2]}`,
      `${arrayListUserName[3]}`,
      `${arrayListUserName[4]}`,
      `${arrayListUserName[5]}`,
      `${arrayListUserName[6]}`,
      `${arrayListUserName[7]}`,
      `${arrayListUserName[8]}`,
      `${arrayListUserName[9]}`,
    ],
    datasets: [{
      label: 'Điểm số',
      data: [
        `${arrayListMark[0]}`,
        `${arrayListMark[1]}`,
        `${arrayListMark[2]}`,
        `${arrayListMark[3]}`,
        `${arrayListMark[4]}`,
        `${arrayListMark[5]}`,
        `${arrayListMark[6]}`,
        `${arrayListMark[7]}`,
        `${arrayListMark[8]}`,
        `${arrayListMark[9]}`,

      ],
      //backgroundColor:'green',
      backgroundColor: [
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',


      ],
      borderWidth: 1,
      borderColor: '#777',
      hoverBorderWidth: 3,
      hoverBorderColor: [
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',


      ],
    },
    ]
  },
  options: {

    legend: {
      display: true,
      position: 'top',
      labels: {
        fontColor: '#000'
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        }
      }]
    },
    tooltips: {
      enabled: true
    },

  }
}
var myChartBar = new Chart(myChartBar, configBar)


// Chart Line
let myChartLine = document.querySelector('#myChartLine').getContext('2d');
// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

var configLine = {
  type: 'line', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
  data: {
    labels: [
      `${arrayListUserName[0]}`,
      `${arrayListUserName[1]}`,
      `${arrayListUserName[2]}`,
      `${arrayListUserName[3]}`,
      `${arrayListUserName[4]}`,
      `${arrayListUserName[5]}`,
      `${arrayListUserName[6]}`,
      `${arrayListUserName[7]}`,
      `${arrayListUserName[8]}`,
      `${arrayListUserName[9]}`,

    ],
    datasets: [{
      label: 'Điểm số',
      data: [
        `${arrayListMark[0]}`,
        `${arrayListMark[1]}`,
        `${arrayListMark[2]}`,
        `${arrayListMark[3]}`,
        `${arrayListMark[4]}`,
        `${arrayListMark[5]}`,
        `${arrayListMark[6]}`,
        `${arrayListMark[7]}`,
        `${arrayListMark[8]}`,
        `${arrayListMark[9]}`,


      ],
      //backgroundColor:'green',
      borderWidth: 1,
      pointHoverBackgroundColor: "red",
      pointBorderColor: "green",
      pointBackgroundColor: "green",
      strokeColor: "green",
      borderColor: "green",
      tension: 0,
      fill: false,
    },]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
    },
    tooltips: {
      enabled: true
    },
    scales: {

      xAxes: [{
        ticks: {
          display: false
        }
      }]
    },


  },
}

// chart HorizontalBar


let myChartHorizontalBar = document.querySelector('#myChartHorizontalBar').getContext('2d');
// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

var configHorizontalBar = {
  type: 'horizontalBar', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
  data: {
    labels: [
      `${arrayListUserName[0]}`,
      `${arrayListUserName[1]}`,
      `${arrayListUserName[2]}`,
      `${arrayListUserName[3]}`,
      `${arrayListUserName[4]}`,
      `${arrayListUserName[5]}`,
      `${arrayListUserName[6]}`,
      `${arrayListUserName[7]}`,
      `${arrayListUserName[8]}`,
      `${arrayListUserName[9]}`,

    ],
    datasets: [{
      label: 'Điểm số',
      data: [
        `${arrayListMark[0]}`,
        `${arrayListMark[1]}`,
        `${arrayListMark[2]}`,
        `${arrayListMark[3]}`,
        `${arrayListMark[4]}`,
        `${arrayListMark[5]}`,
        `${arrayListMark[6]}`,
        `${arrayListMark[7]}`,
        `${arrayListMark[8]}`,
        `${arrayListMark[9]}`,


      ],
      //backgroundColor:'green',
      backgroundColor: [
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',

      ],
      borderWidth: 1,
      borderColor: '#777',
      hoverBorderWidth: 3,
      hoverBorderColor: [
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',

      ],
    },
    ]
  },
  options: {

    legend: {
      display: true,
      position: 'top',
      labels: {
        fontColor: '#000'
      }
    },
    scales: {
      xAxes: [{
        ticks: {
          beginAtZero: true
        }
      }],
      yAxes: [{
        ticks: {
          display: false
        }
      }]
    },
    tooltips: {
      enabled: true
    },

  }
}


document.querySelector('.itemBar').onclick = function () {
  myChartBar = new Chart(myChartBar, configBar);

}
document.querySelector('.itemLine').onclick = function () {
  myChartLine = new Chart(myChartLine, configLine);
}
document.querySelector('.itemHorizontalBar').onclick = function () {
  myChartHorizontalBar = new Chart(myChartHorizontalBar, configHorizontalBar);
}
