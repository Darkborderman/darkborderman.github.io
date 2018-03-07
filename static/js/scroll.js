
$(document).ready(function(){
    var open=false;
    setInterval(function()
    {

        if(window.scrollY>=50)
        {
            $('#header').addClass("fixed");
            $("#menu").css({top:50});
        }
        else
        {
            $('#header').removeClass("fixed");
            $("#menu").css({top:50});
        }
    },100);
    $('#menu-icon').click(function()
    {
        if(open==true)
        {
              $("#menu").fadeOut();
              open=false;
        }
        else if(open==false)
        {
              $("#menu").fadeIn();
              open=true;
        }
    });
});
