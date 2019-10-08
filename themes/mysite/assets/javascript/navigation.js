$(window).on("shown.bs.dropdown", function (e) {
    let dropdown = $(e.target).find(".dropdown-menu");
    dropdown.removeClass("dropdown-menu-right");

    let window_width = $(window).width();
    let dropdown_width = dropdown.width();
    let dropdown_offset = dropdown.offset();

    if (dropdown_offset.left + dropdown_width > window_width)
        dropdown.addClass("dropdown-menu-right");
});
