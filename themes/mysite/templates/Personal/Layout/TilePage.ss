<div class="h-100 tiles-skills"
     <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.45),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL); background-repeat: no-repeat; background-size: cover;" <% end_if %>>
    <div class="container pt-5">
        <% if $Tiles %>
            <h1>Technical Skills</h1>
            <div class="row mb-4">
                <% loop $Tiles %>
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
        <% end_if %>

        <% if $Tiles %>
            <h1>Management Skills</h1>
            <div class="row mb-4">
                <% loop $Tiles %>
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
        <% end_if %>
    </div>
</div>