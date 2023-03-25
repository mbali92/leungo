<?php
    include('conn.php'); 
    $findhtmlcontent =  json_decode(file_get_contents('php://input'),true);
    if($findhtmlcontent){
      $section =  $findhtmlcontent['section'];
      $id = $findhtmlcontent['id'];
      $value = $findhtmlcontent['value'];
    }

    function insertRowResponse($sql){
      global $conn;
      if (mysqli_query($conn, $sql)) {
        return "New record created successfully";
        } else {
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    
    function updateResponse($sql){
      global $conn;
      if(mysqli_query($conn, $sql)) {
        return "New record updated successfully";
      } else {
          return "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function createNewTextRecord(){
      global $id;
      global $value;
      global $section;
      if($id == 'list-item'){
        $listValues = array($value);
        $listString = json_encode($listValues);
        $listInsertSql = "INSERT INTO leungotable(page, pageContent) VALUES('$section', ' $listString')";
        insertRowResponse($listInsertSql);
      }else{
        $singleItem = array('id' => $id, 'value'=> $value);
        $textedNewList = json_encode(array($singleItem));
        $newInsertSql = "INSERT INTO leungotable(page, pageContent) VALUES('$section', '$textedNewList')";
        insertRowResponse($newInsertSql);
      }
    }

    function updateText($selectedText){
      global $id;
      global $value;
      global $section;
      $itemFound = false;
      $detextedItem = json_decode($selectedText,true);
      $length = count($detextedItem);
      if($id == 'list-item'){
        for ($i=0; $i < $length; $i++) { 
          if($detextedItem[$i] == $value){
            $itemFound = true;
          }
        }
        if(!$itemFound){
          array_push($detextedItem,$value);
        }
      }
      elseif($id =='delete-list'){
        array_splice($detextedItem,$value);
      }else{
        for ($i=0; $i < $length; $i++) { 
          if($detextedItem[$i]['id'] == $id){
            $detextedItem[$i]['value'] = $value;
            $itemFound = true;
          };
        }
        if(!$itemFound){
          array_push($detextedItem,array('id' => $id,'value'=>$value)); 
        }
      } 
      $updatedString = json_encode($detextedItem);
      $updatedRecord = "UPDATE leungotable SET pageContent = '$updatedString' where page = '$section'";
      updateResponse($updatedRecord); 
    }

    function findRows($sql){
      global $conn;
      $results = mysqli_query($conn,$sql);
      if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
          return $row['pageContent'];
        }
      } else {
        return false;
      }
    } 
    function selectRow(){
      global $section;
      $sql_select = "SELECT * FROM leungotable WHERE page = '$section'";
      if(findRows($sql_select)){
        updateText(findRows($sql_select));
      }
      else{
        createNewTextRecord();
      }
    } 

    if($findhtmlcontent){
      selectRow();
    }
?>