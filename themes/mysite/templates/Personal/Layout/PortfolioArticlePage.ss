<div class="h-100 background-image-extra pt-3 pb-3" <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL);" <% end_if %>>

    <div class="container">

        <% if $BreadCrumbs %>
            <div class="mt-3 bread-crumb">
                $BreadCrumbs
            </div>
        <% end_if %>
        <% include TitleContent %>


        <% if $PortfolioURL %>
            <div class="attribution px-3">
                <span class="mr-2"><strong>URL:</strong></span>
                <div class="d-inline-block my-1">
                    <a href="$PortfolioURL.URL" $PortfolioURL.TargetAttr>$PortfolioURL.Title</a>
                </div>
            </div>
        <% end_if %>


        <% if $Languages %>
            <div class="mobile-language-wrapper attribution p-3">
                <span class="mr-2"><strong>Tools:</strong></span>
                <% loop $Languages %>
                    <div class="d-inline-block my-1">
                        <span class="mobile-language-tag"> $Name</span>
                    </div>
                <% end_loop %>
            </div>
        <% end_if %>

        <div class="position-relative">
            <% if $PortfolioItems %>
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <% loop $PortfolioItems.Sort('SortID') %>
                            <div class="swiper-slide">
                                <a href="$PortImages.Link" data-lightbox="port-slider">
                                    <img src="$PortImages.Link" class="port-images" alt="$PortImages.Title"/>
                                </a>
                            </div>
                        <% end_loop %>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper d-flex justify-content-center">
                            <% loop $PortfolioItems.Sort('SortID') %>
                                <div class="swiper-slide">
                                    <img src="$PortImages.Link" alt="$PortImages.Title"/>
                                </div>
                            <% end_loop %>
                        </div>
                    </div>
                </div>
            <% end_if %>
        </div>
    </div>
</div>
