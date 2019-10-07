<% if $Title && $ShowTitle %>
    <h1 class="pt-4 <% if not $Content %>pb-5<% end_if %>">$Title</h1>
<% end_if %>
<% if $Content %>
    <div class="content pb-5 <% if not $ShowTitle %> pt-5 <% end_if %>">
        $Content
    </div>
<% end_if %>
