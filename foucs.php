<?php //抓取页面
require 'mysql.php';

$city=array();
//$city[]='bj';
$city[]='sz';

foreach ($city as $curcity) {

    $cityurl = 'http://'.$curcity.'.esf.focus.cn/agent/'; 
    $content = file_get_contents($cityurl);

    preg_match_all('(<a class=\" \" href=\"(\/agent\/(.*))\" rel=\"nofollow\">(.*)<\/a>)',$content,$dist);
    //print_r($dist[2]);

    $distarr = array();

    foreach ($dist[2] as $curdist) {

        $distarr[] = $cityurl.$curdist;

        # code...
    }
    //print_r($distarr);

    foreach ($distarr as $lasturl) {
        //echo $lasturl.'   ';
        for($z=1;$z<=50;$z++){

            $ch=curl_init();
            $url=$lasturl.'p'.$z;
            echo $url;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

            curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

            $content=curl_exec($ch);
            if(curl_errno($ch)) echo curl_error($ch);
            else {
                $content = iconv("gb2312","utf-8//IGNORE",$content);
                $y=preg_match('(<p class=\"c_txt5\"><b class=\"f18\">([0-9]{11})</b></p>)',$content,$name);
                if($y==0)
                    break;
                else
                {
                    preg_match_all('(<p class=\"c_txt5\"><b class=\"f18\">([0-9]{11})</b></p>)',$content,$tel);
                    //print_r($tel[1]);
                    preg_match_all('(<a class=\"link\" target=\"_blank\" href=(.*) rel=\"nofollow\">(.*)<\/a>)',$content,$name1);
                    //print_r($name1[2]);
                    preg_match_all('(<p>所属公司：(.*)</p>)',$content,$com);
                    //print_r($com[1]);
                    preg_match_all('(<p>服务区域：(.*)<\/p>)',$content,$dist2);
                    //print_r($dist2[1]);

                    for($h=0;$h<=19;$h++){
                        if(isset($name1[1][$h])||isset($tel[2][$h])||isset($com[1][$h])||isset($dist2[1][$h])){
                            insert($name1[2][$h],$tel[1][$z],$com[1][$h],$curcity,$dist2[1][$h]);
                            //echo $name1[2][$z].$tel[1][$z].$com[1][$z].$curcity.$dist2[1][$z];
                        }
                    }
                }
            }
            curl_close($ch);

        } 
    }

}