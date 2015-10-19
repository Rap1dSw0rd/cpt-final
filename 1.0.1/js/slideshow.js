
$(document).on("pagecreate", "#home",function(){
$(function(){$(".fadein img:gt(0)").hide(),setInterval(function(){$(".fadein :first-child").fadeOut().next("img").fadeIn().end().appendTo(".fadein")},5e3)});
});

/*this page will not display on the page until the page is full loaded*/