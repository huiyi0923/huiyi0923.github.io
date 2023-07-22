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
const svg1=document.querySelector('.tobu svg')
let bl=0
const but=document.querySelector('.wq')
but.addEventListener('click',()=>{
    bod.style.backgroundColor='#000'
    bod.style.color='#fff'
    but.innerHTML='白天'
    svg1.style.color='#000'
    bl+=1
    if (bl>1){
        bod.style.backgroundColor='#fff'
        bod.style.color='#000'
        but.innerHTML='黑夜'
        svg1.style.color='#000'
        bl=0
    }
})