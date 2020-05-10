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
              		<p>Everyone takes surveys. Whoever makes a statement about human behavior has engaged in a survey of some sort.</p>
              		<a href="survey"><button type="button" class="btn btn-warning" >Create | Survey </button></a>
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