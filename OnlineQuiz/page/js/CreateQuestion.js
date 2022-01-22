(() => {
  const $$ =document.querySelectorAll.bind(document);
  const $id=document.getElementById.bind(document);
  const templateElement =$id("question__item");
  const btn =$id("btnCreate");

  btn.addEventListener("click", () => {
    const nodeElement = templateElement.content.cloneNode(true);
    const container = $id("main");
    container.appendChild(nodeElement);

    const listItem =$$(".question__item");
    const count = listItem.length;
   $id("countData").value = count;
   $id("countQuestion").innerText = count;
    for (let i = listItem.length - 1; i < listItem.length; i++) {
      const listTextarea = listItem[i].querySelectorAll("textarea");
      console.log(i + 1, ":", listTextarea);
      for (let j = 0; j < listTextarea.length; j++) {
        const attr = listTextarea[j].getAttribute("name");
        listTextarea[j].setAttribute("name", attr + i);
        console.log(listTextarea[j].getAttribute("name"));
      }
      //selectItem
      const selectItem = listItem[i].querySelector("select");
      const attr = selectItem.getAttribute("name");
      selectItem.setAttribute("name", attr + i);
      console.log(selectItem.getAttribute("name"));

      const item = "item__" + `${i}`;
      listItem[i].classList.add(item);
      listItem[i].querySelector("p").textContent = "Câu " + (i + 1);
    }
  });
})();
