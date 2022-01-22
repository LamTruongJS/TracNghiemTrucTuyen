
//getData
let listMarks = document.querySelectorAll(".mark");
let arrayMark = []
listMarks.forEach(function (listMark) {
  return arrayMark.push(listMark)
})
var arrayListMark = arrayMark.map(function (listMark) {
  return listMark.innerHTML
})
//đếm sự xuất hiện phần tử
function count_element_in_array(array, x, y) {
  let count = 0;
  for (let i = 0; i < array.length; i++) {
    if (x <= array[i] && array[i] < y) //Tìm thấy phần tử giống x trong mảng thì cộng biến đếm
      count++;
  }
  return count;
}
const arrayResult = [];
for (let i = 0; i <= 10; i++) {
  const res = count_element_in_array(arrayListMark, i, i + 1);
  arrayResult.push(res);
}
console.log(arrayResult);
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
      "[0-1)", "[1-2)", "[2-3)", "[3-4)", "[4-5)", "[5-6)", "[6-7)", "[7-8)", "[8-9)", "[9-10)", "[10]",],
    datasets: [{
      label: 'Số lượng',
      data: [
        `${arrayResult[0]}`,
        `${arrayResult[1]}`,
        `${arrayResult[2]}`,
        `${arrayResult[3]}`,
        `${arrayResult[4]}`,
        `${arrayResult[5]}`,
        `${arrayResult[6]}`,
        `${arrayResult[7]}`,
        `${arrayResult[8]}`,
        `${arrayResult[9]}`,
        `${arrayResult[10]}`,

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
        'rgba(11, 232, 129,1.0)',

      ],
    },
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Biểu đồ thống kê điểm'
    },
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
          beginAtZero: true
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
      "[0-1)", "[1-2)", "[2-3)", "[3-4)", "[4-5)", "[5-6)", "[6-7)", "[7-8)", "[8-9)", "[9-10)", "[10]",

    ],
    datasets: [{
      label: 'Số lượng',
      data: [
        `${arrayResult[0]}`,
        `${arrayResult[1]}`,
        `${arrayResult[2]}`,
        `${arrayResult[3]}`,
        `${arrayResult[4]}`,
        `${arrayResult[5]}`,
        `${arrayResult[6]}`,
        `${arrayResult[7]}`,
        `${arrayResult[8]}`,
        `${arrayResult[9]}`,
        `${arrayResult[10]}`,


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
    title: {
      display: true,
      text: 'Biểu đồ thống kê điểm'
    },
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
          beginAtZero: true,

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
      "[0-1)", "[1-2)", "[2-3)", "[3-4)", "[4-5)", "[5-6)", "[6-7)", "[7-8)", "[8-9)", "[9-10)", "[10]",
    ],
    datasets: [{
      label: 'Số lượng',
      data: [
        `${arrayResult[0]}`,
        `${arrayResult[1]}`,
        `${arrayResult[2]}`,
        `${arrayResult[3]}`,
        `${arrayResult[4]}`,
        `${arrayResult[5]}`,
        `${arrayResult[6]}`,
        `${arrayResult[7]}`,
        `${arrayResult[8]}`,
        `${arrayResult[9]}`,
        `${arrayResult[10]}`,


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
        'rgba(11, 232, 129,1.0)',

      ],
    },
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Biểu đồ thống kê điểm'
    },
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
          beginAtZero: true
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
