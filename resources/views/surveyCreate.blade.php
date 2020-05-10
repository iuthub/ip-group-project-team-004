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
         
          <!-- Survey Create-->
          <section class="projects no-padding-top">
           	 <div class="content">
         
                 {!! Form::open(['url'=> survey.set]) !!}
             
                 <form class="p-3 bg-white">
                    <h3>General Info:</h3>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="name">Survey Title <span class="required">*</span>
                      </label>
                      <div>
                      <input id="name" maxlength="30" class="form-control" data-validate-length-range="6" name="name" required="required" type="text">
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="col-form-label label-align" for="name">Subject/Area of Survey <span class="required">*</span>
                      </label>
                      <div>
                      <input id="name" maxlength="30" class="form-control" data-validate-length-range="6" name="name" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="textarea">Description
                      </label>
                      <div>
                      <textarea id="textarea" name="textarea" class="form-control"></textarea>
                      </div>
                    </div>

                     <div class="form-group def-number-input number-input safari_only">
                       <label for="options">Choose range of Options: </label>
                      <input class="quantity" id="options" min="0" name="quantity" value="2" type="number">
                    </div>
                    <button id="send" type="submit" class="btn btn-success" >Next</button>

                    </form> {!! Form::clouse() !!}
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