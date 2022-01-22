(()=>{
    const form = document.getElementById('form__user');
     const inputList= form.querySelectorAll('input');
     const btn = form.querySelector('button');
     btn.addEventListener('click',()=>{
        if(btn.getAttribute('type')==='button'){
           
            btn.innerText='Cập nhật thông tin';
            for(let i=0;i<inputList.length;i++){
                
                inputList[i].removeAttribute('readonly');
            }
            inputList[inputList.length-1].removeAttribute('type');
            inputList[inputList.length-1].setAttribute('type','text');
            btn.addEventListener('click',()=>{
              btn.setAttribute('type', 'submit');
              btn.setAttribute('name', 'submit');
              
          })
        }
     })
})();