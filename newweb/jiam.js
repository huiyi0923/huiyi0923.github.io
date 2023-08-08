function toCode (str) {
    var key = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var len = key.length;
    var a = key.split(""); 
    var s = "",b, b1, b2, b3;
    for (var i = 0; i <str.length; i ++) { 
        b = str.charCodeAt(i);
        b1 = b % len;
        b = (b - b1) / len;
        b2 = b % len; 
        b = (b - b2) / len; 
        b3 = b % len; 
        s += a[b3] + a[b2] + a[b1]; 
    }
    return s;
}

function fromCode (str) {
    var key = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var len = key.length;  
    var b, b1, b2, b3, d = 0, s; 
    s = new Array(Math.floor(str.length / 3)); 
    b = s.length; 
    for (var i = 0; i < b; i ++) {  
        b1 = key.indexOf(str.charAt(d));
        d ++;
        b2 = key.indexOf(str.charAt(d));
        d ++;
        b3 = key.indexOf(str.charAt(d)); 
        d ++;
        s[i] = b1 * len * len + b2 * len + b3 
    }
    b = eval("String.fromCharCode(" + s.join(',') + ")"); 
    return b ; 
}
document.querySelector('#jm1').addEventListener('click',()=>{
    const huiyuan=localStorage.getItem('huiyuan')
    // localStorage.setItem('huiyuan','TRUE')
    let nr=document.querySelector('#tweet').value
    if (nr.length<=0){
        alert('你没有输入任何内容')
    }else{
        var code = nr;
        var toCodeValue = toCode(code);  // 字符串加密操作
        if (huiyuan==null & toCodeValue.length>50){
            document.querySelector('.xsjg').innerHTML=`加密失败：不是会员追多只能加密50个字符。当前加密后字符${toCodeValue.length}。如需该服务请加QQ1148246926（永久）`
        }else{
            document.querySelector('.xsjg').innerHTML=`加密结果：${toCodeValue}`
            console.log(toCodeValue)
        }

    }
    document.querySelector('#tweet').value=''
})
document.querySelector('#jm2').addEventListener('click',()=>{
    const huiyuan=localStorage.getItem('huiyuan')
    let nr=document.querySelector('#tweet').value
    if (nr.length<=0){
        alert('你没有输入任何内容')
    }else{
        var code = nr;
        var fromCodeValue = fromCode(nr);  // 字符串解密操作
        if (huiyuan==null & nr.length>50){
            document.querySelector('.xsjg').innerHTML=`加密失败：不是会员追多只能解密50个字符。当前解密字符${nr.length}。如需该服务请加QQ1148246926（永久）`
        }else{
            console.log(fromCodeValue)
            document.querySelector('.xsjg').innerHTML=`解密结果：${fromCodeValue}`
        }
    }
    document.querySelector('#tweet').value=''
})


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
bod.style.backgroundColor='#f1f7f9'
bod.style.color='#000'
but.innerHTML=`
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low" viewBox="0 0 16 16">
<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm.5-9.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
</svg>黑夜`
svg1.style.color='#000'
bl=0
}
})

document.querySelector('.dxy p .hy').addEventListener('click',()=>{
    document.querySelector('.dxy .ycxw').style.display='block'
})

document.querySelector('.btn-danger').addEventListener('click',()=>{
    document.querySelector('.dxy .ycxw').style.display='none'
})
document.querySelector('.btn-success').addEventListener('click',()=>{
    const kami=document.querySelector('.kami').value
    if (kami==''){
        alert('未输入任何内容')
    }else if (kami=='camilo10001' || kami=='camilo28015' || kami=='camilo31052'){
        alert('检验成功！欢迎您。（请保管好你的卡密，发现二次被人利用将撤销使用权！）')
        localStorage.setItem('huiyuan','TRUE')
        location.reload()
    }else{
        alert('检验未通过！如你没有卡密：请加QQ1148246926（永久）')
    }
})
const huiyuan=localStorage.getItem('huiyuan')
if (huiyuan=='TRUE'){
    document.querySelector('.huypd').innerHTML='欢迎你会员用户'
}
function show_runtime() {
        window.setTimeout("show_runtime()", 1000);
        X = new Date("8/6/2023 22:10:59");
        Y = new Date();
        T = (Y.getTime() - X.getTime());
        M = 24 * 60 * 60 * 1000;
        a = T / M;
        A = Math.floor(a);
        b = (a - A) * 24;
        B = Math.floor(b);
        c = (b - B) * 60;
        C = Math.floor((b - B) * 60);
        D = Math.floor((c - C) * 60);
        document.querySelector(".webtime").innerHTML = "网站已运行了: " + A + "天" + B + "小时" + C + "分" + D + "秒"
    }
show_runtime();