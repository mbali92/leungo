const navBox = document.getElementsByClassName('navbox')[0];
const navMenu = document.getElementsByClassName('lni-menu')[0];
const mobileLinks = document.getElementsByClassName('menu-links')[0];

navMenu.onclick =()=>{
    if(mobileLinks.style.display == 'none'){
        mobileLinks.style.display = 'block';
    }else{
        mobileLinks.style.display = 'none';
    }
}

if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
    navBox.style.boxShadow = '0 2px 5px 0 rgba(0,0,0,0.16)';
}
if(sessionStorage.getItem('showEdits')){
    if(sessionStorage.getItem('showEdits') == 'tlotlo@2020'){
        const editSpanItems = document.querySelectorAll("span[contenteditable]");
        for (let index = 0; index < editSpanItems.length; index++) {
            editSpanItems[index].style.display ='inline-block'
        }
        const editDivItems = document.querySelectorAll("div[contenteditable]");
        for(let index = 0; index < editDivItems.length; index++) {
            editDivItems[index].style.display ='inline-block';
        }
        let removeList = document.getElementsByClassName('lni-close');
        for (let i = 0; i < removeList.length; i++) {
            removeList[i].style.display ='inline-block';
        }
    }
}

