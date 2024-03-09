//wzm=document.domain;if (wzm!='huiyi0923.github.io'){location.href='https://huiyi0923.github.io/newweb/fangwjg.html'};
//wzm!='weiqing.1ao.top' || 
var OriginTitile = document.title,
titleTime;
document.addEventListener("visibilitychange",
function() {
 if(document.hidden) {
   document.title = "你别走吖 Σ(っ °Д °;)っ";
   clearTimeout(titleTime)
}else{
  document.title = "(/≧▽≦/)你又回来啦！" ;
  titleTime = setTimeout(function() {
      document.title = OriginTitile
  },2000)}});
//不让扒站
document.onkeydown = function() {
    var oEvent = window.event;
    if (oEvent.keyCode == 123) {
        alert("您按下了F12，本是同根生，相煎何太急!");
        document.body.innerHTML = "<h1>我艹你妈爱扒站</h1>";
        return false;
    }
    if (oEvent.keyCode == 83 && oEvent.ctrlKey) {
        alert("您按下了ctrl+s，不要这么玩");
        return false;
    }
}
// location.href='https://huiyi0923.github.io/跑路了.html'
console.log("%c欢迎访问微清网络产品！", "color:green");
