(()=>{
    const listItem = document.querySelectorAll('.content__test__item');
   for(let i=0; i<listItem.length; i++){    
        const startTime=listItem[i].querySelector('.startTime').innerText;
        const endTime=listItem[i].querySelector('.endTime').innerText;
        
      
        
        const today = new Date();
        const startDay = new Date(startTime);
        const endDay = new Date(endTime);
        
        if(today >= startDay && today <= endDay) {
          
           listItem[i].querySelector('.status').innerText='Đang mở';
        }
        else if(today > endDay){
          
            listItem[i].querySelector('.status').innerText='Quá hạn';
        }
        else if(today < startDay){
           
            listItem[i].querySelector('.status').innerText='Sắp mở';
        }
   }
})();