<?php

    include('Snoopy.class.php');
    include('ganjiapi.php');

	// include('Snoopy.class.php');

	// $snoopy = new Snoopy;
	// $snoopy->host = 'http://sz.ganji.com/fang/agent/guangmingxinqu/';
	// //$snoopy-> fetchtext($snoopy->host); //获取所有文本内容（去掉html代码）


	// //$snoopy->fetch($snoopy->host); //获取页面所有链接
	// $snoopy->fetchlinks($snoopy->host); //获取页面所有链接
	// //$snoopy->fetchlinks($snoopy->host); //获取链接   
	// //$snoopy->fetchform($snoopy->host);  //获取表单  
	// echo '<pre>'.print_r($snoopy->results,1).'</pre>';

	$url=array();
$url[]='http://sz.ganji.com/fang/agent/bagualing/';
$url[]='http://sz.ganji.com/fang/agent/baoshuiqu/';
$url[]='http://sz.ganji.com/fang/agent/bijiashan/';
$url[]='http://sz.ganji.com/fang/agent/baishaling/';
$url[]='http://sz.ganji.com/fang/agent/chegongmiao/';
$url[]='http://sz.ganji.com/fang/agent/caitiancun/';
$url[]='http://sz.ganji.com/fang/agent/chiwei/';
$url[]='http://sz.ganji.com/fang/agent/futianquwei/';
$url[]='http://sz.ganji.com/fang/agent/fuminxincun/';
$url[]='http://sz.ganji.com/fang/agent/fuhuaxincun/';
$url[]='http://sz.ganji.com/fang/agent/futiankouan/';
$url[]='http://sz.ganji.com/fang/agent/gangsha/';
$url[]='http://sz.ganji.com/fang/agent/gouwugongyuan/';
$url[]='http://sz.ganji.com/fang/agent/huaqiangbei/';
$url[]='http://sz.ganji.com/fang/agent/huaqiangnan/';
$url[]='http://sz.ganji.com/fang/agent/huanggang/';
$url[]='http://sz.ganji.com/fang/agent/huangmugang/';
$url[]='http://sz.ganji.com/fang/agent/jingtian/';
$url[]='http://sz.ganji.com/fang/agent/lianhuayicun/';
$url[]='http://sz.ganji.com/fang/agent/lianhuaercun/';
$url[]='http://sz.ganji.com/fang/agent/lianhuasancun/';
$url[]='http://sz.ganji.com/fang/agent/lianhuabeicun/';
$url[]='http://sz.ganji.com/fang/agent/lizhigongyuan/';
$url[]='http://sz.ganji.com/fang/agent/shangbu/';
$url[]='http://sz.ganji.com/fang/agent/shangmeilin/';
$url[]='http://sz.ganji.com/fang/agent/shangsha/';
$url[]='http://sz.ganji.com/fang/agent/shazui/';
$url[]='http://sz.ganji.com/fang/agent/shawei/';
$url[]='http://sz.ganji.com/fang/agent/shisha/';
$url[]='http://sz.ganji.com/fang/agent/xiameilin/';
$url[]='http://sz.ganji.com/fang/agent/xiangmihu/';
$url[]='http://sz.ganji.com/fang/agent/xiasha/';
$url[]='http://sz.ganji.com/fang/agent/xinzhou/';
$url[]='http://sz.ganji.com/fang/agent/yuanling/';
$url[]='http://sz.ganji.com/fang/agent/yitiancun/';
$url[]='http://sz.ganji.com/fang/agent/zhuzilin/';
$url[]='http://sz.ganji.com/fang/agent/futianzhongxinqu/';
$url[]='http://sz.ganji.com/fang/agent/futianqita/';
$url[]='http://sz.ganji.com/fang/agent/buxin/';
$url[]='http://sz.ganji.com/fang/agent/caiwuwei/';
$url[]='http://sz.ganji.com/fang/agent/cuizhu/';
$url[]='http://sz.ganji.com/fang/agent/caobu/';
$url[]='http://sz.ganji.com/fang/agent/dongmen/';
$url[]='http://sz.ganji.com/fang/agent/dushucun/';
$url[]='http://sz.ganji.com/fang/agent/donghu/';
$url[]='http://sz.ganji.com/fang/agent/dongxiao/';
$url[]='http://sz.ganji.com/fang/agent/guomao/';
$url[]='http://sz.ganji.com/fang/agent/huochezhan/';
$url[]='http://sz.ganji.com/fang/agent/huangbeiling/';
$url[]='http://sz.ganji.com/fang/agent/honghu/';
$url[]='http://sz.ganji.com/fang/agent/hongganghuayuan/';
$url[]='http://sz.ganji.com/fang/agent/huagangxincun/';
$url[]='http://sz.ganji.com/fang/agent/jindaotian/';
$url[]='http://sz.ganji.com/fang/agent/luohuquwei/';
$url[]='http://sz.ganji.com/fang/agent/liantang/';
$url[]='http://sz.ganji.com/fang/agent/liuyibu/';
$url[]='http://sz.ganji.com/fang/agent/lixiangxincheng/';
$url[]='http://sz.ganji.com/fang/agent/nigang/';
$url[]='http://sz.ganji.com/fang/agent/qingshuihe/';
$url[]='http://sz.ganji.com/fang/agent/renminnan/';
$url[]='http://sz.ganji.com/fang/agent/shuiku/';
$url[]='http://sz.ganji.com/fang/agent/shuibei/';
$url[]='http://sz.ganji.com/fang/agent/sungang/';
$url[]='http://sz.ganji.com/fang/agent/tianbei/';
$url[]='http://sz.ganji.com/fang/agent/tianxincun/';
$url[]='http://sz.ganji.com/fang/agent/wenjindu/';
$url[]='http://sz.ganji.com/fang/agent/wenjin/';
$url[]='http://sz.ganji.com/fang/agent/yinhu/';
$url[]='http://sz.ganji.com/fang/agent/luohuqita/';
    $url[]='http://sz.ganji.com/fang/agent/baishizhou/';
