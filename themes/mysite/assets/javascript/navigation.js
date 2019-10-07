$(window).on("shown.bs.dropdown", function (e) {
    var dropdown = $(e.target).find(".dropdown-menu");
    dropdown.removeClass("dropdown-menu-right");

    var window_width = $(window).width();
    var dropdown_width = dropdown.width();
    var dropdown_offset = dropdown.offset();

    if (dropdown_offset.left + dropdown_width > window_width)
        dropdown.addClass("dropdown-menu-right");
});
