const  techEdit = document.getElementsByClassName('tech-edit');
const techEditList = document.getElementsByClassName('tech-list-edit');
const techlistOne = document.getElementsByClassName('techlist-one');
const techlistTwo = document.getElementsByClassName('techlist-two');

sendHomedata =(parentElem, value,id)=>{
    let contentArray = {'section':parentElem,'id':id,'value':value};
    const contentString = JSON.stringify(contentArray);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "gettext.php"); 
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           const response = this.responseText; 
           console.log(response);
        }
    }
    xhr.send(contentString);
}

for (let i = 0; i < techEdit.length; i++) {
    techEdit[i].onblur =()=>{
        if(techEdit[i].innerHTML){
            sendHomedata(techEdit[i].parentNode.className, techEdit[i].innerHTML, techEdit[i].getAttribute('id')); 
        }
        techEdit[i].innerHTML ='';
    }
}

for (let i = 0; i < techEditList.length; i++) {
    techEditList[i].onblur =()=>{
        if(techEditList[i].innerHTML){
            sendHomedata(techEditList[i].parentNode.className, techEditList[i].innerHTML, techEditList[i].getAttribute('id')); 
        }
        techEditList[i].innerHTML ='';
    }
}

const techListOneChild = techlistOne[0].children;
for(let i = 0; i < techListOneChild.length; i++) {
    techListOneChild[i].onclick =()=>{
        sendHomedata('tech-listbox-one',i,'delete-list');
    }
}

const techListTwoChild = techlistTwo[0].children;
for(let i = 0; i < techListTwoChild.length; i++) {
    techListTwoChild[i].onclick =()=>{
        sendHomedata('tech-listbox-two',i,'delete-list');
    }
}
