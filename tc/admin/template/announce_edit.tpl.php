<?php

include mymps_tpl('inc_head_jq');
echo '<script type="text/javascript" src="../include/colorpicker/jquery.colorpicker.js"></script>' . "\r\n" . '<script language=\'javascript\'>' . "\r\n" . 'function CheckSubmit()' . "\r\n" . '{' . "\r\n\t" . 'if(document.form1.title.value=="")' . "\r\n\t" . '{' . "\r\n" . '   ' . "\t\t" . 'document.form1.title.focus();' . "\r\n" . '   ' . "\t\t" . 'alert("请填写公告标题！");' . "\r\n" . '   ' . "\t\t" . 'return false;' . "\r\n\t" . '}' . "\r\n\t" . 'if(document.form1.author.value=="")' . "\r\n\t" . '{' . "\r\n" . '   ' . "\t\t" . 'document.form1.author.focus();' . "\r\n" . '   ' . "\t\t" . 'alert("请填写作者！");' . "\r\n" . '   ' . "\t\t" . 'return false;' . "\r\n\t" . '}' . "\r\n\t" . 'if(document.form1.content.value=="")' . "\r\n\t" . '{' . "\r\n" . '   ' . "\t\t" . 'document.form1.content.focus();' . "\r\n" . '   ' . "\t\t" . 'alert("请填写公告内容！");' . "\r\n" . '   ' . "\t\t" . 'return false;' . "\r\n\t" . '}' . "\r\n\r\n\t" . 'return true;' . "\r\n" . '}' . "\r\n" . '</script>' . "\r\n" . '<form method=post  name="form1" action="announce.php?part=edit" onSubmit="return CheckSubmit();">' . "\r\n" . '<input name="id" value="';
echo $edit[id];
echo '" type="hidden" />' . "\r\n" . '<input name="action" value="dopost" type="hidden" />' . "\r\n" . '<div id="';
echo MPS_SOFTNAME;
echo '">' . "\r\n" . '<table border="0" cellspacing="0" cellpadding="0" class="vbm">' . "\r\n\r\n" . '<tr class="firstr">' . "\r\n" . '<td colspan="2"><b>编辑网站公告</b></td>' . "\r\n" . '</tr>' . "\r\n" . '<tr bgcolor="#f5fbff" >' . "\r\n" . '  <td width="12%" align="right">公告标题： </td>' . "\r\n" . '  <td colspan="3"> <input name="title" class="text" type="text" value="';
echo $edit[title];
echo '" size="50"> ' . "\r\n" . '  <font color="red">*</font></td>' . "\r\n" . '</tr>' . "\r\n" . '<tr  bgcolor="#f5fbff">' . "\r\n" . '<td width="12%" align="right">标题颜色：</td>' . "\r\n" . '<td colspan="3"><input id="cp1" name="titlecolor" class="text" style="width:60px" value="';
echo $edit[titlecolor];
echo '"></td>' . "\r\n" . '</tr>' . "\r\n" . '<script type="text/javascript">' . "\r\n" . ' $(function() {' . "\r\n" . '      ' . "\r\n" . '        $("#cp1").colorpicker({' . "\r\n" . '            fillcolor: true' . "\r\n" . '        });' . "\r\n" . '        ' . "\r\n" . '    });' . "\r\n" . '</script>' . "\r\n" . '<tr bgcolor="#f5fbff" >' . "\r\n" . '  <td width="12%" align="right">开始时间：</td>' . "\r\n" . '  <td><input name="begintime" class="text" type="text" value="';
echo GetTime($edit[begintime]);
echo '"/> 无开始时间请留空（日期格式如：2011-08-08）</td>' . "\r\n" . '</tr>' . "\r\n" . '<tr bgcolor="#f5fbff" >' . "\r\n" . '  <td width="12%" align="right">截止时间：</td>' . "\r\n" . '  <td><input name="endtime" class="text" type="text" value="';
echo GetTime($edit[endtime]);
echo '"/> 无截止时间请留空（日期格式如：2011-08-08）</td>' . "\r\n" . '</tr>' . "\r\n" . '<tr bgcolor="#f5fbff" >' . "\r\n" . '  <td width="12%" align="right">跳转地址：</td>' . "\r\n" . '  <td>' . "\r\n" . '    <input name="redirecturl" class="text" type="text" value="';
echo $edit[redirecturl];
echo '" size="50"> 若填写了此处，以下部分则不需填写' . "\r\n" . '  </td>' . "\r\n" . '</tr>' . "\r\n" . '<tr bgcolor="#f5fbff" >' . "\r\n" . '  <td width="12%" align="right">作者：</td>' . "\r\n" . '  <td><input name="author" class="text" type="text" style="width:100px" value="';
echo $edit[author];
echo '"><font color="red">*</font></td>' . "\r\n" . '</tr>' . "\r\n" . '</table>' . "\r\n" . '<div style="margin-top:3px;">' . "\r\n";
echo $acontent;
echo '</div>' . "\r\n" . '</div>' . "\r\n" . '<center><input type="submit" value="提 交" class="mymps large"/></center>' . "\r\n" . '</form>' . "\r\n";
mymps_admin_tpl_global_foot();

?>
