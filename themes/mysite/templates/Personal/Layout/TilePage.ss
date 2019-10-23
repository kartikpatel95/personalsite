<div class="h-100 tiles-skills">
    <div class="container h-100">
        <% include TitleContent %>

        <% if $Tiles %>
            <div class="py-3">
                <div class="title">
                    <h1>Technical Skills</h1>
                </div>
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

                <div class="title">
                    <h1>Management Skills</h1>
                </div>
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
