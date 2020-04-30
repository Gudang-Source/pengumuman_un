
// Set the date we're counting down to
var countDownDate = new Date("April 30, 2020 00:00:00").getTime();

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
  document.getElementById("demo").innerHTML = "<center><div id='clockdiv'> <div><span>" + days + "</span><div class='smalltext'>Hari</div></div> <div><span>" + hours + " </span><div class='smalltext'>Jam</div></div> <div><span> "
  + minutes + " </span><div class='smalltext'>Menit</div></div> <div><span> " + seconds + " </span><div class='smalltext'>Detik</div></div></div></center>";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = '<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="./"> <div class="wrap-input100 validate-input" data-validate = "Masukan username"> <input class="input100" type="text" name="username" placeholder="User name" > <span class="focus-input100" data-placeholder="&#xe82a;"></span> </div> <div class="wrap-input100 validate-input" data-validate="Masukan password"> <input class="input100" type="password" name="password" placeholder="Password"> <span class="focus-input100" data-placeholder="&#xe80f;"></span> </div> <div class="container-login100-form-btn m-t-32"> <button class="login100-form-btn" name="login"> Login </button> </div> </form>';
  }
}, 1000);