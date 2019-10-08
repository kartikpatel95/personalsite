<div class="h-100 background-image-extra" <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL);" <% end_if %>>

    <div class="container">
        <% include TitleContent %>

        <% if $PortImages %>
            <div class="swiper-container pb-5">
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
    </div>
</div>
