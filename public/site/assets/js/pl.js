/*! Echo v1.5.0 | (c) 2014 @toddmotto | MIT license | github.com/toddmotto/echo */
window.Echo=function(a,b){"use strict";var c,d,e,f=[],g=function(a){var d=a.getBoundingClientRect();return(d.top>=0&&d.left>=0&&d.top)<=(window.innerHeight||b.documentElement.clientHeight)+c},h=function(){var c=f.length;if(c>0)for(var d=0;c>d;d++){var h=f[d];h&&g(h)&&(h.src=h.getAttribute("data-echo"),f.splice(d,1),c=f.length,d--)}else b.removeEventListener?a.removeEventListener("scroll",i):a.detachEvent("onscroll",i),clearTimeout(e)},i=function(){clearTimeout(e),e=setTimeout(h,d)},j=function(e){var g=b.querySelectorAll("[data-echo]"),j=e||{};c=parseInt(j.offset||0),d=parseInt(j.throttle||250);for(var k=0;k<g.length;k++)f.push(g[k]);h(),b.addEventListener?(a.addEventListener("scroll",i,!1),a.addEventListener("load",i,!1)):(a.attachEvent("onscroll",i),a.attachEvent("onload",i))};return{init:j,render:h}}(this,document);

// PIC-LOG
// ---------

(function () {
      Echo.init({
      offset: 100,
      throttle: 250,
      unload: false,
      callback: function (element, op) {
        console.log(element, 'has been', op + 'ed')
      }
    });

}).call(this);


$('body').on('click', '.btn-group button', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    
    //do any other button related things
    if($(this).hasClass('colors')){
    	$('.media .project').removeClass('default');
      $('.list').addClass('active');
    }else{
    	$('.media .project').addClass('default');
      $('.list').removeClass('active');
    }
});

$('.yellow.list').click(function(){
  $('.media .project.yellow').toggleClass('default');
  if($('.media .project.yellow').hasClass('default')){
    $(this).removeClass('active');
  }else{
    $(this).addClass('active');
  }
});

$('.green.list').click(function(){
  $('.media .project.green').toggleClass('default');
  if($('.media .project.green').hasClass('default')){
    $(this).removeClass('active');
  }else{
    $(this).addClass('active');
  }
});

$('.red.list').click(function(){
  $('.media .project.red').toggleClass('default');
  if($('.media .project.red').hasClass('default')){
    $(this).removeClass('active');
  }else{
    $(this).addClass('active');
  }
});

$('.blue.list').click(function(){
  $('.media .project.blue').toggleClass('default');
  if($('.media .project.blue').hasClass('default')){
    $(this).removeClass('active');
  }else{
    $(this).addClass('active');
  }
});


var images = document.getElementsByTagName('img'); 
var srcList = [];
for(var i = 0; i < images.length; i++) {
    srcList.push(images[i].src);
    if(images[i].dataset.bgk){
      console.log(images[i].dataset.bgk); 
      var thisColor = images[i].dataset.bgk; 
      images[i].style.backgroundColor=thisColor; 
    }
}

