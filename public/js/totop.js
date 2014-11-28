/**
 * Created by Txiki on 28/11/14.
 */
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() > 250){
            $('#simbol').css('position','fixed');
            $('#simbol').css('right','30px');
            $('#simbol').css('bottom','100px');
            $('#simbol').html('<a href="#"><img class="simbol"></a>');
        }
        if ($(window).scrollTop() < 20){
            $('#simbol').css('position','absolute');
        }
    });
});