<?php include_once 'wp-config.php';?>
<?php
class MapData{
    static $API_URL = MAP_DATA_API_URL; //Value taken from wp-config
    static $API_TOKEN = MAP_DATA_API_TOKEN;//Value taken from wp-config 
	public function callAPI($method, $url, $data){
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
               'Authorization: ' . MapData::$API_TOKEN,
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
      public function get_all_metrics_data($indices_array, $url, $boundaries){
            $all_metrics_data = array();
            foreach ($indices_array as $key=>$val) {
                  $get_data = $this->callAPI('GET', $url.$val,false);
                  $data = json_decode($get_data, true);
                  $all_metrics_data[]=$data;
            }
            $url = MapData::$API_URL . 'departments?department_name='.$boundaries[0].'&type='.$boundaries[1];
            
            $get_data = $this->callAPI('GET', $url,false);
            $data = json_decode($get_data, true);
            $all_metrics_data[]=$data;
            //echo json_encode($all_metrics_data);
            return $all_metrics_data;

      }
      public function get_metro_station_location($url){ 
            $get_data = $this->callAPI('GET', $url, false);
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

            $get_metric_data = $this->get_all_metrics_data($indices_array, $url, $boundaries_array);
            return $get_metric_data;      
      }

      public function get_all_indices(){
            $get_data = $this->callAPI('GET', MapData::$API_URL . 'indices', false);
            $response = json_decode($get_data, true);
            return $response;
      }
}
      $mapData = new MapData();
      //echo ($_GET['flag']);
      if (!isset($_GET['flag'])){
      }
      else{
            //$map_id = '5c90aa168dbfcf6d645bad87';
            $url = MapData::$API_URL . 'indices/'.$_GET['map_id'];
            echo json_encode($mapData->get_metro_station_location($url));
      }
?>