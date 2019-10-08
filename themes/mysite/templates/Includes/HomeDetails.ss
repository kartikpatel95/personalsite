<% with $SiteConfig %>
    <% if $Title %>
        <div class="user">
            $Title
        </div>
    <% end_if %>
    <% if $Position %>
        <div class="heading mt-0">
            $Position
        </div>
    <% end_if %>
    <% if $PhoneNumber %>
        <div class="heading">
            Phone:
        </div>
        <div class="details">
            <a href="tel:$PhoneNumber">$PhoneNumber</a>
        </div>
    <% end_if %>
    <% if $Email %>
        <div class="heading">
            Email:
        </div>
        <div class="details">
            <a href="mailto:$Email">$Email</a>
        </div>
    <% end_if %>
    <% if $Address %>
        <div class="heading">
            Address:
        </div>
        <div class="details">
            $Address
        </div>
    <% end_if %>
    <% if $DateOfBirth %>
        <div class="heading">
            Date of Birth:
        </div>
        <div class="details">
            $DateOfBirth.Nice
        </div>
    <% end_if %>

    <% if $CV %>
        <div class="cv-button">
            <a class="btn btn-warning btn-block" href="$CV.URL">
                Download CV ($CV.Extension, $CV.Size)
            </a>
        </div>
    <% end_if %>
<% end_with %>
