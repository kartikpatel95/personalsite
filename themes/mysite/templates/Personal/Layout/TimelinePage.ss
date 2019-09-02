<% if $Timeline %>
    <div class="timeline"
    <% if $Background %>style="background-image:
            linear-gradient(
            rgba(0, 0, 0, 0.45),
            rgba(0, 0, 0, 0.45)),
            url($Background.URL); background-size: cover; background-repeat: no-repeat;"<% end_if %>>
        <div class="container">
            <% loop $Timeline %>
                        <div class="timeline-container <% if $Odd %> left <% else %> right <% end_if %>">
                            <div class="timeline-content <% if $Top.Background %>tile-tint<% end_if %>">
                               <% if $DateLabel %> <div class="time-heading">$DateLabel</div><% end_if %>
                                <% if $Dates %> <div class="mb-2 time-description">$Dates</div><% end_if %>
                                <% if $DescriptionLabel %>  <div class="time-heading">$DescriptionLabel</div><% end_if %>
                                <% if $Description %>  <div class="time-description">$Description</div><% end_if %>
                            </div>
                        </div>
            <% end_loop %>
        </div>
    </div>
<% end_if %>