<div class="container">
    <% if $ShowTitle && $Title %>
        <h1>
            $Title
        </h1>
    <% end_if %>

    <% if $Content %>
        $Content
    <% end_if %>
</div>