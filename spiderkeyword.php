<?php


//搜索关键字

$keyword = array('fd' => '房贷', 
				 'dk' => '贷款', 
				 'dy' => '抵押', 
				 'dz' => '垫资', 
				 'sl' => '赎楼', 
				 'wd' => '网贷', 
				 'rz' => '融资', 
				 'cd' => '车贷', 
				 'xd' => '小贷', 
				 'jk' => '借款', 
				 'xyd' => '信用贷', 
				 'tz' => '投资', 
				 'lc' => '理财', 
);


//来源
$source = array();

//编码
$decode = array('BAIDU' => 'utf-8' ,
				'QQ' => 'utf-8');

//一财
//http://cbnsearch.yicai.com/cbnsearch.html?start=0&pagecount=20&documentType=2&datetype=1&contenttype=2&searchKeyWords=%E6%88%BF%E8%B4%B7

//http://www.sogou.com/sogou?site=finance.qq.com&query=%E6%88%BF%E8%B4%B7
//&pid=sogou-wsse-b58ac8403eb9cf17-0017&duppid=1&sourceid=inttime_day&ie=utf8&idx=f
//&interV=kKIOkrELjboImLkEk74TkKIMkrELjbkRmLkElbkTkKIRmLkEk78TkKILkbELjboN_-747020274&tsn=1&interation=


//http://search.sina.com.cn/?q=%B3%B5%B4%FB&range=all&c=news&sort=time&page=2
$qurl = array('BAIDU' =>  array('initurl' => 'http://news.baidu.com/ns?'), 
			'QQ' => array('initurl' => 'http://www.sogou.com/sogou?site=finance.qq.com', 
				          'other' =>'&sourceid=inttime_day&idx=f&duppid=1&ie=utf8&pid=sogou-wsse-b58ac8403eb9cf17-0017&interV=kKIOkrELjboImLkEk74TkKIMkrELjbkRmLkElbkTkKIRmLkEk78TkKILkbELjboN_-747020274&tsn=1&interation=' ,
				          'q' => 'query' ,
				          'page' =>'page' , ),

			'SINA' => array('initurl' => 'http://search.sina.com.cn/?', 
							'q' => 'q',
							'other' => '&range=title&c=news&sort=time',
							'page' =>'page' , ),

			'YICAI' => array('initurl' => 'http://cbnsearch.yicai.com/cbnsearch.html?', 
							'q' => 'searchKeyWords',
							'other' => '&pagecount=20&documentType=2&datetype=4&contenttype=2',
							'page' =>'start' , ),
			);


