<% if $Title || $Content %>
    <div class="py-sm-5">
        <% if $Title && $ShowTitle %>
            <h1 class="pt-2 title <% if not $Content %>pb-3<% end_if %>"><strong>$Title</strong></h1>
        <% end_if %>
        <% if $Content %>
            <div class="content pb-2 <% if not $ShowTitle %> pt-3 <% end_if %>">
                $Content
            </div>
        <% end_if %>
    </div>
<% end_if %>
