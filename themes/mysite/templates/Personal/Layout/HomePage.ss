<div class="homepage-wrapper"
     style="background-image: linear-gradient(
     rgba(0, 0, 0, 0.95),
     rgba(0, 0, 0, 0.45)), url('/public/_resources/themes/mysite/assets/img/architecture-min.jpg');">

    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-md-6 my-3 my-md-0 px-0">
                <div class="personal-statement">
                    <% if $SiteConfig.Profile %>
                        <div class="d-flex justify-content-center">
                            <img src="$SiteConfig.Profile.Link" class="profile" alt="$SiteConfig.Profile.Title">
                        </div>
                    <% end_if %>
                    <% if $Content %>
                        <div class="pt-2">
                            $Content
                        </div>
                    <% end_if %>
                </div>
            </div>
            <div class="col-md-6 home-user-details mb-3 mb-md-0">
                <% include HomeDetails %>
            </div>

            <% with $SiteConfig %>
                <% if $Social %>
                    <div class="col-md-12 social-icons mb-4 mb-md-0">
                        <% loop $Social %>
                            <% if $Icon %>
                                <a href="$Social.LinkURL" {$Social.TargetAttr} class="mr-3"><i class="$Icon"></i></a>
                            <% end_if %>
                        <% end_loop %>
                    </div>
                <% end_if %>
            <% end_with %>

        </div>
    </div>
</>
