<?php
defined("IN_IA") or die("Access Denied");
class Yyf_companyModuleWxapp extends WeModuleWxapp
{
    public function doPageTabBar()
    {
        global $_GPC, $_W;
        require_once dirname(__FILE__) . "/lib/lib_wx_tabbar.php";
    }
    public function doPageAdsense()
    {
        global $_GPC, $_W;
        require_once dirname(__FILE__) . "/lib/lib_wx_adsense.php";
    }
    public function doPageIndex()
    {
        goto NlF_Y;
        GANfS:
        $list = pdo_fetchall("select `aid`,`images` from " . tablename("yyf_company_slide") . " where `uniacid`='{$uniacid}' order by `sortrank` desc");
        goto s0Zu3;
        fbZkD:
        $data["sysinfo"] = $result;
        goto p2QQC;
        p2QQC:
        $cats = pdo_fetchall("SELECT `id`,`name`,`thumb`,`type` FROM " . tablename("yyf_company_category") . " where `uniacid`='{$uniacid}' and `fid`='0' and `isshow_nav`='0' order by sortrank desc");
        goto O4U5k;
        YQ5CJ:
        $data["horn"] = tomedia($hornData["horn"]);
        goto PzZJE;
        LHG_t:
        $hornData = pdo_get("yyf_company_style", array("uniacid" => $uniacid), array("horn", "slide_close", "nav_close", "notice_close", "slide_height", "nav_style", "title_style", "hide_time", "hide_title"));
        goto YQ5CJ;
        VeXX1:
        $result = pdo_fetch("SELECT `jing`,`wei`,`notice`,`phone`,`copyright`,`name`,`title` FROM " . tablename("yyf_company_sysinfo") . " where `uniacid`='{$uniacid}' order by id desc limit 1");
        goto fbZkD;
        NlF_Y:
        global $_GPC, $_W;
        goto nweIh;
        f7vKr:
        $data["cats"] = $cats;
        goto unre1;
        K7tqy:
        wfxyS:
        goto f7vKr;
        cOWpm:
        $errno = 0;
        goto DGdsO;
        VpR92:
        $data["notice_close"] = $hornData["notice_close"];
        goto iCIbE;
        PzZJE:
        $data["slide_close"] = $hornData["slide_close"];
        goto wEuO0;
        ij0mU:
        $data["hide_time"] = $hornData["hide_time"];
        goto MCban;
        DD8sT:
        $message = "返回消息";
        goto cOWpm;
        yJLID:
        $data["title_style"] = $hornData["title_style"];
        goto ij0mU;
        b3kH8:
        qmYAZ:
        goto iUkow;
        wEuO0:
        $data["nav_close"] = $hornData["nav_close"];
        goto VpR92;
        nweIh:
        $uniacid = $_GPC["uniacid"];
        goto GANfS;
        F1w__:
        $data["nav_style"] = $hornData["nav_style"];
        goto yJLID;
        G7yqS:
        $catlist = pdo_fetchall("select `id` , `name`,`type`,`show_num`,`hide_navbar`,`thumb_height` from " . tablename("yyf_company_category") . " where `type`<>'3' and `isshow`='1' and `uniacid`='{$uniacid}' and `fid`='0' order by `sortrank` desc");
        goto wuY_Q;
        s0Zu3:
        foreach ($list as $key => $value) {
            goto KfhT_;
            KfhT_:
            $list[$key]["images"] = tomedia($value["images"]);
            goto OCVGM;
            cLzsV:
            if (empty($videosrc)) {
                goto GF743;
            }
            goto GoY4P;
            OEO4V:
            $videosrc = trim($videosrc);
            goto cLzsV;
            n8A1P:
            GF743:
            goto vrEW6;
            xB5f0:
            $videosrc = pdo_getcolumn("yyf_company_news", array("id" => $aid), "videosrc");
            goto OEO4V;
            OCVGM:
            $aid = $value["aid"];
            goto xB5f0;
            s5_rU:
            m4GOR:
            goto HJD6b;
            YrskE:
            goto tzLS5;
            goto n8A1P;
            bEwNQ:
            tzLS5:
            goto s5_rU;
            vrEW6:
            $list[$key]["url"] = "../content/content?id=" . $value["aid"];
            goto bEwNQ;
            GoY4P:
            $list[$key]["url"] = "../video/video?id=" . $value["aid"];
            goto YrskE;
            HJD6b:
        }
        goto b3kH8;
        MCban:
        $data["hide_title"] = $hornData["hide_title"];
        goto a5K7V;
        a5K7V:
        $data["list"] = $list;
        goto DD8sT;
        wuY_Q:
        foreach ($catlist as $key => $value) {
            goto kBPEq;
            xHpqE:
            nldjB:
            goto cgQe7;
            WjHte:
            $list[$key] = $value;
            goto TgCW1;
            scDbQ:
            cUBub:
            goto Gc7gd;
            VBDzv:
            xaGgI:
            goto jmkE4;
            oa0_T:
            $JC8rM = !count($datalist);
            goto buwZe;
            r06Km:
            goto sPIfT;
            goto yce4q;
            C3DZB:
            $cids .= $fid;
            goto iZw1N;
            i4wft:
            goto sPIfT;
            goto AKYXf;
            qBDCu:
            goto sPIfT;
            goto VBDzv;
            KIRTp:
            foreach ($catSonList as $k => $v) {
                $cids .= $v["id"] . ",";
                NRj6I:
            }
            goto YMedO;
            LnbVA:
            $list[$key]["url"] = "../news/news?tid=" . $value["id"];
            goto r06Km;
            FPiZW:
            $catSonList = pdo_fetchall("select `id`  from " . tablename("yyf_company_category") . " where `fid`='{$fid}'");
            goto hoeZn;
            buwZe:
            if ($JC8rM) {
                goto cUBub;
            }
            goto WjHte;
            cgQe7:
            $list[$key]["list"] = $datalist;
            goto scDbQ;
            QAPtu:
            $list[$key]["url"] = "../imglist/imglist?tid=" . $value["id"] . "&fid=0";
            goto qBDCu;
            kVjEc:
            if ($value["type"] == 7) {
                goto xaGgI;
            }
            goto LnbVA;
            II863:
            $list[$key]["url"] = "../newsnoimg/newsnoimg?tid=" . $value["id"] . "&fid=0";
            goto i4wft;
            hoeZn:
            $cids = '';
            goto KIRTp;
            TgCW1:
            if ($value["type"] == 1 || $value["type"] == 6) {
                goto cpwRV;
            }
            goto NCzc7;
            etpfd:
            jG4p5:
            goto II863;
            YMedO:
            IK1fF:
            goto C3DZB;
            iZw1N:
            $cids = "`cid` in ({$cids})";
            goto JP2yB;
            pj6bs:
            if ($value["type"] == 5) {
                goto zzRTY;
            }
            goto kVjEc;
            wBuza:
            $list[$key]["url"] = "../case/case?tid=" . $value["id"];
            goto b4465;
            AKYXf:
            zzRTY:
            goto QAPtu;
            b4465:
            goto sPIfT;
            goto etpfd;
            yce4q:
            cpwRV:
            goto wBuza;
            NCzc7:
            if ($value["type"] == 4) {
                goto jG4p5;
            }
            goto pj6bs;
            jmkE4:
            $list[$key]["url"] = "../videolist/videolist?tid=" . $value["id"] . "&fid=0";
            goto U80bs;
            Gc7gd:
            Cf5F_:
            goto HGMMg;
            kBPEq:
            $fid = $value["id"];
            goto FPiZW;
            fWgJX:
            foreach ($datalist as $k => $v) {
                goto gXpeA;
                n55x0:
                $yMsmg = !($value["type"] == "7");
                goto wetgp;
                RCoTX:
                hBrtb:
                goto WVZ3W;
                vwmyl:
                $datalist[$k]["addtime"] = date("Y-m-d", $v["addtime"]);
                goto AgOKU;
                AgOKU:
                goto pXbnf;
                goto o3JJ9;
                wetgp:
                if ($yMsmg) {
                    goto zVk2j;
                }
                goto Edei5;
                iRlEd:
                BJLgc:
                goto RCoTX;
                rwZCk:
                $datalist[$k]["addtime"] = date("m-d", $v["addtime"]);
                goto BYAiz;
                nOlVv:
                if ($value["type"] == "4") {
                    goto mayD6;
                }
                goto vwmyl;
                o3JJ9:
                mayD6:
                goto rwZCk;
                QcGIh:
                zVk2j:
                goto am25Z;
                qL_p4:
                PkwNL:
                goto Tb7yA;
                Tb7yA:
                $datalist[$k]["url"] = "../content/content?id=" . $v["id"];
                goto iRlEd;
                F82f7:
                $datalist[$k]["url"] = "../video/video?id=" . $v["id"];
                goto YZz1v;
                BYAiz:
                pXbnf:
                goto n55x0;
                YZz1v:
                goto BJLgc;
                goto qL_p4;
                am25Z:
                $videosrc = trim($v["videosrc"]);
                goto vWmM1;
                gXpeA:
                $datalist[$k]["thumb"] = tomedia($v["thumb"]);
                goto nOlVv;
                Edei5:
                $datalist[$k]["show_video"] = false;
                goto QcGIh;
                vWmM1:
                if (empty($videosrc)) {
                    goto PkwNL;
                }
                goto F82f7;
                WVZ3W:
            }
            goto xHpqE;
            JP2yB:
            $show_num = $value["show_num"];
            goto FFjLk;
            FFjLk:
            $datalist = pdo_fetchall("select `id` , `cid` ,`title`, `thumb`,`addtime`,`videosrc`,`appid`,`pageaddress` from " . tablename("yyf_company_news") . " where {$cids} and `uniacid`='{$uniacid}' order by sortrank desc,id desc limit {$show_num}");
            goto oa0_T;
            U80bs:
            sPIfT:
            goto fWgJX;
            HGMMg:
        }
        goto WnoUt;
        iCIbE:
        $data["slide_height"] = $hornData["slide_height"];
        goto F1w__;
        iUkow:
        $data["slide"] = $list;
        goto VeXX1;
        unre1:
        $list = array();
        goto G7yqS;
        DGdsO:
        return $this->result($errno, $message, $data);
        goto WcI3x;
        O4U5k:
        foreach ($cats as $key => $value) {
            goto FuBMQ;
            BRHYC:
            if ($value["type"] == 7) {
                goto S9FEx;
            }
            goto qBNcN;
            XG5Xa:
            GFFKl:
            goto MtOiG;
            aBnMe:
            Ypb9y:
            goto Xz7rw;
            skRlR:
            $cats[$key]["url"] = "../videolist/videolist?tid=" . $value["id"] . "&fid=0";
            goto c0rot;
            DCBbH:
            goto ur03q;
            goto VUrjw;
            KkBzS:
            if ($value["type"] == 1 || $value["type"] == 6) {
                goto PPgTj;
            }
            goto KNlaB;
            f2Qpx:
            $cats[$key]["url"] = "../case/case?tid=" . $value["id"] . "&fid=0";
            goto sj0go;
            GDzhj:
            goto ur03q;
            goto aBnMe;
            MtOiG:
            $cats[$key]["url"] = "../newsnoimg/newsnoimg?tid=" . $value["id"] . "&fid=0";
            goto GDzhj;
            qBNcN:
            $cats[$key]["url"] = "../about/about?tid=" . $value["id"];
            goto t0K3r;
            KNlaB:
            if ($value["type"] == 2) {
                goto kmFfs;
            }
            goto QeOoG;
            sj0go:
            goto ur03q;
            goto bTIhN;
            Xz7rw:
            $cats[$key]["url"] = "../imglist/imglist?tid=" . $value["id"] . "&fid=0";
            goto DCBbH;
            bTIhN:
            kmFfs:
            goto oGN78;
            QeOoG:
            if ($value["type"] == 4) {
                goto GFFKl;
            }
            goto axtWC;
            MB8Fa:
            PPgTj:
            goto f2Qpx;
            FuBMQ:
            $cats[$key]["thumb"] = tomedia($value["thumb"]);
            goto KkBzS;
            axtWC:
            if ($value["type"] == 5) {
                goto Ypb9y;
            }
            goto BRHYC;
            c0rot:
            ur03q:
            goto weoCE;
            t0K3r:
            goto ur03q;
            goto MB8Fa;
            weoCE:
            hyiQG:
            goto kAgUu;
            VUrjw:
            S9FEx:
            goto skRlR;
            CV41O:
            goto ur03q;
            goto XG5Xa;
            oGN78:
            $cats[$key]["url"] = "../news/news?tid=" . $value["id"] . "&fid=0";
            goto CV41O;
            kAgUu:
        }
        goto K7tqy;
        WnoUt:
        u9R_I:
        goto LHG_t;
        WcI3x:
    }
    public function doPageContent()
    {
        global $_GPC, $_W;
        if (!$_GPC["id"]) {
            return 1;
        }
        $id = $_GPC["id"];
        $arr = pdo_get("yyf_company_news", array("id" => $id), array("title", "addtime", "content", "videosrc"));
        $arr["addtime"] = date("Y-m-d", $arr["addtime"]);
        $videosrc = trim($arr["videosrc"]);
        empty($videosrc) ? $arr["videosrc"] = 0 : ($arr["videosrc"] = $videosrc);
        $data = $arr;
        $uniacid = $_GPC["uniacid"];
        $hornData = pdo_get("yyf_company_style", array("uniacid" => $uniacid), array("hide_time", "hide_title"));
        $data["hide_time"] = $hornData["hide_time"];
        $data["hide_title"] = $hornData["hide_title"];
        $message = "返回消息";
        $errno = 0;
        $data["content"] = htmlspecialchars_decode($arr["content"]);
        return $this->result($errno, $message, $data);
    }
    public function doPageAbout()
    {
        global $_GPC, $_W;
        $tid = $_GPC["tid"];
        $uniacid = $_GPC["uniacid"];
        $arr = pdo_fetch("SELECT `name`,`content` FROM " . tablename("yyf_company_category") . " where `id`={$tid} and `uniacid`='{$uniacid}'");
        $data = $arr;
        $message = "返回消息";
        $errno = 0;
        $data["content"] = htmlspecialchars_decode($arr["content"]);
        $data["catname"] = $arr["name"];
        return $this->result($errno, $message, $data);
    }
    public function doPageCase()
    {
        global $_GPC, $_W;
        $uniacid = $_GPC["uniacid"];
        $op = $_GPC["op"];
        $id = 2;
        if (!($op != "case")) {
            $newslist = pdo_fetchall("select `id` , `title`, `thumb` from " . tablename("yyf_company_news") . " where `cid`='{$id}' order by id desc");
            foreach ($newslist as $key => $value) {
                $newslist[$key]["thumb"] = tomedia($value["thumb"]);
            }
            $data = $newslist;
            $message = "返回消息";
            $errno = 0;
            return $this->result($errno, $message, $data);
        }
        $id = 3;
    }
    public function doPageNews()
    {
        goto PbcUS;
        zVwTI:
        $data["currentCatId"] = $_GPC["tid"];
        goto XUeff;
        l8RcX:
        $cids .= $tid;
        goto lXd3b;
        GHsWS:
        $uniacid = $_GPC["uniacid"];
        goto UVl1C;
        ESg0C:
        $data["thumb_height"] = $cats["thumb_height"];
        goto wOrI6;
        n9goO:
        $cats = pdo_get("yyf_company_category", array("id" => $tid), array("name", "type", "thumb_height"));
        goto hP1oq;
        zfAUb:
        foreach ($newslist as $key => $value) {
            goto yXs_L;
            KgJ1D:
            $type == 4 ? $newslist[$key]["addtime"] = date("m-d", $value["addtime"]) : '';
            goto rDdqI;
            yXs_L:
            $newslist[$key]["thumb"] = tomedia($value["thumb"]);
            goto qEZjJ;
            tlFlW:
            goto n4yxi;
            goto F0ST1;
            rDdqI:
            $videosrc = trim($value["videosrc"]);
            goto L1V2B;
            qQ2N3:
            $newslist[$key]["url"] = "../content/content?id=" . $value["id"];
            goto J3nLS;
            L1dts:
            $newslist[$key]["show_video"] = false;
            goto KgJ1D;
            hcFtI:
            uMr0I:
            goto nNIH1;
            qEZjJ:
            $newslist[$key]["addtime"] = date("m-d", $value["addtime"]);
            goto L1dts;
            F0ST1:
            siNxf:
            goto qQ2N3;
            J3nLS:
            n4yxi:
            goto hcFtI;
            XHb28:
            $newslist[$key]["url"] = "../video/video?id=" . $value["id"];
            goto tlFlW;
            L1V2B:
            if (empty($videosrc)) {
                goto siNxf;
            }
            goto XHb28;
            nNIH1:
        }
        goto xL7q8;
        f0_3a:
        goto Dyt3K;
        goto TjJnr;
        UMjaq:
        $map = "`cid`= {$tid}";
        goto aR1Cz;
        QL52L:
        $data["fatherId"] = $fid;
        goto ymPGt;
        KSaYo:
        if ($lRjKS) {
            goto AqIZ9;
        }
        goto XX2TC;
        aR1Cz:
        $lRjKS = !($lastid > 0);
        goto UIGbM;
        pphCg:
        $message = "返回消息";
        goto lZnEQ;
        awj6_:
        $newslist = pdo_fetchall("select `id` , `title`, `thumb`,`addtime`,`videosrc`,`appid`,`pageaddress` from " . tablename("yyf_company_news") . " where " . $map . " and `uniacid`='{$uniacid}' order by sortrank desc,id desc limit {$limit}");
        goto f0_3a;
        f262p:
        AqIZ9:
        goto awj6_;
        hywdN:
        $data["list"] = $newslist;
        goto pphCg;
        yds0j:
        $fid = $_GPC["fid"];
        goto yCcDc;
        MNgPx:
        $cats = pdo_fetchall("SELECT `id`,`name`,`fid`,`type` FROM " . tablename("yyf_company_category") . " where `uniacid`='{$uniacid}' and `fid`={$tid} order by sortrank desc");
        goto nGdXY;
        UIGbM:
        if ($lRjKS) {
            goto TBjgc;
        }
        goto k32VZ;
        JVDO_:
        $data["fatherId"] = $tid;
        goto MNgPx;
        Mhiuv:
        TBjgc:
        goto eCXi8;
        lZnEQ:
        $errno = 0;
        goto LeyOH;
        XX2TC:
        $map .= " and `id` < {$lastid}";
        goto f262p;
        xL7q8:
        bIndu:
        goto iApal;
        iIJf7:
        $cids = '';
        goto XW88q;
        pnQWS:
        $newslist = pdo_fetchall("select `id` , `title`, `thumb`,`addtime`,`videosrc`,`appid`,`pageaddress` from " . tablename("yyf_company_news") . " where " . $map . " and `uniacid`='{$uniacid}' order by sortrank desc,id desc limit {$limit}");
        goto QL52L;
        wOrI6:
        $data["type"] = $cats["type"];
        goto hywdN;
        IF4h1:
        $data["currentIndex"] = 0;
        goto iIJf7;
        LeyOH:
        return $this->result($errno, $message, $data);
        goto H5vtK;
        DSSnm:
        $lastid = $_GPC["lastid"];
        goto GHsWS;
        lXd3b:
        $map = "`cid` in ({$cids})";
        goto lTPDl;
        ymPGt:
        Dyt3K:
        goto zfAUb;
        smUEe:
        $data["hide_time"] = $hornData["hide_time"];
        goto n9goO;
        PbcUS:
        global $_GPC, $_W;
        goto Qx8k1;
        YMUHa:
        cMhgX:
        goto l8RcX;
        eCXi8:
        if ($_GPC["fid"] > 0) {
            goto ynd5E;
        }
        goto JVDO_;
        XUeff:
        $data["cats"] = $cats;
        goto GSXNU;
        tQYCt:
        $data["cats"] = $cats;
        goto IF4h1;
        lTPDl:
        $lRjKS = !($lastid > 0);
        goto KSaYo;
        UVl1C:
        $tid = $_GPC["tid"];
        goto UMjaq;
        hP1oq:
        $data["catname"] = $cats["name"];
        goto ESg0C;
        k32VZ:
        $map .= " and `id` < {$lastid}";
        goto Mhiuv;
        GSXNU:
        $data["currentIndex"] = $tid;
        goto pnQWS;
        iApal:
        $hornData = pdo_get("yyf_company_style", array("uniacid" => $uniacid), array("hide_time"));
        goto smUEe;
        XW88q:
        foreach ($cats as $key => $value) {
            $cids .= $value["id"] . ",";
            LiNGn:
        }
        goto YMUHa;
        Qx8k1:
        $limit = 8;
        goto DSSnm;
        yCcDc:
        $cats = pdo_fetchall("SELECT `id`,`name`,`fid`,`type` FROM " . tablename("yyf_company_category") . " where `uniacid`='{$uniacid}' and `fid`='{$fid}' order by sortrank desc");
        goto zVwTI;
        TjJnr:
        ynd5E:
        goto yds0j;
        nGdXY:
        $data["currentCatId"] = $_GPC["tid"];
        goto tQYCt;
        H5vtK:
    }
    public function doPageContact()
    {
        global $_GPC, $_W;
        $uniacid = $_GPC["uniacid"];
        $conArr = pdo_get("yyf_company_style", array("uniacid" => $uniacid), array("contact_background", "contact_name", "contact_logo", "custom_close"));
        $result = pdo_fetch("SELECT `jing`,`wei`,`address`,`phone`,`email`,`qq`,`phone2` FROM " . tablename("yyf_company_sysinfo") . " where `uniacid`='{$uniacid}' order by id desc limit 1");
        $result["custom_close"] = $conArr["custom_close"];
        $result["contact_name"] = $conArr["contact_name"];
        $result["contact_logo"] = tomedia($conArr["contact_logo"]);
        $result["contact_background"] = tomedia($conArr["contact_background"]);
        $message = "返回消息";
        $errno = 0;
        $data = $result;
        return $this->result($errno, $message, $data);
    }
    public function doPageForm()
    {
		global $_GPC, $_W;
		$uniacid = $_GPC["uniacid"];
		$result = pdo_fetch("SELECT * FROM " . tablename("yyf_company_form") . " where `uniacid`='{$uniacid}' order by id desc limit 1");
		$result["cvalue"] = explode(",", $result["cvalue"]);
		$result["thumb"] != '' ? $result["thumb"] = tomedia($result["thumb"]) : ($result["thumb"] = 0);
		$result["rvalue"] = explode(",", $result["rvalue"]);
		$errno = 0;
		$message = "返回消息";
		$data = $result;
		return $this->result($errno, $message, $data);
    }
    public function doPageFormAdd()
    {
        global $_GPC, $_W;
        require_once dirname(__FILE__) . "/lib/lib_wx_message.php";
    }
    public function doPageSendMail()
    {
        global $_GPC, $_W;
        require_once dirname(__FILE__) . "/lib/lib_wx_sendmail.php";
    }
}