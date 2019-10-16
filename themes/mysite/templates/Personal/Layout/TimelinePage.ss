<% if $Timeline %>
    <div class="timeline">
        <div class="container h-100 py-3 d-flex justify-content-center flex-column">
            <div>
                <% loop $Timeline.Sort('SortID') %>
                    <div class="timeline-container <% if $Odd %> left <% else %> right <% end_if %>">
                        <div class="timeline-content <% if $Top.Background %>tile-tint<% end_if %>">
                            <% if $DateLabel %>
                                <div class="time-heading">$DateLabel</div><% end_if %>
                            <% if $Dates %>
                                <div class="mb-2 time-description">$Dates</div><% end_if %>
                            <% if $DescriptionLabel %>
                                <div class="time-heading">$DescriptionLabel</div><% end_if %>
                            <% if $Description %>
                                <div class="time-description">$Description</div><% end_if %>
                        </div>
                    </div>
                <% end_loop %>
            </div>
        </div>
    </div>
<% end_if %>
