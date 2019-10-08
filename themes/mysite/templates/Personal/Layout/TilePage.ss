<div class="h-100 tiles-skills"
    <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL); background-repeat: no-repeat; background-size: cover;" <% end_if %>>
    <div class="container h-100">
        <% include TitleContent %>

        <% if $Tiles %>
            <div class="py-sm-3">
                <h1>Technical Skills</h1>
                <div class="row pb-4">
                    <% loop $Tiles.Sort('SortID') %>
                        <% if $SkillType == "Technical" %>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <div class="skill-wrapper">
                                    <div class="text-center skill-title">
                                        $Title
                                    </div>
                                    <div class="skill-description">
                                        $Description
                                    </div>
                                </div>
                            </div>
                        <% end_if %>
                    <% end_loop %>
                </div>

                <h1>Management Skills</h1>
                <div class="row pb-4">
                    <% loop $Tiles.Sort('SortID') %>
                        <% if $SkillType == "Management" %>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <div class="skill-wrapper">
                                    <div class="text-center skill-title">
                                        $Title
                                    </div>
                                    <div class="skill-description">
                                        $Description
                                    </div>
                                </div>
                            </div>
                        <% end_if %>
                    <% end_loop %>
                </div>
            </div>
        <% end_if %>
    </div>
</div>
