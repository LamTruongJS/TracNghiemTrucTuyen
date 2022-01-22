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
            five: itemElement[4].innerText
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
            container.innerHTML += `<tr style='cursor:pointer;'>
                                        <th scope='row'>${i + 1}</th>
                                        <td>${arrayResult[i].first}</td>
                                        <td>${arrayResult[i].second}</td>
                                        <td>${arrayResult[i].third}</td>
                                        <td>${arrayResult[i].fourth}</td>
                                        <td>${arrayResult[i].five}</td>
                                        <td><a class='btn btn-outline-primary mb-1' href='./markOfTestv1.php?maBKT=${arrayResult[i].first}'>Thống kê v1</a>
                                        <a class='btn btn-outline-primary' href='./markOfTestv2.php?maBKT=${arrayResult[i].first}'>Thống kê v2</a></td>
                                    </tr>`
        }
    })

})();