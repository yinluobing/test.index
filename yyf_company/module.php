<?php
/**
 * 精美企业公司官网小程序模块定义
 */
defined('IN_IA') or exit('Access Denied');

class Yyf_companyModule extends WeModule {

	public function welcomeDisplay($menus = array()) {
		//这里来展示DIY管理界面
		message('',$this->createWebUrl('news'));
	}

}