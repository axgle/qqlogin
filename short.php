<?php
// Cookie:pgv_info=ssid=s250026112; confirmuin=0; ptdrvs=gzHJNsKwyLge2eJpGUpPEsyTJs02UlEErMI1rTCOTl8_; ptvfsession=99a88037b2b433ab61922b20b970bb64c5ea90bc19cb04c8cbe0ef5fbbbb91efef5eefbb321ef3775d04b1301e840b1fce347b7eea0d121a; ptisp=ctc;ETK=; skey=@k8jlvoMlF; ptnick_123456789=e5ad99e98791e58589; _qz_referrer=i.qq.com; pt_login_sig=rJ2-e-RdO-U1BKb64PgKp1WbCqOtwdxctdpenMQXMnGLxG2ZrAUisGboQlV5rlOf; pt_clientip=ca667d47e5b1f515; pt_serverip=86930abf06592ed7; pt_local_token=-1909176059; uikey=b01f2c4333cd59b37cfcca5f8dd2e20f50d17ba13cac145b6ae7d324d3db476a; pt_guid_sig=cf3d82b3651d1715cf4d1fab6d4a32d404e1aea65c3081f6d8ef2fe8e4e4b820; pt_recent_uins=c4ef4c627886a903aec329578da7cdfad8b1ed0642acf27a117548094cbee3f74d00864bf00874333301d1afb3e56d1221590d2a92c5b064; qrsig=qLA88IWo1bVkCs9O-mKn1Dr7sMUXkbnIUxXPOY70n8i5VmsZ0tZsHl9NqXkrj5zF
 
$header = <<<EOT
Cookie: pt_local_token=-1909176059;
Referer:https://xui.ptlogin2.qq.com/
User-Agent:PHP is best
EOT;
 



foreach(range(4300,4308) as $port){

    $url="https://localhost.ptlogin2.qq.com:".$port."/pt_get_uins?callback=ptui_getuins_CB&r=0.39923783252274414&pt_local_tk=-1909176059";
	
  
    $qq_jsonp = @file_get_contents($url,false,stream_context_create([
        "http"=>[
            //"method"=>"GET",
            "header"=>$header,
            "timeout"=>1,
        ],
       
    ]));

    if($qq_jsonp){
        print_r($qq_jsonp);
        break;
    }
    
}


 	
