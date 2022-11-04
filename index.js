var linen = document.getElementById('btn').querySelectorAll('line');

document.getElementById("btn").addEventListener('mouseenter',function(){
    linen[0].style.backgroundColor = "white";
    linen[1].style.backgroundColor = "white";
    linen[2].style.backgroundColor = "white";
    for(var i =0; i<3 ;i++){
        linen[i].style.transform = "rotate(10deg)";
    }
})
document.getElementById("btn").addEventListener('mouseleave',function(){
    linen[0].style.backgroundColor = "";
    linen[1].style.backgroundColor = "";
    linen[2].style.backgroundColor = "";
    for(var i =0; i<3 ;i++){
        linen[i].style.transform = "";
    }
})

const toggle = document.getElementById('btn');
const menu = document.querySelector('.menu');
toggle.onclick = function() {
    menu.classList.toggle("aktif");
    toggle.classList.toggle("aktif");
};

var g = document.querySelector('.name-header')
g.addEventListener('mouseenter',function(){
    document.querySelector('.g').style.transition = 'all .5s'
    document.querySelector('.k').style.transition = 'all .2s'
    document.querySelector('.g').style.transform = 'rotate(360deg)'
    document.querySelector('.k').style.transform = 'rotate(10deg)'
    document.querySelector('.k').style.border= 'orange solid 4px'
    document.querySelector('.k').style.backgroundColor = 'white'
    document.querySelector('.g').style.color ='rgb(255, 179, 37)';
    document.querySelector('.k').style.color ='rgb(255, 179, 37)';
    document.querySelector('.k').style.borderRadius = '49%'
})
g.addEventListener('mouseleave',function(){
    document.querySelector('.g').style.transition = 'all .2s'
    document.querySelector('.g').style.transform = ''
    document.querySelector('.g').style.color = ''
    document.querySelector('.k').style.transition = 'all .2s'
    document.querySelector('.k').style.transform = ''
    document.querySelector('.k').style.color = ''
    document.querySelector('.k').style.border = ''
    document.querySelector('.k').style.backgroundColor = ''
    document.querySelector('.k').style.border= ''
    document.querySelector('.k').style.borderRadius = ''
})