(() => {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const listElements = $$('table tbody tr');
    const arrayElements = [];
    const container = $('table tbody');
    for (let i = 0; i < listElements.length; i++) {
        const itemElement = listElements[i].querySelectorAll('td');
        const item = {
            first: itemElement[0].innerText,
            second: itemElement[1].innerText,
            third: itemElement[2].innerText,
            fourth: itemElement[3].innerText,
            five: itemElement[4].innerText,
            six: itemElement[5].innerText
        }
        arrayElements.push(item);
    }
    const inputSearch = $('.text__search');


    inputSearch.addEventListener('input', () => {
        container.innerHTML = '';
        textSearch = inputSearch.value;
        const arrayResult = [];
        for (let i = 0; i < arrayElements.length; i++) {
            const arrayIndex = ['first', 'second', 'fourth', 'five']; // danh mục tìm kiếm
            for (let j = 0; j < arrayIndex.length; j++) {
                if (arrayElements[i][arrayIndex[j]].trim().toLowerCase().includes(textSearch.trim().toLowerCase())) {
                    arrayResult.push(arrayElements[i]);
                    break;
                }
            }
        }
        for (let i = 0; i < arrayResult.length; i++) {
            let text = "";
            if (arrayResult[i].six == '0') {
                text = `<a href='../lock_unlock/lock.php?maUser=${arrayResult[i].first}' ><img class='d-inline' src='../../image/padlock.png'  style='width: 1.4rem'/></a>`;
            }
            else {
                text = `<a href='../lock_unlock/Unlock.php?maUser=${arrayResult[i].first}' ><img class='d-inline' src='../../image/Unlock.png'  style='width: 1.4rem'/></a>`;
            }
            container.innerHTML += `<tr>
                                        <th scope='row'>${i + 1}</th>
                                        <td>${arrayResult[i].first}</td>
                                        <td>${arrayResult[i].second}</td>
                                        <td>${arrayResult[i].third}</td>
                                        <td>${arrayResult[i].fourth}</td>
                                        <td>${arrayResult[i].five}</td>
                                        <td align='center'>                                
                                        <a href='../editAccount?maUser=${arrayResult[i].first}' ><img class='d-inline mr-1' src='../../image/pencil.png' style='width:1.4rem'/></a>                             
                                         ${text}
                                       
                                      </td>
                                    </tr>`
        }
    })

})();