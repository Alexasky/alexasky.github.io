
var clock;
var dt = "February 19 2018 13:43:00";
var first = new Date(dt);
var last = Date.now();
var remaining = first - last;
remaining/=1000;
if(remaining>0){
  $(document).ready(function() {
    clock = $('.clock').FlipClock(remaining, {
          clockFace: 'HourlyCounter',
          countdown: true,
          callbacks: {
            stop: function() {

            }
          }
      });
  });
}else{

  $(document).ready(function() {
    clock = $('.clock').FlipClock(0, {
          clockFace: 'HourlyCounter',
          countdown: true,
          callbacks: {
            stop: function() {

            }
          }
      });
  });
$('.message').html('');

}
