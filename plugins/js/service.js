const svrPageLinks = document.getElementsByClassName('page-svrlist-edit')[0];
const svrPageText = document.getElementsByClassName('svr-page-edit');
const deleteServListOne = document.getElementsByClassName('serv-items-one');

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

svrPageLinks.onblur =()=>{
	if(svrPageLinks.innerHTML){
		sendHomedata(svrPageLinks.parentNode.className, svrPageLinks.innerHTML, svrPageLinks.getAttribute('id')); 
	}
	svrPageLinks.innerHTML ='';
}
for (let i = 0; i < svrPageText.length; i++) {
    svrPageText[i].onblur =()=>{
        if(svrPageText[i].innerHTML){
            sendHomedata(svrPageText[i].parentNode.className, svrPageText[i].innerHTML, svrPageText[i].getAttribute('id')); 
        }
        svrPageText[i].innerHTML ='';
    }
}
for (let i = 0; i < deleteServListOne[0].children.length; i++) {
    deleteServListOne[0].children[i].onclick =()=>{
        sendHomedata('field-service-list',i,'delete-list');
    }
}
