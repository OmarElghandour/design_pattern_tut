<?php 

namespace proxy\WebServiceProxy;

use proxy\Service\Service;
use proxy\WebService\WebService;

require_once __DIR__ . '/WebService.php';

class WebServiceProxy implements Service {

   private ?WebService $webService = null;

   private $allowedIds = [
    '1',
    '2'
   ];

   private string $clientId;

    public function connect()
    {
        if($this->webService === null) {
            $this->webService = new WebService();
        }  

        if($this->isAllowed()){
            return $this->webService->connect();
        } else {
            return "not allow id {$this->clientId}" . PHP_EOL;
        }
       
    }


    public function setClientId($clientId) {
        $this->clientId = $clientId;
        return $this;
    }

    private function isAllowed() : bool {
       if(in_array($this->clientId, $this->allowedIds)) {
            return true;       
       }
       return false;
    }

}