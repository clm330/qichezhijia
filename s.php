<?php
require 'sql.php';

class Spider{

	function __construct()
	{

	}


	public function gettype($city)
	{
		$city='shenzhen';
		$initurl='http://www.che168.com/shenzhen/list/';
		$UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_REFERER, 'http://www.che168.com/shenzhen/');
		curl_setopt($curl, CURLOPT_URL, $initurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
		curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
		$content = curl_exec($curl);
	    $content = iconv("gb2312","utf-8//IGNORE",$content);
	   	//preg_match_all('(shenzhen/([a-z]+)/#pvareaid=100511)',$content,$list);

		$more='                                <dd><span class="en">A</span><div class="en-tx"><a href="/shenzhen/aodi/#pvareaid=100511">奥迪</a><a href="/shenzhen/aerfaluomiou/#pvareaid=100511">阿尔法罗密欧</a><a href="/shenzhen/asidunmading/#pvareaid=100511">阿斯顿·马丁</a></div></dd><dd><span class="en">B</span><div class="en-tx"><a href="/shenzhen/beiqihuansu/#pvareaid=100511">北汽幻速</a><a href="/shenzhen/baojun/#pvareaid=100511">宝骏</a><a href="/shenzhen/babosi/#pvareaid=100511">巴博斯</a><a href="/shenzhen/beiqiweiwang/#pvareaid=100511">北汽威旺</a><a href="/shenzhen/beiqizhizao/#pvareaid=100511">北汽制造</a><a href="/shenzhen/benchi/#pvareaid=100511">奔驰</a><a href="/shenzhen/bujiadi/#pvareaid=100511">布加迪</a><a href="/shenzhen/bieke/#pvareaid=100511">别克</a><a href="/shenzhen/binli/#pvareaid=100511">宾利</a><a href="/shenzhen/baoshijie/#pvareaid=100511">保时捷</a><a href="/shenzhen/biyadi/#pvareaid=100511">比亚迪</a><a href="/shenzhen/benteng/#pvareaid=100511">奔腾</a><a href="/shenzhen/biaozhi/#pvareaid=100511">标致</a><a href="/shenzhen/bentian/#pvareaid=100511">本田</a><a href="/shenzhen/baoma/#pvareaid=100511">宝马</a><a href="/shenzhen/beijingqiche/#pvareaid=100511">北京汽车</a></div></dd><dd><span class="en">C</span><div class="en-tx"><a href="/shenzhen/changhe/#pvareaid=100511">昌河</a><a href="/shenzhen/changan/#pvareaid=100511">长安</a><a href="/shenzhen/changcheng/#pvareaid=100511">长城</a><a href="/shenzhen/changanshangyong/#pvareaid=100511">长安商用</a></div></dd><dd><span class="en">D</span><div class="en-tx"><a href="/shenzhen/dongfengfengdu/#pvareaid=100511">东风风度</a><a href="/shenzhen/dongfengfengxing/#pvareaid=100511">东风风行</a><a href="/shenzhen/ds/#pvareaid=100511">DS</a><a href="/shenzhen/dongfengxiaokang/#pvareaid=100511">东风小康</a><a href="/shenzhen/dongfengfengshen/#pvareaid=100511">东风风神</a><a href="/shenzhen/dongnan/#pvareaid=100511">东南</a><a href="/shenzhen/daoqi/#pvareaid=100511">道奇</a><a href="/shenzhen/dafa/#pvareaid=100511">大发</a><a href="/shenzhen/dongfeng/#pvareaid=100511">东风</a><a href="/shenzhen/dazhong/#pvareaid=100511">大众</a></div></dd><dd><span class="en">F</span><div class="en-tx"><a href="/shenzhen/fengtian/#pvareaid=100511">丰田</a><a href="/shenzhen/fute/#pvareaid=100511">福特</a><a href="/shenzhen/feiyate/#pvareaid=100511">菲亚特</a><a href="/shenzhen/futian/#pvareaid=100511">福田</a><a href="/shenzhen/falali/#pvareaid=100511">法拉利</a><a href="/shenzhen/fudi/#pvareaid=100511">福迪</a><a href="/shenzhen/fuqiqiteng/#pvareaid=100511">福汽启腾</a></div></dd><dd><span class="en">G</span><div class="en-tx"><a href="/shenzhen/guanzhi/#pvareaid=100511">观致</a><a href="/shenzhen/gmc/#pvareaid=100511">GMC</a><a href="/shenzhen/guangqijiao/#pvareaid=100511">广汽吉奥</a><a href="/shenzhen/guangqichuanzuo/#pvareaid=100511">广汽传祺</a></div></dd><dd><span class="en">H</span><div class="en-tx"><a href="/shenzhen/hanma/#pvareaid=100511">悍马</a><a href="/shenzhen/huanghai/#pvareaid=100511">黄海</a><a href="/shenzhen/hongqi/#pvareaid=100511">红旗</a><a href="/shenzhen/huapu/#pvareaid=100511">华普</a><a href="/shenzhen/haima/#pvareaid=100511">海马</a><a href="/shenzhen/huatai/#pvareaid=100511">华泰</a><a href="/shenzhen/hafei/#pvareaid=100511">哈飞</a><a href="/shenzhen/hafu/#pvareaid=100511">哈弗</a></div></dd><dd><span class="en">J</span><div class="en-tx"><a href="/shenzhen/jiulong/#pvareaid=100511">九龙</a><a href="/shenzhen/jiangling/#pvareaid=100511">江铃</a><a href="/shenzhen/jiliqiche/#pvareaid=100511">吉利汽车</a><a href="/shenzhen/jeep/#pvareaid=100511">Jeep</a><a href="/shenzhen/jiebao/#pvareaid=100511">捷豹</a><a href="/shenzhen/jinbei/#pvareaid=100511">金杯</a><a href="/shenzhen/jianghuai/#pvareaid=100511">江淮</a></div></dd><dd><span class="en">K</span><div class="en-tx"><a href="/shenzhen/kairui/#pvareaid=100511">开瑞</a><a href="/shenzhen/kaidilake/#pvareaid=100511">凯迪拉克</a><a href="/shenzhen/kelaisile/#pvareaid=100511">克莱斯勒</a></div></dd><dd><span class="en">L</span><div class="en-tx"><a href="/shenzhen/laolunshi/#pvareaid=100511">劳伦士</a><a href="/shenzhen/linian/#pvareaid=100511">理念</a><a href="/shenzhen/leinuo/#pvareaid=100511">雷诺</a><a href="/shenzhen/lanbojini/#pvareaid=100511">兰博基尼</a><a href="/shenzhen/luhu/#pvareaid=100511">路虎</a><a href="/shenzhen/lutesi/#pvareaid=100511">路特斯</a><a href="/shenzhen/linken/#pvareaid=100511">林肯</a><a href="/shenzhen/leikesasi/#pvareaid=100511">雷克萨斯</a><a href="/shenzhen/lingmu/#pvareaid=100511">铃木</a><a href="/shenzhen/laosilaisi/#pvareaid=100511">劳斯莱斯</a><a href="/shenzhen/lufeng/#pvareaid=100511">陆风</a><a href="/shenzhen/lianhuaqiche/#pvareaid=100511">莲花汽车</a><a href="/shenzhen/lifan/#pvareaid=100511">力帆</a><a href="/shenzhen/liebaoqiche/#pvareaid=100511">猎豹汽车</a></div></dd><dd><span class="en">M</span><div class="en-tx"><a href="/shenzhen/maibahe/#pvareaid=100511">迈巴赫</a><a href="/shenzhen/mini/#pvareaid=100511">MINI</a><a href="/shenzhen/mashaladi/#pvareaid=100511">玛莎拉蒂</a><a href="/shenzhen/mazida/#pvareaid=100511">马自达</a><a href="/shenzhen/mg/#pvareaid=100511">MG</a><a href="/shenzhen/maikailun/#pvareaid=100511">迈凯伦</a></div></dd><dd><span class="en">N</span><div class="en-tx"><a href="/shenzhen/nazhijie/#pvareaid=100511">纳智捷</a></div></dd><dd><span class="en">O</span><div class="en-tx"><a href="/shenzhen/oulang/#pvareaid=100511">欧朗</a><a href="/shenzhen/oubao/#pvareaid=100511">欧宝</a><a href="/shenzhen/zuoge/#pvareaid=100511">讴歌</a></div></dd><dd><span class="en">Q</span><div class="en-tx"><a href="/shenzhen/qiya/#pvareaid=100511">起亚</a><a href="/shenzhen/qirui/#pvareaid=100511">奇瑞</a><a href="/shenzhen/qichen/#pvareaid=100511">启辰</a></div></dd><dd><span class="en">R</span><div class="en-tx"><a href="/shenzhen/ruizuo/#pvareaid=100511">瑞麒</a><a href="/shenzhen/rongwei/#pvareaid=100511">荣威</a><a href="/shenzhen/richan/#pvareaid=100511">日产</a></div></dd><dd><span class="en">S</span><div class="en-tx"><a href="/shenzhen/sabo/#pvareaid=100511">萨博</a><a href="/shenzhen/sibalu/#pvareaid=100511">斯巴鲁</a><a href="/shenzhen/shijue/#pvareaid=100511">世爵</a><a href="/shenzhen/sikeda/#pvareaid=100511">斯柯达</a><a href="/shenzhen/sanling/#pvareaid=100511">三菱</a><a href="/shenzhen/shuanglong/#pvareaid=100511">双龙</a><a href="/shenzhen/smart/#pvareaid=100511">smart</a><a href="/shenzhen/shuanghuan/#pvareaid=100511">双环</a><a href="/shenzhen/shenbao/#pvareaid=100511">绅宝</a><a href="/shenzhen/siming/#pvareaid=100511">思铭</a><a href="/shenzhen/shangqidatong/#pvareaid=100511">上汽大通</a></div></dd><dd><span class="en">T</span><div class="en-tx"><a href="/shenzhen/tesila/#pvareaid=100511">特斯拉</a></div></dd><dd><span class="en">W</span><div class="en-tx"><a href="/shenzhen/wushiling/#pvareaid=100511">五十铃</a><a href="/shenzhen/wulingqiche/#pvareaid=100511">五菱汽车</a><a href="/shenzhen/weizuo/#pvareaid=100511">威麟</a><a href="/shenzhen/woerwo/#pvareaid=100511">沃尔沃</a></div></dd><dd><span class="en">X</span><div class="en-tx"><a href="/shenzhen/xuefolan/#pvareaid=100511">雪佛兰</a><a href="/shenzhen/xuetielong/#pvareaid=100511">雪铁龙</a><a href="/shenzhen/xiandai/#pvareaid=100511">现代</a><a href="/shenzhen/xiyate/#pvareaid=100511">西雅特</a><a href="/shenzhen/xinkai/#pvareaid=100511">新凯</a></div></dd><dd><span class="en">Y</span><div class="en-tx"><a href="/shenzhen/yiqi/#pvareaid=100511">一汽</a><a href="/shenzhen/yemaqiche/#pvareaid=100511">野马汽车</a><a href="/shenzhen/yiweike/#pvareaid=100511">依维柯</a><a href="/shenzhen/yongyuan/#pvareaid=100511">永源</a><a href="/shenzhen/yingfeinidi/#pvareaid=100511">英菲尼迪</a></div></dd><dd><span class="en">Z</span><div class="en-tx"><a href="/shenzhen/zhongxing/#pvareaid=100511">中兴</a><a href="/shenzhen/zhonghua/#pvareaid=100511">中华</a><a href="/shenzhen/zhongtai/#pvareaid=100511">众泰</a></div></dd></dl>
';
	   	preg_match_all("(shenzhen/([a-z]+)/#pvareaid=100511)",$more,$morelist);
	   	//var_dump($morelist[1]);

	   	return $morelist[1];

	}


