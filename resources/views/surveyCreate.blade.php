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
         
          <!-- Survey Create-->
          <section class="projects no-padding-top">
           	 <div class="content">
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

                   <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Question Settings:</label>
                      <div class="col-sm-9">
                        <div class="i-checks">
                          <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                          <label for="checkboxCustom1">Uploade Quesion file</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom2" type="checkbox" value="" checked="" class="checkbox-template">
                          <label for="checkboxCustom2">Uploade image</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="" class="checkbox-template">
                          <label for="checkboxCustom">Question/Comments/Hints - typing</label>
                        </div>
                      </div>
                    </div>

                     <div class="form-group def-number-input number-input safari_only">
                       <label for="options">Choose range of Options: </label>
                      <input class="quantity" id="options" min="0" name="quantity" value="2" type="number">
                    </div>

                         <script type="text/javascript">
                        function Check() {
                            var patt = new RegExp("^([A-Z a-z]){2}([0-9]){7}$")
                            var advalue = document.getElementById("passport").value;
                            var e = document.getElementById("email").value;
                            var e2 = document.getElementById("email2").value;
                            var pw = document.getElementById("password").value;
                            var pw2 = document.getElementById("password2").value;
                            return false;
                        }
                    </script>

                    <button id="send" type="submit" class="btn btn-success" onclick="return Check();">Next</button>

                    </form>
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