$url[]='http://sz.ganji.com/fang/agent/dachong/';
$url[]='http://sz.ganji.com/fang/agent/guimiaolukou/';
$url[]='http://sz.ganji.com/fang/agent/huaqiaocheng/';
$url[]='http://sz.ganji.com/fang/agent/haiwangdasha/';
$url[]='http://sz.ganji.com/fang/agent/houhai/';
$url[]='http://sz.ganji.com/fang/agent/haishangshijie/';
$url[]='http://sz.ganji.com/fang/agent/kejiyuan/';
$url[]='http://sz.ganji.com/fang/agent/nantou/';
$url[]='http://sz.ganji.com/fang/agent/nanshanyiyuan/';
$url[]='http://sz.ganji.com/fang/agent/nanxinlukou/';
$url[]='http://sz.ganji.com/fang/agent/nanyou/';
$url[]='http://sz.ganji.com/fang/agent/qianhai/';
$url[]='http://sz.ganji.com/fang/agent/quzhengfu/';
$url[]='http://sz.ganji.com/fang/agent/shendabeimen/';
$url[]='http://sz.ganji.com/fang/agent/shekou/';
$url[]='http://sz.ganji.com/fang/agent/shenzhenwan/';
$url[]='http://sz.ganji.com/fang/agent/taoyuancun/';
$url[]='http://sz.ganji.com/fang/agent/xili/';
$url[]='http://sz.ganji.com/fang/agent/zhongxinquns/';
$url[]='http://sz.ganji.com/fang/agent/zhaoshangdasha/';
$url[]='http://sz.ganji.com/fang/agent/nanshanqita/';    
    $url[]='http://sz.ganji.com/fang/agent/fanshenlu/';
