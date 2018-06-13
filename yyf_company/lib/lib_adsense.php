<?php
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$data=pdo_fetch("SELECT * FROM ".tablename('yyf_company_adsense')." where `uniacid`='$uniacid' order by id desc limit 1");

		//print_r($data1);
		if(checksubmit()){
			$data=array();
			$data['uniacid']=$_W['uniacid'];
			$data['ad_height']=$_GPC['ad_height'];
			$data['ad1_height']=$_GPC['ad1_height'];

			$data['ad_url']=$_GPC['ad_url'];
			$data['ad1_url']=$_GPC['ad1_url'];
			$data['ad2_url']=$_GPC['ad2_url'];

			$data['ad_img']=$_GPC['ad_img'];
			$data['ad1_img']=$_GPC['ad1_img'];
			$data['ad2_img']=$_GPC['ad2_img'];

			$result=pdo_fetch("SELECT `id` FROM ".tablename('yyf_company_adsense')." where `uniacid`='$uniacid' order by id desc limit 1");
			
			if($result['id']){
				$res=pdo_update('yyf_company_adsense',$data,array('id'=>$result['id']));
			}else{
				$res=pdo_insert('yyf_company_adsense',$data);
			}
			if($res){
				message('修改成功');
			}
		}

		include $this->template('adsense');
?>