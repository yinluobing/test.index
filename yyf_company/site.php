<?php
/**
 * 精美企业公司官网小程序模块微站定义
 */
defined('IN_IA') or exit('Access Denied');

class Yyf_companyModuleSite extends WeModuleSite {
	public function doWebTabBar(){
		require_once dirname(__FILE__) . '/lib/lib_tabbar.php';
	}
	public function doWebAdsense(){
		require_once dirname(__FILE__) . '/lib/lib_adsense.php';
	}
	public function doWebDiy(){
		include $this->template('diy');
	}
	public function doWebNavExplain(){
		global $_W,$_GPC;
		$url=MODULE_URL.'images/';
		include $this->template('navexplain');
	}
	public function doWebTitleExplain(){
		global $_W,$_GPC;
		$url=MODULE_URL.'images/';
		include $this->template('titleexplain');
	}

	public function doWebSysinfo(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_company_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
		$lng=$result['jing'];
		$lat=$result['wei'];

		$position=array('lng'=>$lng,'lat'=>$lat);
		if(checksubmit()){
			$data=array();
			$data['notice']=$_GPC['notice'];
			$data['phone']=trim($_GPC['phone']);
			$position=$_GPC['position'];
			$arr=explode(',', $position);
			$data['jing']=$arr[0];
			$data['wei']=$arr[1];
			$data['email']=$_GPC['email'];
			$data['phone2']=trim($_GPC['phone2']);
			$data['qq']=$_GPC['qq'];
			$data['address']=$_GPC['address'];
			$data['copyright']=$_GPC['copyright'];
			$data['uniacid']=$_W['uniacid'];
			$data['name']=$_GPC['name'];
			$data['title']=$_GPC['title'];
			$data['message_email']=$_GPC['message_email'];
			$data['message_title']=$_GPC['message_title'];
			$data['smtp_email']=$_GPC['smtp_email'];
			$data['smtp_key']=$_GPC['smtp_key'];

			$result=pdo_fetch("SELECT `id` FROM ".tablename('yyf_company_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
			if($result['id']){
				$res=pdo_update('yyf_company_sysinfo',$data,array('id'=>$result['id']));
			}else{
				$res=pdo_insert('yyf_company_sysinfo',$data);
			}
			message('修改成功');
			
		}
		include $this->template('sysinfo');
	}
	public function doWebIndexStyle(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$item=pdo_fetch("SELECT * FROM ".tablename('yyf_company_style')." where `uniacid`='$uniacid' order by id desc limit 1");
		$appimg=MODULE_URL.'/images/app.jpg';
		$contactimg=MODULE_URL.'/images/contact.jpg';
		if(checksubmit()){
			$_GPC['slide_close']=='on' ? $data['slide_close']=1 : $data['slide_close']=0;
			$_GPC['nav_close']=='on' ? $data['nav_close']=1 : $data['nav_close']=0;
			$_GPC['notice_close']=='on' ? $data['notice_close']=1 : $data['notice_close']=0;
			$_GPC['custom_close']=='on' ? $data['custom_close']=1 : $data['custom_close']=0;
			$_GPC['hide_time']=='on' ? $data['hide_time']=1 : $data['hide_time']=0;
			$_GPC['hide_title']=='on' ? $data['hide_title']=1 : $data['hide_title']=0;
			$data['contact_logo']=$_GPC['contact_logo'];
			$data['tcolor']=trim($_GPC['tcolor']);
			$data['horn']=$_GPC['horn'];
			$data['contact_name']=$_GPC['contact_name'];
			$data['contact_background']=$_GPC['contact_background'];
			$data['uniacid']=$uniacid;
			$data['slide_height']=$_GPC['slide_height'];
			$data['nav_style']=$_GPC['nav_style'];
			$data['title_style']=$_GPC['title_style'];
			if($item['id']){
				$res=pdo_update('yyf_company_style',$data,array('id'=>$item['id']));
			}else{
				$res=pdo_insert('yyf_company_style',$data);
			}
			message('修改成功');
		}
		include $this->template('indexstyle');
	}

	public function doWebSmtp(){
		global $_W,$_GPC;
		$img1=MODULE_URL.'/images/smtp1.jpg';
		$img2=MODULE_URL.'/images/smtp2.jpg';
		$error="";
		if (!extension_loaded('openssl')) {
			$error="系统检测到您当前的服务器并没有开启openssl扩展，无法发送邮件！登录自己的服务器，找到php.ini文件，检查php.ini中;extension=php_openssl.dll是否存在， 如存在删除掉前面的注释符';'然后保存文件，重启apache或者服务器）";
		}
		include $this->template('smtp');
	}
	public function doWebCateInfo(){
		global $_W,$_GPC;
		$img=MODULE_URL.'/images/';
		include $this->template('cateinfo');
	}

	public function doWebAddnews(){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$list=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_company_category')." where `uniacid`='$uniacid' and `type`<>'3' and `fid`='0' order by sortrank desc");
		
		foreach ($list as $key => $value) {
			$fid=$value['id'];
			$sonArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_company_category')." where `fid`=$fid order by sortrank desc");
			$list[$key]['son']=$sonArr;
		}
		
		if(checksubmit()){
			$data=array();
			$data['title']=$_GPC['title'];
			$data['cid']=$_GPC['cid'];
			$data['thumb']=$_GPC['thumb'];
			$data['addtime']=strtotime($_GPC['addtime']);
			$data['content']=$_GPC['content'];
			$data['uniacid']=$_W['uniacid'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['videosrc']=$_GPC['videosrc'];
			$data['appid']=$_GPC['appid'];
			$data['pageaddress']=$_GPC['pageaddress'];
			$res=pdo_insert('yyf_company_news',$data);
			message('添加成功',$this->createWebUrl('News'));

		}
		include $this->template('addnews');
	}

	public function doWebNews(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		$newObj=tablename('yyf_company_news');
		$catObj=tablename('yyf_company_category');
		$participators = pdo_fetchall("SELECT `id` FROM " . tablename('yyf_company_news') . " where `uniacid`='$uniacid' ORDER BY `id` DESC");
		$total = count($participators);
		if(!isset($_GPC['page'])){$pageindex=1;}else{$pageindex = intval($_GPC['page']);}
		$pagesize =15;
		$pager = pagination($total, $pageindex, $pagesize);
		$p = ($pageindex-1) * 15;
		$list=pdo_fetchall("select $newObj.*,$catObj.name from $newObj left join $catObj on $newObj.cid=$catObj.id where $newObj.`uniacid`='$uniacid' order by id desc limit " . $p . "," . $pagesize);
		foreach ($list as $key => $value) {
			$list[$key]['addtime']=date('Y-m-d',$list[$key]['addtime']);
		}
		include $this->template('news');
	}

	public function doWebEditNews($id=0){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$list=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_company_category')." where `uniacid`='$uniacid' and `type`<>'3' and `fid`='0' order by sortrank desc");
		
		foreach ($list as $key => $value) {
			$fid=$value['id'];
			$sonArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_company_category')." where `fid`=$fid order by sortrank desc");
			$list[$key]['son']=$sonArr;
		}
		if($_GPC['id'] && !checksubmit()){
			$id=$_GPC['id'];
			$data=pdo_get('yyf_company_news',array('id'=>$id,'uniacid'=>$uniacid));
			$data['addtime']=date('Y-m-d',$data['addtime']);
		}
		if(checksubmit()){
			$data=array();
			$data['title']=$_GPC['title'];
			$data['cid']=$_GPC['cid'];
			$data['thumb']=$_GPC['thumb'];
			$data['addtime']=strtotime($_GPC['addtime']);
			$data['content']=$_GPC['content'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['videosrc']=$_GPC['videosrc'];
			$data['appid']=$_GPC['appid'];
			$data['pageaddress']=$_GPC['pageaddress'];
			$id=$_GPC['aid'];
			$res=pdo_update('yyf_company_news',$data,array('id'=>$id));
			
			message('修改成功',$this->createWebUrl('News'));
		}

		include $this->template('editnews');
	}

	public function doWebDelete($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_company_news',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('News'));
		}
	}

	public function doWebSlide(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];

		if(checksubmit()){

			foreach ($_GPC['sortrank'] as $key => $value) {
				$data['sortrank']=$value;
				$id=$_GPC['id'][$key];
				$res=pdo_update('yyf_company_slide',$data,array('id'=>$id,'uniacid'=>$uniacid));
			}
			message('排序成功',$this->createWebUrl('slide'));
		}

		$list=pdo_fetchall("select `id`,`images`,`sortrank` from ".tablename('yyf_company_slide')." where `uniacid`='$uniacid' order by sortrank desc");
		//var_dump($list);
		include $this->template('slide');
	}

	public function doWebEditSlide(){
		global $_W,$_GPC;
		load()->func('tpl');
		$id=$_GPC['id'];
		$uniacid=$_W['uniacid'];
		$data=pdo_get('yyf_company_slide',array('id'=>$id,'uniacid'=>$uniacid));
		
		if(checksubmit()){
			$data=array();
			$data['id']=$_GPC['id'];
			$data['images']=$_GPC['thumb'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['aid']=$_GPC['aid'];
			$res=pdo_update('yyf_company_slide',$data,array('id'=>$id));
			
			message('修改成功',$this->createWebUrl('slide'));
		}

		include $this->template('editslide');
	}
	public function doWebAddSlide(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		if(checksubmit()){
			$data=array();
			$data['sortrank']=$_GPC['sortrank'];
			$data['images']=$_GPC['thumb'];
			$data['uniacid']=$uniacid;
			$data['aid']=$_GPC['aid'];
			$res=pdo_insert('yyf_company_slide',$data);
			message('添加成功',$this->createWebUrl('Slide'));

		}
		include $this->template('addslide');
	}
	public function doWebDeleteSlide($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_company_slide',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('Slide'));
		}
	}

	public function doWebAddCat(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$isson=false;
		$url=MODULE_URL.'images/';
		if($_GPC['son']=='son'){
			$res=pdo_getcolumn('yyf_company_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),'id',1);
			if(!empty($res)){
				$cats=pdo_getall('yyf_company_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),array('id','name'));
				$isson=true;	
			}else{
				message('请先添加顶级分类',$this->createWebUrl('category'));
			}
			
		}
		if(checksubmit()){
			$data['name']=$_GPC['name'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['thumb']=$_GPC['thumb'];
			$data['thumb_height']=$_GPC['thumb_height'];
			$data['type']=$_GPC['type'];
			$_GPC['type']=='3' ? $data['content']=$_GPC['content'] : $data['content']='';
			$_GPC['isshow']=='on' ? $data['isshow']=1 : $data['isshow']=0;
			$_GPC['isshow_nav']=='on' ? $data['isshow_nav']=0 : $data['isshow_nav']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['uniacid']=$uniacid;
			$data['show_num']=trim($_GPC['show_num']);
			$_GPC['hide_navbar']=='on' ? $data['hide_navbar']=0 : $data['hide_navbar']=1;//这是由于之前的不合理设置，导致两个开关相反
			if(!empty($_GPC['son'])){
				$data['fid']=$_GPC['son'];
				$id=$data['fid'];
				$type=pdo_getcolumn('yyf_company_category',array('id'=>$id,'uniacid'=>$uniacid),'type',1);
				$data['type']=$type;
			}
			$res=pdo_insert('yyf_company_category',$data);
			if($res){
				message('添加分类成功',$this->createWebUrl('category'));
			}
		}
		$imgdesc=MODULE_URL.'images/imgdesc.jpg';
		include $this->template('addcat');
	}

	public function doWebCategory(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if(checksubmit()){
			foreach ($_GPC['sortrank'] as $key => $value) {
				$data['sortrank']=$value;
				$id=$_GPC['id'][$key];
				$res=pdo_update('yyf_company_category',$data,array('id'=>$id,'uniacid'=>$uniacid));
			}
			message('排序成功',$this->createWebUrl('category'));
		}
		$isson=false;
		if(!empty($_GPC['son'])){
			$isson=true;
			$fid=$_GPC['son'];
			$result=pdo_fetchall("select * from ".tablename('yyf_company_category')." where `uniacid`='$uniacid' and `fid`='$fid' order by `sortrank` desc");
		}else{
			$result=pdo_fetchall("select * from ".tablename('yyf_company_category')." where `uniacid`='$uniacid' and `fid`='0' order by `sortrank` desc");
		}
		
		include $this->template('category');
	}

	public function doWebEditCat(){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$url=MODULE_URL.'images/';
		if($_GPC['id'] && !checksubmit()){
			$id=$_GPC['id'];
			$data=pdo_get('yyf_company_category',array('id'=>$id,'uniacid'=>$uniacid));

			$isson=false;
			if($_GPC['son']=='son'){
				$cats=pdo_getall('yyf_company_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),array('id','name'));
				$isson=true;
			}
		}
		if(checksubmit()){

			$data=array();
			$data['name']=$_GPC['name'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['thumb']=$_GPC['thumb'];
			$data['type']=$_GPC['type'];
			$data['thumb_height']=$_GPC['thumb_height'];
			$_GPC['type']=='3' ? $data['content']=$_GPC['content'] : $data['content']='';
			$_GPC['isshow']=='on' ? $data['isshow']=1 : $data['isshow']=0;
			$_GPC['isshow_nav']=='on' ? $data['isshow_nav']=0 : $data['isshow_nav']=1;
			$_GPC['hide_navbar']=='on' ? $data['hide_navbar']=0 : $data['hide_navbar']=1;
			$data['show_num']=trim($_GPC['show_num']);
			$id=$_GPC['id'];
			if(!empty($_GPC['son'])){
				$data['fid']=$_GPC['son'];
			}
			$res=pdo_update('yyf_company_category',$data,array('id'=>$id));
			
			message('修改成功',$this->createWebUrl('category'));
		}
		$imgdesc=MODULE_URL.'images/imgdesc.jpg';
		include $this->template('editcat');
	}

	public function doWebDelCat(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_company_category',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('category'));
		}
	}

	

	public function doWebChoiceCatImg(){
		global $_W,$_GPC;
		$url=MODULE_URL.'images/';
		include $this->template('choicecatimg');
	}

	public function doWebQuestion(){
		global $_W,$_GPC;
		include $this->template('question');
	}

	public function doWebTemplets(){
		global $_W,$_GPC;
		include $this->template('templets');
	}

	public function doWebForm(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		$formObj=tablename('yyf_company_formvalue');
		
		$participators = pdo_fetchall("SELECT `id` FROM " . tablename('yyf_company_formvalue') . " where `uniacid`='$uniacid' ORDER BY `id` DESC");
		$total = count($participators);
		if(!isset($_GPC['page'])){$pageindex=1;}else{$pageindex = intval($_GPC['page']);}
		$pagesize =15;
		$pager = pagination($total, $pageindex, $pagesize);
		$p = ($pageindex-1) * 15;
		$list=pdo_fetchall("select * from $formObj where `uniacid`='$uniacid' order by id desc limit " . $p . "," . $pagesize);
		foreach ($list as $key => $value) {
			$list[$key]['addtime']=date('Y-m-d  H:i',$list[$key]['addtime']);
		}
		include $this->template('form');
	}
	public function doWebFormRead(){
		global $_W,$_GPC;
		load()->func('tpl');
		$id=$_GPC['id'];
		$uniacid=$_W['uniacid'];
		$data=pdo_get('yyf_company_formvalue',array('id'=>$id,'uniacid'=>$uniacid));
		//print_r($data);die();
		pdo_update('yyf_company_formvalue',array('read'=>'1'),array('id'=>$id,'uniacid'=>$uniacid));
		include $this->template('formread');
	}

	public function doWebFormDelete($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_company_formvalue',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('form'));
		}
	}

	public function doWebFormClose(){
		global $_W,$_GPC;
		
		include $this->template('formclose');
	}

	public function doWebFormConfig(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$url=MODULE_URL.'images/';
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_company_form')." where `uniacid`='$uniacid' order by id desc limit 1");
		$v=$result;
		if(checksubmit()){
			// print_r($_GPC);die();
			$data=array();
			$data['templet']=$_GPC['templet'];
			$data['thumb']=$_GPC['thumb'];
			$data['catname']=$_GPC['catname'];
			$data['t1name']=$_GPC['t1name'];
			$data['t1show']=isset($_GPC['t1show']) ? $_GPC['t1show']=1 :'';
			$data['t1full']=isset($_GPC['t1full']) ? $_GPC['t1full']=1 :'';

			$data['t2name']=$_GPC['t2name'];
			$data['t2show']=isset($_GPC['t2show']) ? $_GPC['t2show']=1 :'';
			$data['t2full']=isset($_GPC['t2full']) ? $_GPC['t2full']=1 :'';

			$data['t3name']=$_GPC['t3name'];
			$data['t3show']=isset($_GPC['t3show']) ? $_GPC['t3show']=1 :'';
			$data['t3full']=isset($_GPC['t3full']) ? $_GPC['t3full']=1 :'';

			$data['t4name']=$_GPC['t4name'];
			$data['t4show']=isset($_GPC['t4show']) ? $_GPC['t4show']=1 :'';
			$data['t4full']=isset($_GPC['t4full']) ? $_GPC['t4full']=1 :'';

			$data['rname']=$_GPC['rname'];
			$data['rshow']=isset($_GPC['rshow']) ? $_GPC['rshow']=1 :'';
			$data['rfull']=isset($_GPC['rfull']) ? $_GPC['rfull']=1 :'';
			$data['rvalue']=$_GPC['rvalue'];

			$data['cname']=$_GPC['cname'];
			$data['cshow']=isset($_GPC['cshow']) ? $_GPC['cshow']=1 :'';
			$data['cfull']=isset($_GPC['cfull']) ? $_GPC['cfull']=1 :'';
			$data['cvalue']=$_GPC['cvalue'];

			$data['aname']=$_GPC['aname'];
			$data['ashow']=isset($_GPC['ashow']) ? $_GPC['ashow']=1 :'';
			$data['afull']=isset($_GPC['afull']) ? $_GPC['afull']=1 :'';

			$data['desc']=$_GPC['desc'];
			$data['interval']=$_GPC['interval'];
			$data['successtext']=$_GPC['successtext'];



			if($result['id']){
				$res=pdo_update('yyf_company_form',$data,array('id'=>$result['id']));
			}else{
				$data['uniacid']=$uniacid;
				$res=pdo_insert('yyf_company_form',$data);
			}
			
			if($res){
				message('修改成功');
			}
		}
		include $this->template('formconfig');
	}

	

}