(()=>{
    const $id=document.getElementById.bind(document);

    const timeDeadLine = $id('time__test').innerText;
    setTimeout(()=>{

        document.form_time.submit();
    
    },Number(timeDeadLine*60*1000));
})();