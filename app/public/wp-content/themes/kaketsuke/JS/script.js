


function Time() {
  var realTime = new Date();
  var hour = realTime.getHours();
  var minutes  = realTime.getMinutes();
  var text = hour + ":" + (minutes < 10 ? "0" + minutes : minutes);
  document.getElementById("real-time").innerHTML = text;
}
setInterval(Time, 1000);