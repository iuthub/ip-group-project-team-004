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
           	 <!-- Quesition-->
                <div class="col-lg-12">
                  <div class="card">
                     <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h5 class="h5">Survey Title </h5> |
                      <span>subject</span>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type Quesition</label>
                          <div class="col-sm-9">
                            <input required="required" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Any comments/link/hint/info</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>

                        <div class="form-group row">
                          <label for="image" class="col-sm-3 form-control-label" accept="image/*">Upload Image</label>
                          <div class="col-sm-9">
                            <input required="required" id="image" type="file" class="form-control-file">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type option1</label>
                          <div class="col-sm-9">
                            <input required="required" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type option2</label>
                          <div class="col-sm-9">
                            <input required="required" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Type option3</label>
                          <div class="col-sm-9">
                            <input required="required" type="text" class="form-control">
                          </div>
                        </div><button type="submit" class="btn btn-success">Add</button>
                      </form>
                    </div>
                  </div>
                </div>

                 <!-- Quesition -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"> Subject </h3>
                    </div>
                    <div class="card-body">
                      <img src="img/avatar-1.jpg"/ style="max-width: 200px"><br/>
                      <p>Quesition?...</p><br/>
                      <label class="col-sm-3 form-control-label">Options:</label>
                      <div class="col-sm-9">
                        <div class="i-checks">
                          <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                          <label for="checkboxCustom1">option1</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom2" type="checkbox" value="" class="checkbox-template">
                          <label for="checkboxCustom2">option2</label>
                        </div>
                       <div class="i-checks">
                          <input id="checkboxCustom3" type="checkbox" value="" class="checkbox-template">
                          <label for="checkboxCustom3">option3</label>
                        </div><br/>info:<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium error tenetur consequatur cum laudantium assumenda quibusdam corporis eius voluptate temporibus.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <button id="send" type="submit" class="btn btn-success" onclick="return Check();">Submit</button>
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