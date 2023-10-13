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
