const bod=document.querySelector('body')
const svg1=document.querySelector('.tobu .xcj2 svg')
let bl=0
document.querySelector('.tobu svg').addEventListener('click',function(){
    location.reload()
    alert('刷新成功')
})

document.querySelector('.xcj').addEventListener('click',function(){
    // scrollTop=0
    window.scrollTo(0,0)
})

addEventListener('resize',()=>{
  console.log(1)
})
let yebxq=0
document.querySelector('.gbcj span').addEventListener('click',()=>{
  if (yebxq==0){
    document.querySelector('.xcj4').style.left='3px'
    document.querySelector('.gbcj span svg').innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
      <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
    </svg>`
    yebxq=1+(+yebxq)
  }else if (yebxq>=1){
    document.querySelector('.xcj4').style.left='-310px'
    document.querySelector('.gbcj span svg').innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
    </svg>`
    yebxq=0
  }
})

document.querySelector('.butn2').addEventListener('click',()=>{
  document.querySelector('.yczz').style.display='block'
})
document.querySelector('.btn-primary').addEventListener('click',()=>{
  document.querySelector('.yczz').style.display='none'
})
