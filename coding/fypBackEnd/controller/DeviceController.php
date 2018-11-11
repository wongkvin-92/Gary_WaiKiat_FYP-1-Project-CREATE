<?php
class DeviceController extends MasterController{
    public function __construct($con){
	$this->con = $con;
    }

    public function listMyDevices($type, $userID){
    	$deviceDA = new DeviceDA($this->con);
    	$list = $deviceDA->getDevices($type, $userID);
    	print(json_encode($list));
    }

    public function createDevice($type, $userID, $token){
    	$deviceDA = new DeviceDA($this->con);
    	$device = new Device();
    	$device->type = $type;
    	$device->userID =$userID;
    	$device->token =$token;

    	$deviceDA->save($device);
    	$this->sendMsg("Successfully saved!");
    }

    public function fetchDevice($type, $userID){
	$deviceDA = new DeviceDA($this->con);
	$device = $deviceDA->getFirstDevice($type, $userID);
	return $device;
    }


    public function updateDevice($token, $type, $userID){
	     $deviceDA = new DeviceDA($this->con);
	      $deviceDA->updateDevices($token, $type, $userID);
	       $this->sendMsg("Successfully updated!");
    }

    public function deleteAllDevice($userID){
    	$deviceDA = new DeviceDA($this->con);
    	if($deviceDA->deleteDevices($userID))
                $this->sendMsg("Successfully removed!");
    	else{
                throw new Exception("Failed to remove!");
    	}
    }
}

?>
