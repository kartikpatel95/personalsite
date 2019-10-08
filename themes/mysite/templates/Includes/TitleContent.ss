<div class="py-sm-5">
    <% if $Title && $ShowTitle %>
        <h1 class="pt-4 title <% if not $Content %>pb-4<% end_if %>"><strong>$Title</strong></h1>
    <% end_if %>
    <% if $Content %>
        <div class="content pb-3 <% if not $ShowTitle %> pt-4 <% end_if %>">
            $Content
        </div>
    <% end_if %>
</div>
