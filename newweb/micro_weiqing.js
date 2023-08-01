const bod=document.querySelector('body')
const svg1=document.querySelector('.tobu .xcj2 svg')
let bl=0
const but=document.querySelector('.wq')
but.addEventListener('click',()=>{
    bod.style.backgroundColor='#000'
    bod.style.color='#fff'
    but.innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
  </svg>白天`
    svg1.style.color='#000'
    document.querySelector('.xuanf svg').style.display='block'
    document.querySelector('.xuanf2 svg').style.display='none'
    console.log(document.querySelector('.xuanf'))
    document.querySelector('.tobu').style.backgroundColor='#000'
    document.querySelector('.slog').style.display='none'
    document.querySelector('.tobu').style.color='#fff'

    document.querySelector('.tobu .caidan ul li a').style.color='#fff'
    document.querySelector('.tobu .xcj2 svg').style.color='#fff'
    bl+=1
    if (bl>1){
        bod.style.backgroundColor='#f1f7f9'
        bod.style.color='#000'
        but.innerHTML=`
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low" viewBox="0 0 16 16">
        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm.5-9.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
      </svg>黑夜`
        svg1.style.color='#000'
        document.querySelector('.xuanf svg').style.display='none'
        document.querySelector('.xuanf2 svg').style.display='block'
        document.querySelector('.tobu').style.backgroundColor='#fff'
        document.querySelector('.tobu').style.color='#000'
        document.querySelector('.slog').style.display='block'

        document.querySelector('.tobu .caidan ul li a').style.color='#000'
        document.querySelector('.tobu .xcj2 svg').style.color='#000'
        bl=0
    }
})


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
document.querySelector('.cpjs5 .dntp').addEventListener('click',()=>{
  document.querySelector('.cpjs5 .ckdntp').style.display='block'
  setTimeout(() => {
    document.querySelector('.cpjs5 .ckdntp').style.display='none'
      }, 5000)
})
document.querySelector('.cpjs5 .ckdntp').addEventListener('click',()=>{
  document.querySelector('.cpjs5 .ckdntp').style.display='none'
})

document.querySelector('.input-group-text').addEventListener('click',(e)=>{
        const input1=document.querySelector('.sos #input-groupMb-3 .form-floating input').value
        if (input1.length===0){
            e.preventDefault()
            alert('你没有输入')
        }else{
            location.href=`https://www.so.com/s?ie=utf-8&src=llq_360se7_addr_sug_new&q=${input1}&ssid=4a1d373c356747d68f0202b8ab5c71b3&nlpv=bt`
        }
        document.querySelector('.sos #input-groupMb-3 .form-floating input').value=''
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
  document.querySelector('body').style.backgroundColor='#8a8a8a'
})
document.querySelector('.butn1').addEventListener('click',()=>{
  document.querySelector('.yczz').style.display='block'
  document.querySelector('body').style.backgroundColor='#8a8a8a'
})
document.querySelector('.btn-primary').addEventListener('click',()=>{
  document.querySelector('.yczz').style.display='none'
  document.querySelector('body').style.backgroundColor='#f1f7f9'
})


let dksj=localStorage.getItem('dksj')
let xzrq=date1.getDate()
if (dksj===null||xzrq!=dksj){
  document.querySelector('.zx1 .dk1 i').innerHTML='小清检测到您还没打卡'
}else{
  document.querySelector('.zx1 .dk1 i').innerHTML='去看看打卡'
}