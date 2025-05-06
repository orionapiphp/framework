<?php


namespace OrionApi\App\Services;

use OrionApi\Core\Enums\HttpStatus;
use OrionApi\Core\Http\Response;
use OrionApi\Core\Log\LoggerFactory;

class TestService{

    private LoggerFactory $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::get_logger(self::class);
    }


    public function test($params){
        
        $this->logger->info("Hitting Test Service test method.");
        Response::json(HttpStatus::OK, ["hello"=>$params["val"]]);
    }

    public function index(){
        
        $this->logger->info("Hitting Test Service test method.");
        Response::json(HttpStatus::OK, ["hello"=>"Welcome"]);
    }
}