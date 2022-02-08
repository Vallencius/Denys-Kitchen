(function () {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

  var oprec = new Date();
  oprec.setDate(oprec.getDate() + 1)
  oprec.setHours(0, 0, 0, 0);
  countDown = oprec.getTime(),

    x = setInterval(function () {
      let d = new Date();
      let localTime = d.getTime();
      let localOffset = d.getTimezoneOffset() * 60000;
      //420 buat GMT + 7 (TimeZone Indo)
      utc = localTime + localOffset + (420 * 60000);
      let now = new Date(utc + (3600000 * localOffset)).getTime(),
        distance = countDown - now;

      if (Math.floor((distance % day) / hour) >= 10) {
        h = Math.floor((distance % day) / hour)
      }
      else {
        h = "0" + Math.floor((distance % day) / hour)
      }

      if (Math.floor((distance % hour) / minute) >= 10) {
        m = Math.floor((distance % hour) / minute)
      }
      else {
        m = "0" + Math.floor((distance % hour) / minute)
      }

      if ((Math.floor((distance % minute) / second)) >= 10) {
        s = Math.floor((distance % minute) / second)
      }
      else {
        s = "0" + Math.floor((distance % minute) / second)
      }

      (document.getElementById("days").innerText = Math.floor(distance / day)),
        (document.getElementById("hours").innerText = h),
        (document.getElementById("minutes").innerText = m),
        (document.getElementById("seconds").innerText = s)

      //do something later when date is reached
      if (distance < 0) {
        clearInterval(x);
      }
      //seconds
    }, 0);
})();
