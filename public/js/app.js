const $=document.querySelector.bind(document);
const $$=document.querySelectorAll.bind(document);

const tabs=$$('.tab-item');

const tabsActive=$('.tab-item.active');


tabs.forEach((tab)=>{
      
    tab.onclick=function(){

        $('.tab-item.active').classList.remove('active');

        
        this.classList.add('active');
       
    }
})