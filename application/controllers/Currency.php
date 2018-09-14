<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency extends CI_Controller {

		public function fixerToMem($baseCurrency = 'INR',$targetCurrency = 'USD')
    	{
    	      $this->load->driver('cache'); 

            // $this->curl->create('http://data.fixer.io/api/latest?access_key=16f229ce2c2db814a47883ea97442d58');
            //$data = $this->curl->execute();
    	      $data=file_get_contents('http://www.apilayer.net/api/live?access_key=14af75f6fd64358bb58b7e84c20fe442&format=1');
              $data=json_decode($data);
    	      if($data->success===true){
    	      $quotes=$data->quotes;
              $quotes->isAvailable=true;
              $this->cache->file->save('CURRENCY-CONVERTER',$quotes,0);
              echo 'done-well';
        	  }
          	else
          		{

          			echo 'mailed to TY team';
          			//write a mail to TY....
          		}

    	}
    	public function fixerFromMem($baseCurrency = 'INR',$targetCurrency = 'USD')
    	{	

    		echo $baseCurrency.'<br>';
    		echo $targetCurrency.'<br>';

    		$staticVals=array('INRUSD'=>'0.015');
    		$return = array();
    		$this->load->driver('cache'); 
    		$arrConv=$this->cache->file->get('CURRENCY-CONVERTER');	
            pr($arrConv,1,1);
        
    		//$arrConv->{'USDINR'};
           // var_dump($arrConv);
            if($arrConv&&$arrConv->isAvailable){
    		$valStr=$baseCurrency.$targetCurrency;
    		   	if($baseCurrency=='USD'){
    			echo '1<br/>';
    			$val=$arrConv->{$valStr};
    		    if($val){
    			$return['success']= true;
    			$return['data'] = $val;
    			}
    			elseif($staticVals[$valStr]){
    				$return['success']=true;
    				$return['data']=$staticVals[$valStr];
    			}
    			else {
    			$return['success'] = false;
    			}
    	    }
    	    elseif($targetCurrency=='USD')
    	    {
    	    	echo '2<br/>';
    	    	$valStr=$targetCurrency.$baseCurrency;
    			$val=$arrConv->{$valStr};
    		    if($val){
    			$return['success'] = true;
    			$return['data'] = 1/$val;
    			}
    			elseif($staticVals[$valStr]){
    				$return['success']=true;
    				$return['data']=$staticVals[$valStr];
    			}
    			else {
    			$return['success'] = false;
    			}
    	    }
    	    else
    	    {
    	    	echo '3<br/>';
    	    	$baseTemp='USD'.$baseCurrency;
    	    	$targetTemp='USD'.$targetCurrency;
    	    	if(array_key_exists($baseTemp,$arrConv)&&array_key_exists($targetTemp,$arrConv))
    	    	{
    	    		$return['success']=true;
    	    		$da=($arrConv->{$targetTemp})/($arrConv->{$baseTemp});
    	    		$return['data']=$da;
    	    	}
    	    	elseif(array_key_exists($valStr,$staticVals)){
    				$return['success']=true;
    				$return['data']=$staticVals[$valStr];
    			}
    	    	else{
    	    		$return['success']=false;
    	    	}
    	    }
        }
        else
         {
            $valStr=$baseCurrency.$targetCurrency;
            if(array_key_exists($valStr,$staticVals)){
                    echo 'atleast static data is available<br>';
                   $return['success']=true;
                    $return['data']=$staticVals[$valStr];
                      }
                else{
                        $return['success']=false;
                        echo 'no static-data and no-cache ';
                }
            
         }
   			return $return;
    	}

    	public function run($baseCurrency='INR',$targetCurrency='USD')
    	{

    			//$baseCurrency='INR';
    			//$targetCurrency='EUR';
    		    $res=$this->fixerFromMem($baseCurrency,$targetCurrency);
    		    if($res['success'])
    		    echo round($res['data'],3);
    	}
        public function test()
        {
             // $this->load->library('cache');
            $this->load->driver('cache');
              //phpinfo(); 
           
            var_dump($this->cache->memcached->save('foo', 'bar',3600*12));
            var_dump($this->cache->memcached->is_supported());
            echo $this->cache->memcached->get('foo');
        }
    
}