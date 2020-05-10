<!DOCTYPE html>
<html>
  <head>
	@include("layouts.head")
  </head>
  <body>
    <div class="page">
      <header class="header">
      	<!--Top navbar-->
        @include("layouts.nav")
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Left navbar -->
        @include("layouts.leftBar")
        <div class="content-inner">
          <!--Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"> 
              	<div class="avatar">
              		<img src="img/logo-1.png" alt="..." class="img-fluid">
              		<button type="button" class="btn btn-warning">Create | Survey </button>
              	</div>
              </h2>
            </div>
          </header>
          <!--Counts-->
          <section class="dashboard-counts no-padding-bottom">
            @include("widgets.count")
          </section>
          <!-- Surves/Works Section-->
          <section class="projects no-padding-top">
           	@include("layouts.works")
          </section>
          <!-- Footer-->
          <footer class="main-footer">
            @include("layouts.footer")
          </footer>
        </div>
      </div>
    </div>
    @include("js.alljs")
  </body>
</html>