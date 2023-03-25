<?php
    include('conn.php'); 
   
    function collectData(){
        global $conn;
        global $navlinks;
        global $about;
        global $homeservice;
        global $servicecard;
        global $footercontact;
        global $footerlink;
        global $footertext;
        global $fieldservlist;
        global $fieldservtext;
        global $bulkengsect;
        global $bulklistone;
        global $bulklisttwo;
        global $bulklistthree;
        global $mechansectbox;
        global $mechaniclistone;
        global $mechaniclisttwo;
        global $structlistbox;
        global $structsectbox;
        global $equiplist;
        global $equipsectbox;
        global $minersectbox;
        global $minerallistbox;
        global $techimgsecttext;
        global $techlistboxone; 
        global $techlistboxtwo;

        $sql_select = "SELECT * FROM leungotable"; 
        $results = mysqli_query($conn,$sql_select);
        if (mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_assoc($results)) {
                $row['page'] =='navbox-links'? $navlinks = json_decode($row['pageContent'],true) :'';
                $row['page'] =='home-about-text'? $about = json_decode($row['pageContent'],true) :'';
                $row['page'] =='service-title'? $homeservice = json_decode($row['pageContent'],true) :'';
                $row['page'] =='service-card'? $servicecard = json_decode($row['pageContent'],true) :'';
                $row['page'] =='footer-contact'? $footercontact = json_decode($row['pageContent'],true) :'';
                $row['page'] =='footer-link'? $footerlink = json_decode($row['pageContent'],true) :'';
                $row['page'] =='footer-text'? $footertext = json_decode($row['pageContent'],true) :'';
                $row['page'] =='field-service-list'? $fieldservlist = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='svr-imgText-area'? $fieldservtext = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='bulk-eng-sect'? $bulkengsect = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='bulk-listone-box'? $bulklistone = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='bulk-listtwo-box'? $bulklisttwo = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='bulk-listthree-box'? $bulklistthree = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='mechan-sect-box'? $mechansectbox = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='mechanic-list-one'? $mechaniclistone = json_decode($row['pageContent'],true) :''; 
                $row['page'] =='mechanic-list-two'? $mechaniclisttwo = json_decode($row['pageContent'],true) :'';
                $row['page'] =='struct-list-box'? $structlistbox = json_decode($row['pageContent'],true) :'';
                $row['page'] =='struct-sect-box'? $structsectbox = json_decode($row['pageContent'],true) :'';
                $row['page'] =='equip-list'? $equiplist = json_decode($row['pageContent'],true) :'';
                $row['page'] =='equip-sect-box'? $equipsectbox = json_decode($row['pageContent'],true) :'';
                $row['page'] =='miner-sect-box'? $minersectbox = json_decode($row['pageContent'],true) :'';
                $row['page'] =='mineral-list-box'? $minerallistbox = json_decode($row['pageContent'],true) :'';
                $row['page'] =='tech-imgsect-text'? $techimgsecttext = json_decode($row['pageContent'],true) :'';
                $row['page'] =='tech-listbox-one'? $techlistboxone = json_decode($row['pageContent'],true) :'';
                $row['page'] =='tech-listbox-two'? $techlistboxtwo = json_decode($row['pageContent'],true) :'';
            }
        }else{
            echo false;
        }
    }
    collectData();

    function accessValue($parentBox, $idValue){
        if($parentBox){
            for($i=0; $i < count($parentBox); $i++){ echo $parentBox[$i]['id'] == $idValue ? $parentBox[$i]['value']:'';}
        }
    } 
    function accessList($parentBox){
        if($parentBox){
            for ($i=0; $i < count($parentBox) ; $i++) { 
               echo '<li><span class= "lni lni-checkmark"></span>'.$parentBox[$i].'<span class= "lni lni-close"></span></li>';
            }
        }
    }
?>