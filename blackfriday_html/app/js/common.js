
$(document).ready(function(){
  var clock;
  clock = $(".clock").FlipClock({
    clockFace : "HourlyCounter",
    autoStart : true,
    language : "bg",
    
  });
  var dt = "February 15 2018 20:22:48";
  var first = new Date(dt);
  var last = Date.now();
  var remaining = first - last;
  remaining/=1000;
  clock.setTime(remaining);
  clock.setCountdown(true);
  clock.start();
});
