<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]><html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="$ContentLocale" class="ie ie8"><![endif]-->
<head>
	<% include HeaderTags %>
</head>
<body>
<header>
	<% include Header %>
</header>
<div class="main" <% if $SiteConfig.SiteBackground %>
	 style="background-image:  linear-gradient(
			 rgba(0, 0, 0, 0.95),
			 rgba(0, 0, 0, 0.45)),
			 url($SiteConfig.SiteBackground.Link);
			 background-size: cover; background-repeat: no-repeat;"<% end_if %>>
	<div class="typography">
		$Layout
	</div>
</div>
<footer>
	 <% if $RenderNonHome %>
		<% include Footer %>
	 <% end_if %>
</footer>
</body>
</html>
