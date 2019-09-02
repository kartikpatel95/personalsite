<% if $Timeline %>
    <div class="timeline">
        <% loop $Timeline %>
                <div class="container">
                    <div class="timeline-container <% if $Odd %> left <% else %> right <% end_if %>">
                        <div class="timeline-content">
                            <div class="time-heading">$DateLabel</div>
                            <div class="mb-2 time-description">$Dates</div>
                            <div class="time-heading">$DescriptionLabel</div>
                            <div class="time-description">$Description</div>
                        </div>
                    </div>
                </div>
        <% end_loop %>
    </div>
<% end_if %>