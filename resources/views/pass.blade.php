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
          
          @include("layouts.header")
         
          <!-- Survey Create-->
          <section class="projects no-padding-top">
             <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    
                    <div class="card-header d-flex align-items-center">
                      <h5 class="h5">{{$one->title}}</h5> |
                      <span>{{$one->subject}}</span> |
                      <span>Khidarov Mirrakhmon</span> |
                      <span>{{$one->create}}</span>
                    </div>
                    <div class="card-body">
                      <!-- Quesition -->
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h3 class="h4"> Q1 </h3>
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
                      <!-- Quesition -->
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h3 class="h4"> Q2 </h3>
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
                      <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
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