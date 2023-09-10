const box = document.querySelector('.yccd')
document.querySelector('.tobu .caidan2 button').addEventListener('click',function(){
    box.style.left='0'
})

document.querySelector('.tobu .yccd span').addEventListener('click',function(){
    box.style.left=-1100/3.75+'vh'
})

document.querySelector('.xcj').addEventListener('click',function(){
    window.scrollTo(0,0)
})
document.querySelector('.tobu svg').addEventListener('click',function(){
    location.reload()
    alert('刷新成功')
})


const bod=document.querySelector('body')
const svg1=document.querySelector('.tobu .xcj2 svg')
let bl=0
const but=document.querySelector('.wq')
const bjbh=document.querySelector('.bjbh')
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
    bl+=1
    if (bl>1){
        bod.style.backgroundColor='#f0f4ff'
        bod.style.color='#000'
        but.innerHTML=`
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low" viewBox="0 0 16 16">
        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm.5-9.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
      </svg>黑夜`
        svg1.style.color='#000'
        document.querySelector('.xuanf svg').style.display='none'
        document.querySelector('.xuanf2 svg').style.display='block'
        bl=0
    }
})

bjbh.addEventListener('click',()=>{
    bod.style.backgroundColor='#000'
    bod.style.color='#fff'
    bjbh.innerHTML=`白天`
    svg1.style.color='#000'
    document.querySelector('.xuanf svg').style.display='block'
    document.querySelector('.xuanf2 svg').style.display='none'
    bl+=1
    if (bl>1){
        bod.style.backgroundColor='#f0f4ff'
        bod.style.color='#000'
        bjbh.innerHTML=`黑夜`
        svg1.style.color='#000'
        document.querySelector('.xuanf svg').style.display='none'
        document.querySelector('.xuanf2 svg').style.display='block'
        bl=0
    }
})

let token=localStorage.getItem('token')
let username=localStorage.getItem('username')
const dlsz=document.querySelector('.tobu .xcj2 span')
let hy=0
if (token===null||username===null){
    document.querySelector('.tobu .xcj2 span').innerHTML='未登录'
}else{
    document.querySelector('.tobu .xcj2 span').innerHTML=`欢迎:${username}`
    dlsz.style.backgroundColor='#4ae73c'
}

document.querySelector('.tobu span').addEventListener('click',function(){
    document.querySelector('.tobu .ycd').style.display='block'
    if (token===null||username===null){
        document.querySelector('.tobu .xcj2 .ycd p .ncm').innerHTML='未登录'
    }else{
        document.querySelector('.tobu .xcj2 .ycd p .ncm').innerHTML=`ID:${username}`
        document.querySelector('.tobu .xcj2 .ycd p .ncm').style.color='#5df30d'
    }
})

document.querySelector('.tobu .ycd span').addEventListener('click',function(){
    document.querySelector('.tobu .ycd').style.display='none'
})

document.querySelector('.tobu .ycd p:nth-child(1)').addEventListener('click',function(e){
    if (token===null||username===null){
        e.preventDefault()
        alert('你没有登录')
    }
})

document.querySelector('.tobu .xcj2 .ycd .zux').addEventListener('click',function(e){
    if (token===null||username===null){
        e.preventDefault()
        alert('你没有登录，无法退出！')
    }else{
        localStorage.removeItem('token')
        localStorage.removeItem('username')
        alert('退出成功！')
        location.href='./index2.php'
    }
})