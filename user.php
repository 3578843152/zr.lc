<?php

//API域名，不用动即可
$domain = "https://api.zakkpa.com:8888";

//额外参数，没有通知不要动
$parameter = "&mgtv=pad";

//是否开启防盗链，1为开启，0为关闭
$fdhost_on = "0";

//防盗链接数组，如果播放器检测到不是这些域名打开的，立马就显示解析失败(""代表允许浏览器内直接打开，不需要http|https和端口号);
$fdhost = ["",""];

//填入用户uid
$uid = "";

//token密匙
$token = "";

// 是否开启移动端调用h5播放器，1为开启，0为关闭
$h5 = "1";

// 填写备用JSON接口1，没有留空
$api1 = "";

// 填写备用JSON接口2，没有留空
$api2 = "";
    
// 是否开启P2P加速，默认1为开启，0为关闭（资源大部分为m3u8建议开启）
$p2p = "0";


// 加载背景图
$load_pic = 'https://img10.360buyimg.com/ddimg/jfs/t1/133888/15/2798/61297/5ef5cd54E69f6dc60/93231446b43a6b1b.jpg';

// 右上角logo
$logo = '';

// 播放器右键文字
$right_wenzi = 'Zakkpa 视频解析系统';

// 播放器右键链接
$right_link = 'https://parwix.com';

// 解析页TITLE
$title = "Zakkpa解析系统";

// 加载页面动画
$loading_pic = "https://cdn.jsdelivr.net/gh/Fog-Forest/Picture-Bed/IMG/20200519223109.gif";

// loaing图片宽度
$loading_pic_width = "80";

// loaing图片高度
$loading_pic_height = "110";

// 加载页面颜色
$loading_color = "#000";

// 解析页favicon图标url
$favicon = "/favicon.ico";

// 统计代码自行加在html文件夹下的模板中

//未填写url时显示的html代码
$html = '<html><meta name="robots" content="noarchive">
	  <style>h1{color:#FFFFFF; text-align:center; font-family: Microsoft Jhenghei;}p{color:#CCCCCC; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style>
	  <body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>请填入视频URL地址</font><font size="2"></font></p></table></body><script src="https://cdn.jsdelivr.net/gh/Zrahh/JsDelivr_CDN/assets/js/jquery.min.js"></script><script>$("#my-loading", parent.document).remove();</script></html>';
	  
	  //触发防盗链时显示的html代码;
$errorRefererHtml = '<html><meta name="robots" content="noarchive">
                	  <style>h1{color:#FFFFFF; text-align:center; font-family: Microsoft Jhenghei;}p{color:#CCCCCC; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style>
                	  <body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>触发了防盗链！</font><font size="2"></font></p></table><script src="https://cdn.jsdelivr.net/gh/Zrahh/JsDelivr_CDN/assets/js/jquery.min.js"></script><script>$("#my-loading", parent.document).remove();</script></body>
              </html>';	  

?>