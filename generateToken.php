<?php

require 'vendor/autoload.php';
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\ZohoOAuth;
use zcrmsdk\oauth\ZohoOAuthClient;
use zcrmsdk\oauth\utility\ZohoOAuthTokens;
use zcrmsdk\crm\crud\ZCRMRecord;
class generateToken{
public function __construct()
    {
        // $this->middleware('auth');
        // dd(public_path().'/zcrm_oauthtokens.txt');
        $configuration =array("client_id"=>'your_id',"client_secret"=>'your_secret',"redirect_uri"=>'https://register.zvendo.online/register',"currentUserEmail"=>'imohamedgabr@outlook.com' , 'token_persistence_path' =>'\public');

        ZCRMRestClient::initialize($configuration);
    }

    public function genToken(){
    	$oAuthClient = ZohoOAuth::getClientInstance(); 
	$grantToken ="1000.998a618ef4c597d62a9fa3b9122bf8e8.b09eb475017adcc99f51290bf27d2e0b";    //grant token
	$oAuthTokens = $oAuthClient->generateAccessToken($grantToken);
	var_dump($oAuthTokens);


    }


 public function createLead()
    {
        $moduleIns=ZCRMRestClient::getInstance()->getModuleInstance("Leads"); //to get the instance of the module
        $records=array();
        $record=ZCRMRecord::getInstance("Leads",null);  //To get ZCRMRecord instance
        $record->setFieldValue("First_Name","ahmed"); 
        $record->setFieldValue("Last_Name","ahmed"); 
        $record->setFieldValue("Email","email+65595@gmail.com"); 
        $record->setFieldValue("Description","ahmed"); 
        $record->setFieldValue("Phone","123456789"); 
        $record->setFieldValue("Mobile","123456789"); 
        $record->setFieldValue("Lead_Source","my source"); 
        $record->setFieldValue("CountryTable","Egypt");

        array_push($records, $record); // pushing the record to the array.
       // $trigger=array();//triggers to include
       // $lar_id="123213321321232";//lead assignment rule id
        $responseIn = $moduleIns->createRecords($records,null,null); // updating the records.$trigger,$lar_id are optional
        foreach ($responseIn->getEntityResponses() as $responseIns) {
            echo "HTTP Status Code:" . $responseIn->getHttpStatusCode(); // To get http response code
            echo "Status:" . $responseIns->getStatus(); // To get response status
            echo "Message:" . $responseIns->getMessage(); // To get response message
            echo "Code:" . $responseIns->getCode(); // To get status code
            echo "Details:" . json_encode($responseIns->getDetails());
        }
       

    }
 }
   $obj= new generateToken();
   //$obj->genToken();
   $obj->createLead();
  ?>
