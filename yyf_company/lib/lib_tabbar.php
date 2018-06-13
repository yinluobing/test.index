<?php
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$v=pdo_fetch("SELECT * FROM ".tablename('yyf_company_tabbar')." where `uniacid`='$uniacid' order by id desc limit 1");
		
		
		if(checksubmit()){

			$data=array();
			$data['color']=trim($_GPC['color']);
			$data['background_color']=trim($_GPC['background_color']);
			$data['sel_color']=trim($_GPC['sel_color']);
			$data['border_color']=trim($_GPC['border_color']);
			$data['m1_name']=trim($_GPC['m1_name']);
			$data['m2_name']=trim($_GPC['m2_name']);
			$data['m3_name']=trim($_GPC['m3_name']);
			$data['m4_name']=trim($_GPC['m4_name']);

			$data['m1_path']=trim($_GPC['m1_path']);
			$data['m2_path']=trim($_GPC['m2_path']);
			$data['m3_path']=trim($_GPC['m3_path']);
			$data['m4_path']=trim($_GPC['m4_path']);

			$data['m1_selimg']=$_GPC['m1_selimg'];
			$data['m2_selimg']=$_GPC['m2_selimg'];
			$data['m3_selimg']=$_GPC['m3_selimg'];
			$data['m4_selimg']=$_GPC['m4_selimg'];

			$data['m1_img']=$_GPC['m1_img'];
			$data['m2_img']=$_GPC['m2_img'];
			$data['m3_img']=$_GPC['m3_img'];
			$data['m4_img']=$_GPC['m4_img'];
			$data['uniacid']=$_W['uniacid'];

			$result=pdo_fetch("SELECT `id` FROM ".tablename('yyf_company_tabbar')." where `uniacid`='$uniacid' order by id desc limit 1");
			
			if($result['id']){
				$res=pdo_update('yyf_company_tabbar',$data,array('id'=>$result['id']));
			}else{
				$res=pdo_insert('yyf_company_tabbar',$data);
			}
			if($res){
				message('修改成功');
			}
		}

		include $this->template('tabbar');
?>