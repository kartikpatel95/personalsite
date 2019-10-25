var search_button = $('#Form_SearchPortfolio_action_doSearchPortfolio');
if(search_button){
    $("#Form_SearchPortfolio_action_doSearchPortfolio").css("display", 'none');
}
var lanaguge_dropdown = $(".language-search-dropdown");
var project_type = $(".project-type");
if(lanaguge_dropdown || project_type) {
    lanaguge_dropdown.on("change", function () {
        $(".portfolio-form").submit();
    });

    project_type.on("change", function () {
        $(".portfolio-form").submit();
    })
}