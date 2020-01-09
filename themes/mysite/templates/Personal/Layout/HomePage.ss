<div class="homepage-wrapper">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="personal-statement py-4 w-100">
                <% if $Content %>
                    <div class="pt-2">
                        $Content
                    </div>
                <% end_if %>
            </div>

            <% loop $Menu(1) %>
                <div class="col-md-6 col-lg-4 mb-4 tile-wrapper">
                    <a href="$Link">
                        <div class="tiles">$MenuTitle</div>
                    </a>
                </div>
            <% end_loop %>
        </div>
    </div>

    <% with $SiteConfig %>
        <% if $Social %>
            <div class="d-flex justify-content-center d-md-block">
                <div class="social-icons">
                    <% loop $Social %>
                        <div>
                            <a href="$Social.LinkURL" $TargetAttr><i class="$Icon"></i></a>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        <% end_if %>
    <% end_with %>
</div>
