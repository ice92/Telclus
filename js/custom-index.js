

// Morris Charts and Graphs
function socialGraph(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: data1, label: 'Bronze'},
      {value: data2, label: 'Silver'},
      {value: data3, label: 'Gold'},
      {value: data4, label: 'Platinum'},
      {value: data5, label: 'Apartemen'},
      {value: data6, label: 'No Data'}
    ],
    colors: ['#d4a76b', '#867f79', '#ffbf00', '#b5d9d6','#5b6c00','#fafafa'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
function socialGraph1(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: data1, label: 'Indihome'},
      {value: data2, label: 'First Media'},
      {value: data3, label: 'MNC Play'},
      {value: data4, label: 'Indovision'},
      {value: data5, label: 'Biz Net'},
      {value: data6, label: 'Nex Media'},
      {value: data7, label: 'Lain Lain'},
      {value: data8, label: 'NO Data'}
    ],
    colors: ['#ff0000', '#44546a', '#68a19c', '#5e341c', '#5b6c00', '#ffc000', '#7030a0','#fafafa'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + " RW"}
  });
}function socialGraph2(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: 35.35, label: '1P'},
      {value: 20.20, label: '2P'},
      {value: 45.45, label: '3P'}
    ],
    colors: ['#d4a76b', '#867f79', '#ffbf00', '#b5d9d6'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}function socialGraph3(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: 47, label: '0%-20%'},
      {value: 11, label: '20%-50%'},
      {value: 17, label: '50%-80%'},
      {value: 8, label: '80%-100%'}
    ],
    colors: ['#00b050', '#ffff00', '#ed7d31', '#002060'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
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

function aza(data="getdata.php",i=1){
var httpRequest = new XMLHttpRequest;
httpRequest.onload = function(){
    if (httpRequest.readyState === 4) {// request is done
        if (httpRequest.status === 200) {// successfully
            callback(httpRequest.responseText);// we're calling our method
            if(i==1){
              socialGraph();
              loadDoc("graph1.txt");
            }
            else if(i==2){
              socialGraph1();
              loadDoc("graph2.txt");
            }
            else if(i==3){
              socialGraph2();
              loadDoc("graph3.txt");
            }
            else{
              socialGraph3();
              loadDoc("graph4.txt");
            }
        }
    }
};
httpRequest.open('GET', data);
httpRequest.send();
}

function loadDoc(data) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("myTabContent").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", data, true);
  xhttp.send();
}



$(document).ready(function () {  
  aza();
  // socialGraph();
  // socialGraph1();
  // socialGraph2();
  // // socialGraph3();
});

// Resize charts and graphs on window resize
$(document).ready(function () {
  $(window).resize(function(){
    socialGraph();
    socialGraph1();
    socialGraph2();
    socialGraph3();

  });
});
