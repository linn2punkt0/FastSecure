
// The date we are counting down to
var countDownDate = new Date("Dec 13, 2019 15:37:25").getTime();
var x = setInterval(function() {
var now = new Date().getTime();

var distance = countDownDate - now;

var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);


document.getElementById("counter").innerHTML = days + "days " + hours + "hours "
    + minutes + "minutes " + seconds + "seconds ";

// Text if count down is over:
if (distance < 0) {
clearInterval(x);
document.getElementById("counter").innerHTML = "FS1.0 is released!";
}
}, 1000);
