<!DOCTYPE html>
<html>
    <head>
        <title>Whoop blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset( "/css/app.css" )  }}"/>
    </head>
    <body>
		@include( "nav.mainNav" )
		<div class="container">
			@yield( "content" )
		</div>
    </body>
</html>