$url[]='http://sz.ganji.com/fang/agent/fuyong/';
$url[]='http://sz.ganji.com/fang/agent/guanlan/';
$url[]='http://sz.ganji.com/fang/agent/gongming/';
$url[]='http://sz.ganji.com/fang/agent/jinxiujiangnan/';
$url[]='http://sz.ganji.com/fang/agent/longhua/';
$url[]='http://sz.ganji.com/fang/agent/minzhi/';
$url[]='http://sz.ganji.com/fang/agent/meilinguankou/';
$url[]='http://sz.ganji.com/fang/agent/meili365huayuan/';
$url[]='http://sz.ganji.com/fang/agent/qianlonghuayuan/';
$url[]='http://sz.ganji.com/fang/agent/shajing/';
$url[]='http://sz.ganji.com/fang/agent/shiyan/';
$url[]='http://sz.ganji.com/fang/agent/songgang/';
$url[]='http://sz.ganji.com/fang/agent/taoyuanju/';
$url[]='http://sz.ganji.com/fang/agent/wankecheng/';
$url[]='http://sz.ganji.com/fang/agent/xixiang/';
$url[]='http://sz.ganji.com/fang/agent/xinan/';
$url[]='http://sz.ganji.com/fang/agent/xinzhongxinqu/';
$url[]='http://sz.ganji.com/fang/agent/yingshuishanzhuang/';
$url[]='http://sz.ganji.com/fang/agent/baoanzhongxinqu/';
$url[]='http://sz.ganji.com/fang/agent/baoanqita/';
    $url[]='http://sz.ganji.com/fang/agent/bujiguan/';
$url[]='http://sz.ganji.com/fang/agent/buji/';
$url[]='http://sz.ganji.com/fang/agent/bantian/';
$url[]='http://sz.ganji.com/fang/agent/dafencun/';
$url[]='http://sz.ganji.com/fang/agent/guifangyuan/';
$url[]='http://sz.ganji.com/fang/agent/henggang/';
$url[]='http://sz.ganji.com/fang/agent/kangqiao/';
$url[]='http://sz.ganji.com/fang/agent/keyuan/';
$url[]='http://sz.ganji.com/fang/agent/kuichong/';
$url[]='http://sz.ganji.com/fang/agent/longgangzhongxincheng/';
$url[]='http://sz.ganji.com/fang/agent/longzhuhuayuan/';
$url[]='http://sz.ganji.com/fang/agent/longgangnanao/';
$url[]='http://sz.ganji.com/fang/agent/pinghu/';
$url[]='http://sz.ganji.com/fang/agent/pingdi/';
$url[]='http://sz.ganji.com/fang/agent/longgangqita/';
    $url[]='http://sz.ganji.com/fang/agent/dameisha/';
$url[]='http://sz.ganji.com/fang/agent/shatoujiao/';
$url[]='http://sz.ganji.com/fang/agent/xiaomeisha/';
$url[]='http://sz.ganji.com/fang/agent/yantian1/';
$url[]='http://sz.ganji.com/fang/agent/yantianqita/';
    $url[]='http://sz.ganji.com/fang/agent/guangmingxinqu/'; 
    $url[]='http://sz.ganji.com/fang/agent/pingshanxinqu/';
   $url[]='http://sz.ganji.com/fang/agent/dapengxinqu/';
    $url[]='http://sz.ganji.com/fang/agent/shenzhenzhoubian/';
    $url[]='http://sz.ganji.com/fang/agent/longhuaxinqu/';



	// $snoopy = new Snoopy;
	// $snoopy->host = 'http://sz.ganji.com/fang/agent/guangmingxinqu/';
	// //$snoopy->fetchlinks($snoopy->host);
	// $snoopy-> fetchtext($snoopy->host); //获取所有文本内容（去掉html代码）

	// print_r($snoopy->results);

	// $a = preg_match_all('([0-9]{11})',$snoopy->results,$phone);
	// print_r($phone);
	// die();
	// $a = preg_grep('([0-9]{11})', $snoopy->results);

	// print_r($a);



//    die();
	$snoopy = new Snoopy;
    foreach ($url as $key => $value) {
    	# code...
    	for ($c=1; $c <= 100; $c++) { 
    		# code...
    		$snoopy->host = $url[$key].'o'.$c;
			$snoopy-> fetchtext($snoopy->host); //获取所有文本内容（去掉html代码）
			preg_match_all('([0-9]{11})',$snoopy->results,$phone);
			//print_r($phone);
			//echo '<pre>'.print_r($phone,1).'</pre>';
			//die();
			foreach ($phone[0] as $key => $value) {
				echo $value;
				# code...
				insert($value);
			}
    	}
    }