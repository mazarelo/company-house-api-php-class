<?php

class Company {

  private $apiUrl = "https://api.companieshouse.gov.uk";
  private $apiKey = "f3kUIwKiQscZ-J7pk6x0_vNczO31BfMT05w--0h9";

  function __construct(){

  }

  private function access($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD,"$this->apiKey:");
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return $server_output;
  }

  public function query($query){
    $url = "$this->apiUrl/search?q=$query";
    return $this->access($url);
  }

  public function find($id){
    $url = "$this->apiUrl/company/$id";
    return $this->access($url);
  }

  public function getCompanyCharges($id){
    $url = "$this->apiUrl/company/$id/charges";
    return $this->access($url);
  }

  public function getCompanyChargeId($id, $chargeId){
    $url = "$this->apiUrl/company/$id/charge/$chargeId";
    return $this->access($url);
  }

  public function getCompanyOfficers($id){
    $url = "$this->apiUrl/company/$id/officers";
    return $this->access($url);
  }

  public function getCompanyPersonWithSignificantControll($id){
    $url = "$this->apiUrl/company/$id/persons-with-significant-control";
    return $this->access($url);
  }

  public function getCompanyFilingHistory($id){
    $url = "$this->apiUrl/company/$id/filing-history";
    return $this->access($url);
  }


}
