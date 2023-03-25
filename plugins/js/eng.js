const bulkEdit  = document.getElementsByClassName('bulk-eng-edit');
const mechaEdit = document.getElementsByClassName('mech-eng-edit');
const structEdit = document.getElementsByClassName('struct-edit');
const equipEdit = document.getElementsByClassName('equip-edit');
const mineralEdit = document.getElementsByClassName('mineral-edit');
const deleteMechListOne = document.getElementsByClassName('mech-items-one');
const deleteMechListTwo = document.getElementsByClassName('mech-items-two');
const deleteBulkListOne = document.getElementsByClassName('bulk-items-one');
const deleteBulkListTwo = document.getElementsByClassName('bulk-items-two');
const deleteBulkListThree = document.getElementsByClassName('bulk-items-three');
const deleteStructListOne = document.getElementsByClassName('struct-items-one');
const deleteEquipListOne = document.getElementsByClassName('equip-itmes-one');
const deleteMinerListOne = document.getElementsByClassName('miner-items-one');

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
for (let i = 0; i < bulkEdit.length; i++) {
    bulkEdit[i].onblur =()=>{
        if(bulkEdit[i].innerHTML){
            sendHomedata(bulkEdit[i].parentNode.className, bulkEdit[i].innerHTML, bulkEdit[i].getAttribute('id')); 
        }
        bulkEdit[i].innerHTML ='';
    }
}
for (let i = 0; i < mechaEdit.length; i++) {
    mechaEdit[i].onblur =()=>{
        if(mechaEdit[i].innerHTML){
            sendHomedata(mechaEdit[i].parentNode.className, mechaEdit[i].innerHTML, mechaEdit[i].getAttribute('id')); 
        }
        mechaEdit[i].innerHTML ='';
    }
}

for (let i = 0; i < structEdit.length; i++) {
    structEdit[i].onblur =()=>{
        if(structEdit[i].innerHTML){
            sendHomedata(structEdit[i].parentNode.className, structEdit[i].innerHTML, structEdit[i].getAttribute('id')); 
        }
        structEdit[i].innerHTML ='';
    }
}

for (let i = 0; i < equipEdit.length; i++) {
    equipEdit[i].onblur =()=>{
        if(equipEdit[i].innerHTML){
            sendHomedata(equipEdit[i].parentNode.className, equipEdit[i].innerHTML, equipEdit[i].getAttribute('id')); 
        }
        equipEdit[i].innerHTML ='';
    }
}
for (let i = 0; i < mineralEdit.length; i++) {
    mineralEdit[i].onblur =()=>{
        if(mineralEdit[i].innerHTML){
            sendHomedata(mineralEdit[i].parentNode.className, mineralEdit[i].innerHTML, mineralEdit[i].getAttribute('id')); 
        }
        mineralEdit[i].innerHTML ='';
    }
}
for (let i = 0; i < deleteMechListOne[0].children.length; i++) {
    deleteMechListOne[0].children[i].onclick =()=>{
        sendHomedata('mechanic-list-one',i,'delete-list');
    }
}
for (let i = 0; i < deleteMechListTwo[0].children.length; i++) {
    deleteMechListTwo[0].children[i].onclick =()=>{
        sendHomedata('mechanic-list-two',i,'delete-list');
    }
}
for (let i = 0; i < deleteBulkListOne[0].children.length; i++) {
    deleteBulkListOne[0].children[i].onclick =()=>{
        sendHomedata('bulk-listone-box',i,'delete-list');
    }
}
for (let i = 0; i < deleteBulkListTwo[0].children.length; i++) {
    deleteBulkListTwo[0].children[i].onclick =()=>{
        sendHomedata('bulk-listtwo-box',i,'delete-list');
    }
}
for (let i = 0; i < deleteBulkListThree[0].children.length; i++) {
    deleteBulkListThree[0].children[i].onclick =()=>{
        sendHomedata('bulk-listthree-box',i,'delete-list');
    }
}
for (let i = 0; i < deleteStructListOne[0].children.length; i++) {
    deleteStructListOne[0].children[i].onclick =()=>{
        sendHomedata('struct-list-box',i,'delete-list');
    }
}
for (let i = 0; i < deleteEquipListOne[0].children.length; i++) {
    deleteEquipListOne[0].children[i].onclick =()=>{
        sendHomedata('equip-list',i,'delete-list');
    }
}
for (let i = 0; i < deleteMinerListOne[0].children.length; i++) {
    deleteMinerListOne[0].children[i].onclick =()=>{
        sendHomedata('mineral-list-box',i,'delete-list');
    }
}





