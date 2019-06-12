<?php include_once 'wp-config.php';?>
<?php
class MapData{
   static $API_URL = MAP_DATA_API_URL; //Value taken from wp-config
   //static $API_TOKEN = MAP_DATA_API_TOKEN;//Value taken from wp-config 
   static $API_USER = MAP_USER; //Value taken from wp-config 
   static $API_USER_PASSWORD = MAP_USER_PASSWORD; //Value taken from wp-config 

   public function get_token($url,$email,$password){
      $ch = curl_init();
      $data =  array(
        'email' => $email,
        'password' => $password,
      );

      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$data);  //Post Fields
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $server_output = curl_exec ($ch);
      curl_close ($ch);
      //print  $server_output;
      return $server_output;
   }

   public function callAPI($method, $url, $data, $token){
      $curl = curl_init();


      switch ($method){
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                                               
            break;
         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }

      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         //'Authorization: Bearer 01854ec9417e53879f3ef93328c8a35c',
         'Authorization: Bearer '.$token.'',
         'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

      // EXECUTE:
      try{
         $result = curl_exec($curl);
      }catch(Exception $exception){
         $result = false;
      }
      
      if(!$result){$result = "";/*die("Connection Failure");*/}
      curl_close($curl);
      return $result;
   }

      public function get_all_metrics_data($indices_array, $url, $boundaries, $token, $style_Data){
            $all_metrics_data = array();
            $analysis_array = array();
            foreach ($indices_array as $key=>$val) {
                  $get_data = $this->callAPI('GET', $url.$val,false, $token);
                  $data = json_decode($get_data, true);
                  $all_metrics_data[]=$data;
            }

            $url = MapData::$API_URL . 'departments?department_name='.$boundaries[0].'&type='.$boundaries[1];
            $analysis_array[] = $url;

            //$result_style_array = json_encode($style_Data);

            foreach ($style_Data as $arr_item) {
               foreach ($arr_item as $key => $val){
                        if ($key == 'difference_layer' && count($val) > 0){
                           $url_diff = $url. '&difference_layer_ids[]='.$arr_item['service_metric_id'].'&difference_layer_radii[]='.$arr_item['buffer_radius'];
                           $analysis_array[] = $url_diff;
                        }    
               }
            }
            
            foreach ($analysis_array as $key=>$val) {
                  $get_data = $this->callAPI('GET', $val,false, $token);
                  $data = json_decode($get_data, true);
                  $all_metrics_data[]=$data;
            }

            // $get_data = $this->callAPI('GET', $url,false, $token);
            // $data = json_decode($get_data, true);
            // $all_metrics_data[]=$data;


            $all_metrics_data[] = $style_Data;
            //echo json_encode($all_metrics_data);
            return $all_metrics_data;

      }
      public function get_metro_station_location($url, $token){ 
            $get_data = $this->callAPI('GET', $url, false, $token);
            $response = json_decode($get_data,true);
            $indices_array = array(); 
            $boundaries_array = array();
            $url = MapData::$API_URL . "service_metrics/";         
 
            foreach ($response['child_metrics'] as $arr_item) {

                  foreach ($arr_item as $key => $val){
                        if ($key == 'service_metric_id'){
                              //echo "$key ==> $val \n";
                              $indices_array[] = $val;
                        }    
                  } 
            }

            foreach ($response['boundaries'] as $arr_item) {
               foreach ($arr_item as $key => $val){
                  $boundaries_array[] = $val;

               }
            }
            //echo $indices_array;

            $get_metric_data = $this->get_all_metrics_data($indices_array, $url, $boundaries_array, $token, $response['child_metrics']);
            return $get_metric_data;      
      }

      public function get_all_indices(){
      $access_token_data = $this->get_token(MapData::$API_URL.'auth/login', MapData::$API_USER, MapData::$API_USER_PASSWORD);
      $response = json_decode($access_token_data, true);
      $token = $response['token'];

      $get_data = $this->callAPI('GET', MapData::$API_URL . 'indices', false, $token);
      $response = json_decode($get_data, true);
      return $response;
      }
}
      $mapData = new MapData();
      
      $access_token_data = $mapData->get_token(MapData::$API_URL.'auth/login', MapData::$API_USER, MapData::$API_USER_PASSWORD);
      $response = json_decode($access_token_data, true);
      $access_token = $response['token'];

      //echo ($_GET['flag']);
      if (!isset($_GET['flag'])){
      }
      else{
            //$map_id = '5c90aa168dbfcf6d645bad87';
            $url = MapData::$API_URL . 'indices/'.$_GET['map_id'];
            echo json_encode($mapData->get_metro_station_location($url, $access_token));
      }
?>