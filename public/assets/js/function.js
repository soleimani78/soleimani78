$(document).ready(function(){
    
    $(".menu-nav").click(function(){
        $(".nav").slideToggle();
    });

    $("#open-login-box").click(function(){
        $(".login").css("display","flex");
        // $("body").css("overflow","hidden");
    });

    $("#close-login-box").click(function(){
        $(".login").css("display","none");
        // $("body").remove("stop-scrolling");
    });

    $(".login").click(function(e){

        if(e.target !== this)
            return;

        $(".login").css("display","flex");
        // $("body").remove("stop-scrolling");
    });

    // **** signup ****
    $("#open-signup-box").click(function(){
        $(".signup").css("display","flex");
        // $("body").css("overflow","hidden");
    });

    $("#close-signup-box").click(function(){
        $(".signup").css("display","none");
        // $("body").remove("stop-scrolling");
    });

    $(".signup").click(function(e){

        if(e.target !== this)
            return;

        $(".signup").css("display","flex");
        // $("body").remove("stop-scrolling");
    });

    $("#btn-sign").click(function(){
        $(".signup").css("display","none");
    });

    $("#btn-login").click(function(){
        $(".login").css("display","none");
    });
});

//