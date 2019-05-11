$(".bars").click(function() {
    $("#nav > ul").slideToggle();
    $(".navItem ul").css("display", "none");
});

$(".navItem").click(function() {
    console.log($(this).index())
    $(".navItem > ul").slideUp();
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
    console.log($(this).index())
    $(".navSubItem ul").slideToggle();
    // $(this).find('ul').slideToggle();
    $(".navSubItem > ul").css("display", "none");
});

$(window).resize(function() {
    if ($(window).width() > 768) {
        $("ul").removeAttr('style');
    }
});
// nav > ul > li > ul > li > ul > li
// #nav > ul > li:nth-child(4) > ul > li:nth-child(1)