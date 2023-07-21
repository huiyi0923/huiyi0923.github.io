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