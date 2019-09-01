<div class="homepage-wrapper">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-md-6">
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
                <% end_with %>
            </div>

            <% with $SiteConfig %>
                <% if $Social %>
                    <div class="col-md-12 social-icons">
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