<div class="h-100 portfolio-page" <% if $Background %>
     style="background-image:
             linear-gradient(
             rgba(0, 0, 0, 0.95),
             rgba(0, 0, 0, 0.45)
             ), url($Background.URL); background-repeat: no-repeat; background-size: cover;" <% end_if %>>

    <div class="container">
        <% if $Title && $ShowTitle %>
            <h1 class="pt-4 <% if not $Content %>pb-5<% end_if %>">$Title</h1>
        <% end_if %>
        <% if $Content %>
            <div class="content pb-5 <% if not $ShowTitle %> pt-5 <% end_if %>">
                $Content
            </div>
        <% end_if %>

        <% if $PageArticles %>
            <div class="row">
                <% loop $PageArticles %>
                    <div class="col-md-6 col-lg-4">
                        <a href="$Link">
                            <div class="article-wrapper">
                                $Title
                            </div>
                        </a>
                    </div>
                <% end_loop %>
            </div>

            <% if $PageArticles.MoreThanOnePage %>
                <nav>
                    <ul class="pagination justify-content-center flex-wrap">
                    <li class="page-item left <% if not $PageArticles.NotFirstPage %>disabled"<% end_if %>">
                        <a class="page-link" href="$BaseHref$PageArticles.PrevLink"> <i
                                class="fa fa-chevron-circle-left"></i> Prev</a></li>

                        <% loop $PageArticles.PaginationSummary %>
                            <li class="page-item <% if $CurrentBool %>active<% end_if %>">
                                <% if $CurrentBool %>
                                    <a class="page-link" href="$BaseHref$Link">$PageNum</a>
                                <% else %>
                                    <% if $Link %>
                                        <a class="page-link" href="$BaseHref$Link">$PageNum</a>
                                    <% else %>
                                        <span class="ellipse"> ...</span>
                                    <% end_if %>
                                <% end_if %>
                            </li>
                        <% end_loop %>

                            <li class="page-item right <% if not $PageArticles.NotLastPage %>disabled"<% end_if %>">
                        <a class="page-link" href="$BaseHref$PageArticles.NextLink">Next <i
                                class="fa fa-chevron-circle-right"></i></a>
                        </li>
                    </ul>
                </nav>

            <% end_if %>
        <% end_if %>
    </div>
</div>
