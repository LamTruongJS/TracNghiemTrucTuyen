(()=>{
    const $=document.querySelector.bind(document);
    const $$=document.querySelectorAll.bind(document);
    
    const container =$('.table__students');
   
    const trElement = container.querySelectorAll('tr');
  
    const arrayElement = [];
    for(let i=1; i<trElement.length; i++){
        const tdElement = trElement[i].querySelectorAll('td');    
           let element = {
                firstChild: tdElement[0].innerText,
                secondChild: tdElement[1].innerText,
                thirdChild: tdElement[2].innerText,
                fourChild: tdElement[3].innerText,
                fiveChild: tdElement[4].innerText,
            }
        arrayElement.push(element);
    }
    // console.log(arrayElement);
    const inputSearch= $('.form__search .search__input');
    console.log(inputSearch);
    inputSearch.addEventListener("input",()=>{
            container.innerHTML=`<tr>
                                    <th>STT</th>
                                    <th>Tên Sinh viên</th>
                                    <th>Email</th>
                                    <th>Điểm số</th>
                                    <th>Thời gian làm bài</th>
                                </tr>`;
            let value=inputSearch.value;
            const arrayIndex=[];
            for(let j=0;j<arrayElement.length;j++){
                const firstValue=arrayElement[j].secondChild;
                const secondValue=arrayElement[j].thirdChild;
                const thirdValue =arrayElement[j].fourChild;
            if(firstValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0|| secondValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0||thirdValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0){
                arrayIndex.push(j+1);    
            }
            }
        
            const newArrayElements = arrayElement.filter((item,index)=>{
                return arrayIndex.includes(Number(item.firstChild))===true;
            })
        
        
        handleSort(newArrayElements,container);
      
    })
    //onchange
    const selectElement = document.querySelector('.sort__input');
    selectElement.addEventListener("change",()=>{
        container.innerHTML=`<tr>
                                <th>STT</th>
                                <th>Tên Sinh viên</th>
                                <th>Email</th>
                                <th>Điểm số</th>
                                <th>Thời gian làm bài</th>
                            </tr>`;
        let value=inputSearch.value;
        const arrayIndex=[];
        for(let j=0;j<arrayElement.length;j++){
            const firstValue=arrayElement[j].secondChild;
            const secondValue=arrayElement[j].thirdChild;
            const thirdValue =arrayElement[j].fourChild;
        if(firstValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0|| secondValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0||thirdValue.trim().toLowerCase().indexOf(value.trim().toLowerCase())>=0){
            arrayIndex.push(j+1);    
        }
        }
    
        const newArrayElements = arrayElement.filter((item,index)=>{
            return arrayIndex.includes(Number(item.firstChild))===true;
        })
    
    
    handleSort(newArrayElements,container);
  
})
    //sắp xếp theo select option
    const handleSort =(newArrayElements,container)=>{
        const tempElement=[...newArrayElements];
        inputSort=$('.form__search .sort__input')
        const valueSort= inputSort.value;
       switch(valueSort){
            case 'nameASC':{
                console.log("nameASC")
                const newArrayName=[];
                for(let i=0; i<tempElement.length;i++){
                    newArrayName.push(tempElement[i].secondChild);
                }
                const temp= newArrayName.sort();
                console.log(temp);
                const tempArray=[];
                for(let i=0;i<temp.length;i++){
                    for(let j=0;j<tempElement.length;j++){
                        if(temp[i]==tempElement[j].secondChild){
                            console.log('first',tempElement[j]);
                            tempArray.push(tempElement[j]);
                            tempElement.splice(j, 1);
                        }
                    }
                }
                
                tempArray.forEach((item,index)=>{
                    container.innerHTML+= `<tr>
                                                 <td>${item.firstChild}</td>
                                                 <td>${item.secondChild}</td>
                                                 <td>${item.thirdChild}</td>
                                                 <td>${item.fourChild}</td>
                                                 <td>${item.fiveChild}</td>
                                             </tr>`;
                })
            }
            break;
            case 'nameDESC':{
                console.log("nameDESC")
                const newArrayName=[];
                for(let i=0; i<tempElement.length;i++){
                    newArrayName.push(tempElement[i].secondChild);
                }
                const temp= newArrayName.sort();
                temp.reverse();
                console.log(temp)
                const tempArray=[];
                for(let i=0;i<temp.length;i++){
                    for(let j=0;j<tempElement.length;j++){
                        if(temp[i]==tempElement[j].secondChild){
                            console.log('first',tempElement[j]);
                            tempArray.push(tempElement[j]);
                            tempElement.splice(j, 1);
                        }
                    }
                }
                // const result= temp.map((item,index)=>{
                //     const result2 = tempElement.filter((element,index2)=>{
                //         return element.secondChild.trim().includes(item.trim());
                //     })
                //     return result2;
                // });
                // const newResult = result.reduce((arr,curr)=>{
                //      arr.push(...curr);
                //      return arr;
                // },[])
                
               tempArray.forEach((item,index)=>{
                    container.innerHTML+= `<tr>
                                                 <td>${item.firstChild}</td>
                                                 <td>${item.secondChild}</td>
                                                 <td>${item.thirdChild}</td>
                                                 <td>${item.fourChild}</td>
                                                 <td>${item.fiveChild}</td>
                                             </tr>`;
                })
            }
            break;
            case 'markASC':{
                // console.log("markASC")
                const newArrayName=[];
                for(let i=0; i<tempElement.length;i++){
                    newArrayName.push(Number(tempElement[i].fourChild));
                }
                const temp= newArrayName.sort((a,b)=>a-b);
                // console.log(temp);
                // console.log('start',tempElement)
                const tempArray=[];
                for(let i=0;i<temp.length;i++){
                    for(let j=0;j<tempElement.length;j++){
                        if(temp[i]==tempElement[j].fourChild){
                            console.log('first',tempElement[j]);
                            tempArray.push(tempElement[j]);
                            tempElement.splice(j, 1);
                        }
                    }
                }
                tempArray.forEach((item,index)=>{
                    container.innerHTML+= `<tr>
                                                 <td>${item.firstChild}</td>
                                                 <td>${item.secondChild}</td>
                                                 <td>${item.thirdChild}</td>
                                                 <td>${item.fourChild}</td>
                                                 <td>${item.fiveChild}</td>
                                             </tr>`;
                })
            }
            break;
            case 'markDESC':{
                // console.log("markASC")
                const newArrayName=[];
                for(let i=0; i<tempElement.length;i++){
                    newArrayName.push(Number(tempElement[i].fourChild));
                }
                const temp= newArrayName.sort((a,b)=>a-b);
                temp.reverse();
                // console.log(temp);
                // console.log('start',tempElement)
                const tempArray=[];
                for(let i=0;i<temp.length;i++){
                    for(let j=0;j<tempElement.length;j++){
                        if(temp[i]==tempElement[j].fourChild){
                            console.log('first',tempElement[j]);
                            tempArray.push(tempElement[j]);
                            tempElement.splice(j, 1);
                        }
                    }
                }
                tempArray.forEach((item,index)=>{
                    container.innerHTML+= `<tr>
                                                 <td>${item.firstChild}</td>
                                                 <td>${item.secondChild}</td>
                                                 <td>${item.thirdChild}</td>
                                                 <td>${item.fourChild}</td>
                                                 <td>${item.fiveChild}</td>
                                             </tr>`;
                })
            }
            break;
       }
    } 
})();
