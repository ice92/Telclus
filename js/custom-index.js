

// Morris Charts and Graphs
function socialGraph(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: 47, label: 'Bronze'},
      {value: 28, label: 'Silver'},
      {value: 17, label: 'Gold'},
      {value: 8, label: 'Platinum'}
    ],
    colors: ['#d4a76b', '#867f79', '#ffbf00', '#b5d9d6'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
function socialGraph1(){
  Morris.Donut({
    element: 'socialGraph1',
    data: [
      {value: 47, label: 'Facebook'},
      {value: 28, label: 'Twitter'},
      {value: 17, label: 'Google+'},
      {value: 8, label: 'Linkedin'}
    ],
    colors: ['#ff0000', '#7030a0', '#ffc000', '#5b6c00', '#5e341c', '#68a19c', '#44546a'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
function socialGraph2(){
  Morris.Donut({
    element: 'socialGraph2',
    data: [
      {value: 47, label: 'Facebook'},
      {value: 28, label: 'Twitter'},
      {value: 24, label: 'Google+'},
      {value: 1, label: 'Linkedin'}
    ],
    colors: ['#f98a5f', '#775ba3', '#91c5a9'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
function socialGraph3(){
  Morris.Donut({
    element: 'socialGraph3',
    data: [
      {value: 47, label: 'Facebook'},
      {value: 28, label: 'Twitter'},
      {value: 17, label: 'Google+'},
      {value: 8, label: 'Linkedin'}
    ],
    colors: ['#002060', '#00b050', '#ffff00', '#ed7d31'],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
$(document).ready(function () {
  socialGraph();
  socialGraph1();
  socialGraph2();
  socialGraph3();
});

//Resize charts and graphs on window resize
$(document).ready(function () {
  $(window).resize(function(){
    socialGraph();
    socialGraph1();
    socialGraph2();
    socialGraph3();

  });
});
