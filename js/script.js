
    var wallpaperpics = document.getElementsByClassName("wallpaperpics");
$(".wallpaperpics").hover(
    TweenMax.to(wallpaperpics, 1, {scale:1.2});
);

// window.onload = function() {
//     var wallpaperpics = document.getElementById("wallpaperpics");
//     TweenMax.to(wallpaperpics, 1, {scale:1.2});
         
    //try these alternate animations
    //TweenMax.to(wallpaperpics, 1, {left:"300px", repeat:3});
    //TweenMax.to(wallpaperpics, 1, {css:{left:"300px", repeat:3, yoyo:true, repeatDelay:.5});
    //TweenMax.to(wallpaperpics, 1, {css:{left:"300px", repeat:-1, yoyo:true});    
}