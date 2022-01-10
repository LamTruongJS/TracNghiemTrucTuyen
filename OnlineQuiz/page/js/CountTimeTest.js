(() => {
  const $id= document.getElementById.bind(document);
  const time = $id("time__test").innerText;
  const timeCount = $id("time__count");
  let timeSum = time * 60;
  setInterval(() => {
    timeSum -= 1;
    let minute = Math.trunc(timeSum / 60);
    let second = timeSum % 60;
    timeCount.textContent = `${minute
      .toString()
      .padStart(3, "0")
      .slice(1)} phút ${second.toString().padStart(3, "0").slice(1)} giây`;
  }, 1000);
})();
