<div class="h-100 background-image-extra pt-3 pb-3" <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL);" <% end_if %>>

    <div class="container">
        <% include TitleContent %>

        <% if $Attribution %>
            <div class="mb-3 p-3 attribution">
                <strong>Attributed Company:</strong>  $Attribution
            </div>
        <% end_if %>
        <div class="position-relative">
            <div class="swiper-wrapper">
                <% if $PortImages %>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <% loop $PortImages %>
                                <div class="swiper-slide">
                                    <img src="$Me.Link" class="port-images" alt="$Me.Title"/>
                                </div>
                            <% end_loop %>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                <% end_if %>

                <% if $Languages %>
                    <div class="language-wrapper d-none d-sm-block">
                        <% loop $Languages %>
                            <span class="language-tag">$Name</span>
                        <% end_loop %>
                    </div>
                <% end_if %>
            </div>

            <% if $Languages %>
                <div class="mobile-language-wrapper d-block d-sm-none">
                    <% loop $Languages %>
                        <span class="mobile-language-tag">$Name</span>
                    <% end_loop %>
                </div>
            <% end_if %>
        </div>
    </div>
</div>
