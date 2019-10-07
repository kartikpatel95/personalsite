<div class="h-100 tiles-skills"
    <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL); background-repeat: no-repeat; background-size: cover;" <% end_if %>>
    <div class="container h-100 d-flex align-items-center pt-5">
        <div>
            <% if $Title && $ShowTitle %>
                <h1 class="pt-4 <% if not $Content %>pb-5<% end_if %>">$Title</h1>
            <% end_if %>
            <% if $Content %>
                <div class="content">
                    $Content
                </div>
            <% end_if %>
            <% if $Tiles %>
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
            <% end_if %>

            <% if $Tiles %>
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
            <% end_if %>
        </div>
    </div>
</div>
