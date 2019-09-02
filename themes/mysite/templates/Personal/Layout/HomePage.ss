<div class="homepage-wrapper">
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
            <div class="col-md-6 home-user-details">
                <% with $SiteConfig %>
                    <% if $Title %>
                        <div class="user">
                            $Title
                        </div>
                    <% end_if %>
                    <% if $Position %>
                        <div class="heading mt-0">
                            $Position
                        </div>
                    <% end_if %>
                    <% if $PhoneNumber %>
                        <div class="heading">
                            Phone:
                        </div>
                        <div class="details">
                            $PhoneNumber
                        </div>
                    <% end_if %>
                    <% if $Email %>
                        <div class="heading">
                            Email:
                        </div>
                        <div class="details">
                            $Email
                        </div>
                    <% end_if %>
                    <% if $Address %>
                        <div class="heading">
                            Address:
                        </div>
                        <div class="details">
                            $Address
                        </div>
                    <% end_if %>
                    <% if $DateOfBirth %>
                        <div class="heading">
                            Date of Birth:
                        </div>
                        <div class="details">
                            $DateOfBirth.Nice
                        </div>
                    <% end_if %>

                    <% if $CV %>
                        <div class="mt-3">
                            <a class="btn btn-warning btn-block" href="$CV.URL">
                                Download CV ($CV.Extension, $CV.Size)
                            </a>
                        </div>
                    <% end_if %>
                <% end_with %>
            </div>

            <% with $SiteConfig %>
                <% if $Social %>
                    <div class="col-md-12 social-icons mb-4 mb-md-0">
                        <% loop $Social %>
                            <% if $Icon %>
                                <a href="$Social.LinkURL" {$Social.TargetAttr}><i class="$Icon"></i></a>
                            <% end_if %>
                        <% end_loop %>
                    </div>
                <% end_if %>
            <% end_with %>

        </div>
    </div>
</div>