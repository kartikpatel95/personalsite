<% if $Timeline %>
    <div class="timeline-wrapper">
        <% loop $Timeline.Sort('SortID') %>
            <div class="content">
                <% if $DateLabel %><div class="time-heading">$DateLabel</div><% end_if %>
                <% if $Dates %><div class="mb-2 time-description">$Dates</div><% end_if %>
                <% if $DescriptionLabel %><div class="time-heading">$DescriptionLabel</div><% end_if %>
                <% if $Description %><div class="time-description">$Description</div><% end_if %>
            </div>
        <% end_loop %>
    </div>
<% end_if %>