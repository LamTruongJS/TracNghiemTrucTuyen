(()=>{
    const form= document.getElementById('form__test');
    const btn=form.querySelector('button');
    btn.addEventListener('click',()=>{
        const inputElement= form.querySelectorAll('input');
        if(btn.getAttribute('type')==='button'){
           
            btn.innerText='Cập nhật thông tin';
            for(let i=0; i<inputElement.length; i++){
                inputElement[i].removeAttribute('readonly')
            inputElement[1].removeAttribute('type');
            inputElement[1].setAttribute('type','text');
            }
            btn.addEventListener('click',()=>{
                btn.setAttribute('type', 'submit');
                btn.setAttribute('name', 'submit');
                
            })
         }
    })
})();