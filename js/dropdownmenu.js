if ($(window).width() <= 768) {
    $(".bars").click(function() {
        $("#nav > ul").slideToggle();
        $(".navItem ul").css("display", "none");
    });

    $(".navItem").click(function() {
        console.log($(this).index());
        // $(".navItem > ul").slideUp();
        // $(".navItem > ul").forEach(element => {
        //     element.slideUp();
        // });
        $(this).find('ul').slideToggle();
        $(".navSubItem ul").css("display", "none");
        // $(".navSubItem ul").forEach(element => {
        //     element.css("display", "none");
        // });
    });

    $(".navSubItem").click(function() {
        console.log("navSubItem :" + $(this).index());
        $(".navSubItem ul").slideUp();
        $(this).find('ul').css("display", "none");
        // $(".navSubItem > ul").css("display", "none");
    });
}
$(window).resize(() => {
    // console.log($(window).height());
    // console.log($(window).width());
    if ($(window).width() > 768) {
        $("ul").removeAttr('style');
    }
});
// nav > ul > li > ul > li > ul > li
// #nav > ul > li:nth-child(4) > ul > li:nth-child(1)