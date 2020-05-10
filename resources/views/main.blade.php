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
          @include("layouts.header")
          <!--Counts-->
          <section class="dashboard-counts no-padding-bottom">
            @include("widgets.count")
          </section>
          <!-- Surves/Works Section-->
          <section class="projects no-padding-top">
           	 <div class="container-fluid">
           	 	@foreach($all as $survey)
               <!-- Work -->
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="upload/img/{{$survey->img}}" alt="..." class="img-fluid"></div>
                      <div class="text">
                        <h3 class="h4">{{$survey->title}}</h3><small><b>Subject:</b> {{$survey->subject}}</small>
                      </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">{{$survey->created_at}}</span></div>
                  </div>
                  <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>{{$survey->updated_at}}</div>
                  <!--  <div class="comments"><i class="fa fa-comment-o"></i>20</div>-->
                    <div class="project-progress">
                     <a href="{{$survey->id}}"> <button type="submit" class="btn btn-info">Pass</button></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
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