	public function getfinalurl($url){

		$url = 'http://www.che168.com/shenzhen/baoshijie/a0_0msdgscncgpi1ltocsp2ex/';
		$UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_REFERER, 'http://www.che168.com/shenzhen/');
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
		curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
		$content = curl_exec($curl);
	    $content = iconv("gb2312","utf-8//IGNORE",$content);

	   	preg_match_all('(<a href="/(dealer/[0-9]+/[0-9]+.html)#pvareaid=100519"(.*)</a>)',$content,$lasturl);
	   	preg_match_all('(<a href="/(personal/[0-9]+.html)#pvareaid=100519")',$content,$presonalurl);

	   	//print_r($presonalurl[1]);
	   	//die();
	   	$woqulenimalegebi = array();
	   	if(count($presonalurl[1])>0)
	   	{
		   	$woqulenimalegebi = array_merge($lasturl[1],$presonalurl[1]);
	   	}
	   	else
	   	{
	   		$woqulenimalegebi = $lasturl;
	   	}

	   	//print_r($woqulenimalegebi);
	   	//die();


	   	$finalurl = array();
	   	foreach ($woqulenimalegebi as $key => $value) {
	   		$finalurl='http://www.che168.com/'.$woqulenimalegebi[$key];
	   		echo $finalurl;
			$this->getdata($finalurl);	   		
	   	}

