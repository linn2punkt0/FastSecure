var countDown = new Date('june 21 2018 15:00:00').getTime();

var x = setInterval(() =>{

  var today = new Date().getTime();

  var distance = countDown - today;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var secounds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById('time').innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
}, 1000);



// https://www.youtube.com/watch?v=lemk-2hffFM
