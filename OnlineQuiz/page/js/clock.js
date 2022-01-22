(() => {
  const text__clock = document.getElementById("text__clock");

  const d = new Date();

  const hour = d.getHours().toString();
  const minute = d.getMinutes().toString();
  const result =
    "Thứ " +
    (d.getDay() + 1) +
    " ngày " +
    d.getDate() +
    " tháng " +
    (d.getMonth() + 1) +
    ", " +
    hour.padStart(3, "0").slice(1) +
    ":" +
    minute.padStart(3, "0").slice(1);
  text__clock.textContent = result;
})();