	   	//print_r($finalurl);

	}	



	public function mergeurl(){


		$mergeurl = $this->gettype();

		$url = array();
		foreach ($mergeurl as $key => $type) {
			$url[$key] = 'http://www.che168.com/shenzhen/'.$type.'/';
			$securl=array();
			for($i=0;$i<9;$i++)
			{
				//$securl=$url[$key].'a'.$i.'_'.($i+1).'msdgscncgpiltocsp'.'ex/';
				$securl = $url[$key].'a'.$i.'_'.($i+1).'msdgscncgpiltocsp';
				for($j=1;$j<=300;$j++){
					$thiurl = $securl.$j.'ex/';
					echo $thiurl;
					$this->getfinalurl();
				}
				//print_r($securl);
			}

		}
		//print_r($url);
	}


	public function getdata($finalurl){

		//$finalurl = 'http://www.che168.com/personal/3677463.html';
		$UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $finalurl);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
		$content = curl_exec($curl);
	    $content = iconv("gb2312","utf-8//IGNORE",$content);

	   	preg_match_all('(<span class="font30">(.*)</span>)',$content,$price);
	   	preg_match_all('(<span class="font22">(.*)</span>)', $content, $phone);
	   	preg_match_all('(<h2 title="(.*)">)', $content, $carinfo);
	   	preg_match_all('(<div>(.*)</div><div>(.*)<i class="icon-adress"></i></div>)', $content, $address);

		// 手机，名字，地址，型号，价格
	   	$xinghao = $carinfo[1][0];   
	   	$jiage = $price[1][0];
	   	$shouji = $phone[1][0];
	   	$mingzi = $address[1][0];
	   	$dizhi = $address[2][0];

		insert($shouji,$mingzi,$dizhi,$xinghao,$jiage);
	}





}


$A = new Spider;

$A->getfinalurl('http://www.che168.com/shenzhen/aodi/a0_1msdgscncgpiltocsp2ex/');
