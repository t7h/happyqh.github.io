<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>happyqh</title>
<script>
window.onload = function(){
 var img = document.getElementById("imgTest");
 if (document.addEventListener){
  img.addEventListener("mouseover",doMouseover,false);
  img.addEventListener("mouseout",doMouseout,false);
 }
 else if(document.attachEvent){
  img.attachEvent("mouseover",doMouseover);
  img.attachEvent("mouseout",doMouseout);
 }
 else{
  img.onmouseover = doMouseover;
  img.onmouseout = doMouseout;
 }
}
function doMouseover(){
 this.width = this.width * 1.2;
 this.height = this.height * 1.2;
}
function doMouseout(){
 this.width = this.width / 1.2;
 this.height = this.height / 1.2;
}
</script>
<link href="css/design.css" rel="stylesheet">
</head>

<body>

 <header>
   <div id="diyi" style="width:1200px">
    <span style="float:left;margin-left:0px;"><img src="./images/11.gif"></span>
      <div id="hed">
          <div  class="dier">          
             <span ><marquee loop=0 onmouseover="this.stop();"   onmouseout="this.start();" >欢迎访问easyqh的主页</marquee></span>
           </div>          
      </div>
     <div class="navigation">
        <h2><a href="http://www.happyqh.com/main.html">首页</a></h2>
        <h2><a href="#">关于我</a></h2>
        <h2><a href="#">相册</a></h2>
        <h2><a href="#">心情</a></h2>
        <h2><a href="#">留言</a></h2>
        <h2><a href="#">文章</a></h2>
     </div>
  </div>
 </header>
     
<div id="jieshao">    
  <div id="zw">
       <div><span class="biaoti">文章推荐</span></div>
       <hr color="#FF0000" size="2px" />
            <div class="essay">
               <h1 style="text-align:center">
				   <a href="https://blog.csdn.net/weixin_43231021/article/details/88586087" target="_blank">python3.6安装教程</a></h1>
               <p style="text-indent: 2em;">  1.下载软件：
链接：https://pan.baidu.com/s/1KBmn4ecQkQoQPykpbH-qIQ
提取码：sxcl
2.安装
双击下载好的安装包</p>
           </div>
           <div class="essay1">
               <h1 style="text-align:center"><a href="https://blog.csdn.net/weixin_43231021/article/details/88585690" target="_blank">pycharm安装教程，首次使用pycharm教程</a></h1>
               <p style="text-indent: 2em">1.下载软件：
链接：https://pan.baidu.com/s/1h_AoaZyrAnqa2aGZNBLKWw
提取码：005y
2.安装
下载pycharm的安装包，然后双击它....</p>
           </div>
               
           <div class="essay2">
               <h1 style="text-align:center"><a href="https://blog.csdn.net/weixin_43231021/article/details/88595003" target="_blank"> Anaconda详细安装教程||安装python||安装BeautifulSoup4||安装selenium</a></h1>
               <p style="text-indent: 2em">  注：安装Anaconda相当于也安装了pthony2.7，安装完Anaconda，我们接着安装所需的扩展库，比如BeautifulSoup4和selenium。
1.下载软件：
链接：https://pan.baidu.com/s/12zSu78FiX6aPmVX75i8Mfg
提取码：53uq

2.安装....</p>  
           </div>
        
           <div class="essay3">
               <h1 style="text-align:center"><a href="https://blog.csdn.net/weixin_43231021/article/details/88369849" target="_blank">wampserver如何配置默认浏览器、端口号、虚拟机</a></h1>
               <p style="text-indent: 2em">     下载Apache Mysql PHP集成安装环境包wampserver
当你想配置wampserver的默认浏览器、端口号、虚拟机时，可以看下下面的教程
1.	修改wampserver的默认浏览器。
右击浏览器，然后拷贝浏览器的路径。....</p>
          </div>      
  </div>  
<div id="yb">
   <span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;color:#09F;text-align:center;">关注我&&自我介绍</span>
   <hr color="#00FFFF" size="2px"/>
   <div id="follow">
   <ul>
     <li><img src="./images/04.gif"/><br><a  href="#">Rss</a></li>
     <li><img src="./images/05.gif" /><br><a href="#">新浪微博</a></li>
     <li><img src="./images/06.gif" /><br><a href="#">腾讯微博</a></li>
     <li><img src="./images/07.gif" /><br><a href="#">邮箱</a></li>
     </ul> 
   </div>   
   <div class="pome">
        <img id="imgTest" src="./images/08.jpg"/>
       <div>
         <p>happyqh</p>

         <p>本科</p>
         
         <p>爱好：项目、分享</p>
         
         <p>人生格言：坚持不懈</p>

         <p>喜欢的音乐：《时间飞行》</p>
         
         
      </div>
      <div class="dbb"> </div>
   </div>
</div>
  <div id="footer"><hr color="#999999"  size="2px"/></div>
  <div id="banquan">Design by happyqh<<版权仅归happyqh所有</div>
</div>
</body>
</html>

