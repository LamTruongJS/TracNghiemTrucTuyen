(()=>{
    const $ =document.querySelector.bind(document);
    const btn_back= $('.btn_back');
    btn_back.addEventListener('click',()=>{
        history.back();
    })
})();