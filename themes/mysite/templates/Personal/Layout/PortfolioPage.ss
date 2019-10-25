<div class="h-100 portfolio-page background-image-extra">

    <div class="container">
       <% include TitleContent %>

        $SearchPortfolio

        <% if $PortfolioResults %>
            <div class="row">
                <% loop $PortfolioResults.Results %>
                    <div class="col-lg-6 col-xl-4">
                        <a href="$Link">
                            <div class="article-wrapper">
                                $Title
                            </div>
                        </a>
                    </div>
                <% end_loop %>
            </div>



            <% if $PortfolioResults.Results.MoreThanOnePage %>
                <nav>
                    <ul class="pagination justify-content-center flex-wrap">
                    <li class="page-item left <% if not $PortfolioResults.Results.NotFirstPage %>disabled"<% end_if %>">
                        <a class="page-link" href="$PortfolioResults.Results.PrevLink"> <i
                                class="fa fa-chevron-circle-left"></i> Prev</a></li>

                        <% loop $PortfolioResults.Results.PaginationSummary %>
                            <li class="page-item <% if $CurrentBool %>active<% end_if %>">
                                <% if $CurrentBool %>
                                    <a class="page-link" href="$Link">$PageNum</a>
                                <% else %>
                                    <% if $Link %>
                                        <a class="page-link" href="$Link">$PageNum</a>
                                    <% else %>
                                        <span class="ellipse"> ...</span>
                                    <% end_if %>
                                <% end_if %>
                            </li>
                        <% end_loop %>

                            <li class="page-item right <% if not $PortfolioResults.Results.NotLastPage %>disabled"<% end_if %>">
                        <a class="page-link" href="$PortfolioResults.Results.NextLink">Next <i
                                class="fa fa-chevron-circle-right"></i></a>
                        </li>
                    </ul>
                </nav>

            <% end_if %>
        <% end_if %>
    </div>
</div>
