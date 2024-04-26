 // Set the date we're counting down to
var countDownDate = new Date("Apr10, 2024 9:00:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "ايام " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثواني ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "راحت عليك <br> خيرها بغيرها";
    
    
  }

  if (distance < 0) {
   win.addEventListener('click',function() {
     loader.style.display = 'block';
    sim = setInterval(progressSim, 20); 
          
   });}
}, 1000);





