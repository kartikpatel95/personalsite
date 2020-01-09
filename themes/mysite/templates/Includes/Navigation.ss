<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <% if $SiteConfig.SiteLogo %>
                <img src="$SiteConfig.SiteLogo.URL" class="site-logo" alt="$SiteConfig.SiteLogo.Title" />
            <% else %>
                $SiteConfig.Title
            <% end_if %>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <% loop $Menu(1) %>
                    <li class="nav-item <% if $Children %>dropdown<% end_if %>">
                        <a class="nav-link $LinkingMode <% if $Children %>dropdown-toggle<% end_if %>"
                            <% if $Children %>role="button" aria-expanded="false" data-toggle="dropdown"<% end_if %>
                           href="$Link" title="Go to the $Title page">$MenuTitle</a>
                        <% if $Children %>
                            <ul class="dropdown-menu">
                                <div class="d-flex current-page-link">
                                    <a href="$Link" title="Go to $Title page">$MenuTitle</a>
                                </div>
                                <% loop $Children %>
                                    <li><a class="dropdown-item $LinkingMode" href="$Link"
                                           title="Go to the $Title page">$MenuTitle</a>
                                    </li>
                                <% end_loop %>
                            </ul>
                        <% end_if %>
                    </li>
                <% end_loop %>
            </ul>
        </div>
    </div>
</nav>
