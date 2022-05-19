$(document).ready(function(){
// On DOM Ready

// Notification Click
$('.dash-nav_noti').click(function(e){
    e.stopPropagation();
    $('.nav_notification-wizard').slideToggle();

})

$(document).click(function(){
    $('.nav_notification-wizard').slideUp();
})

})