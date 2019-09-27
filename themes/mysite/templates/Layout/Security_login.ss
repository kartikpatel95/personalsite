<div class="background-wrapper">
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
