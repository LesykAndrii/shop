<!doctype html>
<html lang="ua">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>MyShop</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Custom styles for this template -->
    <link href="/css/starter-template.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
              <div class="col-sm-4">
                  <div id="logo">
                        <a class="navbar-brand" href="/"><img src="/image/logo.png"/></a>
                  </div>
              </div>
              <div class="col-sm-5">
                    <div id="search" class="input-group">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Пошук">
                                <input type="submit" value ="Search" class="btn btn-default btn-lg"/>
                            </div>
                        </form>

                    </div>
              </div>

              <div class="col-sm-3">
                <a class = "login right" href="/login">Login</a>
              </div>
          </div>
      </div>
  </nav>

    <div class="container">

      <div class="starter-template">
		<div class="row">

			<div class="category col-md-3">
                <div class="category_name">
                    <span>Категорії</span>
                </div>
				@include('categories')
			</div>
			<div class="col-md-9">
                @yield('content')
			</div>
		</div>
      </div>

    </div><!-- /.container -->



  </body>

</html>
