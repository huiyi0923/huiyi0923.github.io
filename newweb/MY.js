wdzs=12610
wdzs2=1326310
wdzs3=24697
document.querySelector('.zhaop .zhaop2 span').addEventListener('click',()=>{
    document.querySelector('.yc').style.display='block'
})
document.querySelector('.ckyy').addEventListener('click',()=>{
    document.querySelector('.yc2').style.display='block'
})
document.querySelector('#gban2').addEventListener('click',()=>{
    document.querySelector('.yc').style.display='none'
})
document.querySelector('#gban3').addEventListener('click',()=>{
    document.querySelector('.yc2').style.display='none'
})
document.querySelector('.zan2').addEventListener('click',()=>{
    alert('点赞成功')
    document.querySelector('.zs').innerHTML=`${wdzs+1}`
    wdzs++
})
document.querySelector('.zan').addEventListener('click',()=>{
    alert('点赞成功')
    document.querySelector('.zs2').innerHTML=`${wdzs2+1}`
    wdzs2++
})
document.querySelector('.zan3').addEventListener('click',()=>{
    alert('点赞成功')
    document.querySelector('.zs3').innerHTML=`${wdzs3+1}`
    wdzs3++
})
document.querySelector('.ewm svg').addEventListener('click',()=>{
    document.querySelector('.yc3').style.display='block'
})
document.querySelector('#gban1').addEventListener('click',()=>{
    document.querySelector('.yc3').style.display='none'
})
// i=3
// ggjs()
// function ggjs(){
//     setTimeout(() => {
//     if (i>0){
//         document.querySelector('.gonggao h5').innerHTML=`请等待${i--}秒`
//     }
// }, 1000)
// }
let ggjlsj=localStorage.getItem('ggjlsj')
const date1=new Date()
let xzrq=date1.getDate()
if (ggjlsj===null || ggjlsj!=xzrq){
    setTimeout(() => {
        document.querySelector('.gban').style.display='block'
    }, 5000)
    document.querySelector('.gban').addEventListener('click',()=>{
        document.querySelector('.gonggao').style.display='none'
    })
    localStorage.setItem('ggjlsj',xzrq)
    console.log(xzrq)
}else{
    document.querySelector('.gonggao').style.display='none'
}