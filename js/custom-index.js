function drawChart1() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Bronze', data1],
    ['Silver', data2],
    ['Gold', data3],
    ['Platinum', data4],
    ['Apartemen', data5],
    ['No Data', data6]
    ]);

  var options = {
    width: 'auto',
    height: '265',
    backgroundColor: 'transparent',
    colors: ['#d4a76b', '#867f79', '#ffbf00', '#b5d9d6','#5b6c00','#fafafa'],
    tooltip: {
      textStyle: {
        color: '#666666',
        fontSize: 11
      },
      showColorCode: true
    },
    legend: {
      position: 'left',
      textStyle: {
        color: 'black',
        fontSize: 12
      }
    },
    chartArea: {
      left: 0,
      top: 10,
      width: "100%",
      height: "100%"
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('pie_chart1'));
  chart.draw(data, options);
}
function drawChart2() {
  
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Indihome', data1],
    ['First Media', data2],
    ['MNC Play', data3],
    ['Indovision', data4],
    ['Biz Net', data5],
    ['Next Media', data6],
    ['Lain Lain', data7],
    ['No Data', data8],    
    ]);

  var options = {
    width: 'auto',
    height: '265',
    backgroundColor: 'transparent',
    colors: ['#ff0000', '#44546a', '#68a19c', '#5e341c', '#5b6c00', '#ffc000', '#7030a0','#fafafa'],
    tooltip: {
      textStyle: {
        color: '#666666',
        fontSize: 11
      },
      showColorCode: true
    },
    legend: {
      position: 'left',
      textStyle: {
        color: 'black',
        fontSize: 12
      }
    },
    chartArea: {
      left: 0,
      top: 10,
      width: "100%",
      height: "100%"
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('pie_chart2'));
  chart.draw(data, options);
}
function drawChart3() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['IP', 35.35],
    ['2P', 20.20],
    ['3P', 45.45],
    
    ]);

  var options = {
    width: 'auto',
    height: '265',
    backgroundColor: 'transparent',
    colors: ['#d4a76b', '#867f79', '#ffbf00', '#b5d9d6'],
    tooltip: {
      textStyle: {
        color: '#666666',
        fontSize: 11
      },
      showColorCode: true
    },
    legend: {
      position: 'left',
      textStyle: {
        color: 'black',
        fontSize: 12
      }
    },
    chartArea: {
      left: 0,
      top: 10,
      width: "100%",
      height: "100%"
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('pie_chart3'));
  chart.draw(data, options);
}




function drawChart4() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['0%-20%', 47],
    ['20%-50%', 11],
    ['50%-80%', 17],
    ['80%-100%', 8],    
    ]);

  var options = {
    width: 'auto',
    height: '265',
    backgroundColor: 'transparent',
    colors: ['#00b050', '#ffff00', '#ed7d31', '#002060'],
    tooltip: {
      textStyle: {
        color: '#666666',
        fontSize: 11
      },
      showColorCode: true
    },
    legend: {
      position: 'left',
      textStyle: {
        color: 'black',
        fontSize: 12
      }
    },
    chartArea: {
      left: 0,
      top: 10,
      width: "100%",
      height: "100%"
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('pie_chart4'));
  chart.draw(data, options);
}


function callback(data){ 
    data=JSON.parse(data); 
    data1=+data[0];
    data2=+data[1];
    data3=+data[2];
    data4=+data[3];
    data5=+data[4];
    data6=+data[5];
    data7=+data[6];
    data8=+data[7];
    // alert(data[2]) ;
}


function aza(data="getdata.php"){
var httpRequest = new XMLHttpRequest;
httpRequest.onload = function(){
    if (httpRequest.readyState === 4) {// request is done
        if (httpRequest.status === 200) {// successfully
            callback(httpRequest.responseText);// we're calling our method            
              drawChart1();              
              drawChart3();
              drawChart4();
        }
    }
};
httpRequest.open('GET', data);
httpRequest.send();
}

function aza2(data="getdata2.php"){
var httpRequest = new XMLHttpRequest;
httpRequest.onload = function(){
    if (httpRequest.readyState === 4) {// request is done
        if (httpRequest.status === 200) {// successfully
            callback(httpRequest.responseText);// we're calling our method            
              drawChart2();              
        }
    }
};
httpRequest.open('GET', data);
httpRequest.send();
}

// function loadDoc(data) {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("myTabContent").innerHTML =
//       this.responseText;
//     }
//   };
//   xhttp.open("GET", data, true);
//   xhttp.send();
// }



$(document).ready(function () {  
  aza();
  aza2();
  // socialGraph();
  // socialGraph1();
  // socialGraph2();
  // // socialGraph3();
});

// Resize charts and graphs on window resize
$(document).ready(function () {
  $(window).resize(function(){
    drawChart1();
    drawChart2();
        drawChart3();
    drawChart4();

    // socialGraph();
    // socialGraph1();
    // socialGraph2();
    // socialGraph3();

  });
});
