<!DOCTYPE html>
<html>
  <head>
    @include("layouts.head")
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row bg-white">
            <div class="col-lg-12">
              <div class="form d-flex align-items-center">
                <div class="content">
                 <form>
                    <h3>Personal Info:</h3>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="name">Full Name <span class="required">*</span>
                      </label>
                      <div>
                      <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
                      </div>
                    </div>

                     <div class="item form-group">
                        <label class="col-form-label label-align" for="passport">Passport Number
                        <span class="required">*</span>
                        </label>
                        <div>
                            <input type="text" id="passport" name="passport" required="required" maxlength="9" class="form-control" placeholder="AB1112233">
                        </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="email">Email <span class="required">*</span>
                      </label>
                      <div>
                      <input type="email" id="email" name="email" required="required" class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="email">Confirm Email <span class="required">*</span>
                      </label>
                      <div>
                      <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="occupation">Profession <span class="required">*</span>
                      </label>
                      <div>
                      <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="password" class="col-form-label label-align">Password<span class="required">*</span></label>
                      <div>
                      <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control" required="required">
                      </div>
                    </div>

                    <div class="item form-group">
                    <label for="password2" class="col-form-label label-align ">Repeat Password<span class="required">*</span></label>
                    <div>
                    <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control" required="required">
                    </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="telephone">Telephone <span class="required">*</span>
                      </label>
                      <div>
                      <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="name">Adress 
                      </label>
                      <div>
                      <input id="name" class="form-control" name="name" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label label-align" for="textarea">Bio
                      </label>
                      <div>
                      <textarea id="textarea" name="textarea" class="form-control"></textarea>
                      </div>
                    </div>

                     <script type="text/javascript">
                        function Check() {
                            var patt = new RegExp("^([A-Z a-z]){2}([0-9]){7}$")
                            var advalue = document.getElementById("passport").value;
                            var e = document.getElementById("email").value;
                            var e2 = document.getElementById("email2").value;
                            var pw = document.getElementById("password").value;
                            var pw2 = document.getElementById("password2").value;
                            if (patt.test(advalue)) {
                               if (e == e2){
                                  if (pw == pw2) 
                                        return true;
                                    else 
                                        alert("password is not matching");
                               }
                                else 
                                    alert("mail is not matching");
                            } 
                             else 
                                alert("Passport is not valid");
                            
                            return false;
                        }
                    </script>

                    <button id="send" type="submit" class="btn btn-success" onclick="return Check();">Submit</button>

                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>