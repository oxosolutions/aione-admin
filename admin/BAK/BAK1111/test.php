<?php 

//$json_data = file_get_contents('http://aioneframework.scolm.com/api/dataset/307584/tjtTgBJgEEz6azHdJt2bwjV9e');
$json_data = file_get_contents('http://aioneframework.scolm.com/api/dataset/307584/q2AFGA4hE6sFoTsXrJGxShzJy');
  $holder = json_decode($json_data, true);
    //print_r($holder);

    $unique_section_ids = array_unique(array_map(function ($i) { return $i['section_id']; }, $holder));
    $column = array_count_values( array_map(function($item){return $item['section_id'];}, $holder));
    //print_r($unique_section_ids);

    $sections = array();   
    foreach ($unique_section_ids as $section_id) {
      $sections[$section_id] = array(); 
      $split = array(); 
      $temp = array(); 
      
      foreach ($holder as $holder_key => $holder_value) {
        if($holder_value['section_id'] == $section_id){ 
          array_push($split, $holder_value);                    
        }
      } 
      foreach ($split as $split_key => $split_value) {
        if($split_key == 0) {
          $first = $split_value;
          $first['fields'] = array($split_value['fields']);
        }         
        if($split_key > 0){
          $rest_fields = $split_value['fields'];
          array_push($first['fields'] , $rest_fields);
        }
        if($column[$section_id] == $split_key+1){
          array_push($temp, $first);
        }
       } 

       foreach ($temp[0]['fields'] as $f_key => $f_value) {
        foreach ($f_value as $key => $value){
          if(is_array(json_decode($value,true))){
                $f_value[$key] = json_decode($value,true);
            }
          $newkey = str_replace('field_','',$key);
          $f_value[$newkey] =  $f_value[$key];
          unset($f_value[$key]);
        }  
        $temp[0]['fields'][$f_key] =  $f_value;       
        }
       
      $sections[$section_id] = $temp[0];
      
      $this->sections[] = $temp[0]; 
      
    }    
    
    //$this->sections[] = $sections['general_settings'];
?>