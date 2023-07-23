const box=document.querySelector('.yccd')
document.querySelector('.tobu .caidan2 button').addEventListener('click',function(){
    box.style.left='0'
})

document.querySelector('.tobu .yccd span').addEventListener('click',function(){
    box.style.left=-230/3.75+'vh'
})

// const cajian2=document.querySelector('.cajian2')
// document.querySelector('.cajian').addEventListener('click',function(){
//     cajian2.style.display='block'
// })

document.querySelector('.xcj').addEventListener('click',function(){
    // scrollTop=0
    window.scrollTo(0,0)
})

// const box4=document.querySelector('.xcj')
// addEventListener('resize',()=>{
//     let w=document.documentElement.clientWidth
//     console.log(w)
// })
// if (offsetTop>=50){
//     box4.style.display='block'
// }

document.querySelector('.tobu svg').addEventListener('click',function(){
    location.reload()
    alert('刷新成功')
})


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
    bl+=1
    if (bl>1){
        bod.style.backgroundColor='#fff'
        bod.style.color='#000'
        but.innerHTML=`
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low" viewBox="0 0 16 16">
        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm.5-9.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
      </svg>黑夜`
        svg1.style.color='#000'
        bl=0
    }
})

let yonghm=localStorage.getItem('yonghm')
let mima=localStorage.getItem('mima')
const dlsz=document.querySelector('.tobu .xcj2 span')
if (yonghm===null||mima===null){
    document.querySelector('.tobu .xcj2 span').innerHTML='未登录'
}else{
    document.querySelector('.tobu .xcj2 span').innerHTML=`欢迎:${yonghm}`
    dlsz.style.backgroundColor='#4ae73c'
}

document.querySelector('.tobu .xcj2 span').addEventListener('click',(e)=>{
    if (yonghm!=null||mima!=null){
        e.preventDefault()
    }
})