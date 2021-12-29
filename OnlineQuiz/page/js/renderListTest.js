(() => {
  const count = document.querySelector(".sumTest").value;
  console.log(count);
  const listTest = document.getElementById("listTest");
  console.log(listTest);
  if (count > 0) {
    const item = document.querySelector("topic__item");
    listTest.createTextNode(item);
  }
})();
