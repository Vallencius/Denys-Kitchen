(function () {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;
  
      var oprec = new Date('May 8, 2021 00:00:00');
      countDown = oprec.getTime(),
      
      x = setInterval(function () {
        let now = new Date().getTime(),
          distance = countDown - now;
          
        (document.getElementById("day-now").innerText = "DAY " + (12 - Math.floor(distance / day))),
        (document.getElementById("day-left").innerText = Math.floor(distance / day) + " DAYS LEFT")

        //do something later when date is reached
        if (distance < 0) {  
          clearInterval(x);
        }
        //seconds
      }, 0);
  })();
  