<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title>后台管理中心</title><link href="__PUBLIC__/statics/css/reset.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/system.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/table_form.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/dialog.js"></script><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles1.css" title="styles1" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles2.css" title="styles2" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles3.css" title="styles3" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles4.css" title="styles4" media="screen" /><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/styleswitch.js"></script></head><body><style type="text/css">	html{_overflow-y:scroll}
</style><div id="closeParentTime" style="display:none"></div><div class="pad-10"><div class="content-menu ib-a blue line-x"><a href="javascript:;" onclick="javascript:$('#searchid').css('display','');"><em>搜索</em></a></div><div id="searchid" style="display:none"><form name="searchform" action="" method="get" ><table width="100%" cellspacing="0" class="search-form"><tbody><tr><td><div class="explain-col">				操作时间：
				<link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/js/calendar/jscal2.css"/><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/js/calendar/border-radius.css"/><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/js/calendar/win2k.css"/><script type="text/javascript" src="__PUBLIC__/statics/js/calendar/calendar.js"></script><script type="text/javascript" src="__PUBLIC__/statics/js/calendar/lang/en.js"></script><input type="text" name="start_time" id="start_time" value="<?php echo ($_GET['start_time']); ?>" size="10" class="date" readonly>&nbsp;<script type="text/javascript">			Calendar.setup({
			weekNumbers: false,
		    inputField : "start_time",
		    trigger    : "start_time",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script>- &nbsp;<input type="text" name="end_time" id="end_time" value="<?php echo ($_GET['end_time']); ?>" size="10" class="date" readonly>&nbsp;<script type="text/javascript">			Calendar.setup({
			weekNumbers: false,
		    inputField : "end_time",
		    trigger    : "end_time",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script><input type="submit" name="search" class="button" value="搜索" /></div></td></tr></tbody></table></form><script>$('#searchid').css('display','');
</script></div><div class="table-list"><table width="100%"><thead><tr><th width="50">类型</th><th width="100">动作</th><th >内容</th><th width="100">豆</th><th width="150">操作时间</th><th width="50">操作</th></tr></thead><tbody><?php if(is_array($details)): $i = 0; $__LIST__ = $details;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td align="center"><?php switch($vo['type']): case "expend": ?>支出<?php break; case "income": ?>收入<?php break; endswitch;?></td><td align='center'><?php switch($vo['action']): case "getgift": ?>收礼<?php break; case "settlement": ?>结算<?php break; endswitch;?></td><td align='center'><?php echo ($vo['content']); ?></td><td align='center'><?php if($vo['type'] == 'expend'): ?>-<?php endif; echo ($vo['bean']); ?></td><td align='center'><?php echo (fdate($vo['addtime'])); ?></td><td align='center'></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div id="pages"><?php echo ($page); ?></div></div></div></body></html>