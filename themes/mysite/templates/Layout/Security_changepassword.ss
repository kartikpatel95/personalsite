<div class="background-wrapper" style="background-image: linear-gradient(
                  rgba(0, 0, 0, 0.95),
                  rgba(0, 0, 0, 0.45)), url('/public/_resources/themes/mysite/assets/img/architecture-min.jpg');">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="login-form">
            <% if $Title %>
                <h1>
                    $Title
                </h1>
            <% end_if %>
            <% if $Content %>
                $Content
            <% end_if %>
            $Form
        </div>
    </div>
</div>
