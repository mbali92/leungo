const pageLinks = document.getElementsByClassName('page-links');
const aboutEdit = document.getElementsByClassName('about-edit');
const homeSrvEdits = document.getElementsByClassName('home-srv-edits');
const footerEdit = document.getElementsByClassName('footer-edit');

sendHomedata =(parentElem, value,id)=>{
    let contentArray = {'section':parentElem,'id':id,'value':value};
    const contentString = JSON.stringify(contentArray);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "gettext.php"); 
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
           const response = this.responseText; 
           console.log(response);
        }
    }
    xhr.send(contentString);
}

for (let i = 0; i < pageLinks.length; i++) {
    pageLinks[i].onblur =()=>{
        if(pageLinks[i].innerHTML){
            sendHomedata(pageLinks[i].parentNode.className, pageLinks[i].innerHTML, pageLinks[i].getAttribute('id')); 
            pageLinks[i].innerHTML ='';
        }
    }
}
for (let i = 0; i < aboutEdit.length; i++) {
    aboutEdit[i].onblur =()=>{
        if(aboutEdit[i].innerHTML){
            sendHomedata(aboutEdit[i].parentNode.className, aboutEdit[i].innerHTML, aboutEdit[i].getAttribute('id')); 
            aboutEdit[i].innerHTML = '';
        }
    }
    
}
for (let i = 0; i < homeSrvEdits.length; i++) {
    homeSrvEdits[i].onblur =()=>{
        if(homeSrvEdits[i].innerHTML){
            sendHomedata(homeSrvEdits[i].parentNode.className, homeSrvEdits[i].innerHTML, homeSrvEdits[i].getAttribute('id'));
            homeSrvEdits[i].innerHTML ='';
        }
    }


}
for (let i = 0; i < footerEdit.length; i++) {
    footerEdit[i].onblur =()=>{
        if(footerEdit[i].innerHTML){
            sendHomedata(footerEdit[i].parentNode.className, footerEdit[i].innerHTML, footerEdit[i].getAttribute('id'));
            footerEdit[i].innerHTML ='';
        }
    }

}




