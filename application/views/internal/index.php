<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>แบบวัดการรับรู้ของผู้มีส่วนได้เสียภายใน | มหาวิทยาลัยสวนดุสิต</title>
    <meta name="description" content="แบบวัดการรับรู้ของผู้มีส่วนได้เสียภายใน การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ ประจำปีงบประมาณ พ.ศ. 2564">
    <meta name="Keywords" content="Suan Dusit University, สวนดุสิต"  />
    <meta name='owner' content='มหาวิทยาลัยสวนดุสิต'>
    <meta name='copyright' content='มหาวิทยาลัยสวนดุสิต'>
    <meta name="robots" content="index,follow" />

    <link href="<?php echo base_url('assets/vendors/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-iit-form.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-sdu-text-th.png');  ?>"/>

    <style>
      :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
      }



          .card-signin {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
          }

          .card-signin .card-title {
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 1.5rem;
          }

          .card-signin .card-body {
            padding: 2rem;
          }

          .form-signin {
            width: 100%;
          }

          .form-signin .btn {
            font-size: 80%;
            border-radius: 5rem;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
          }

          .form-label-group {
            position: relative;
            margin-bottom: 1rem;
          }

          .form-label-group input {
            height: auto;
            border-radius: 2rem;
          }

          .form-label-group>input,
          .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
          }

          .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
          }

          .form-label-group input::-webkit-input-placeholder {
            color: transparent;
          }

          .form-label-group input:-ms-input-placeholder {
            color: transparent;
          }

          .form-label-group input::-ms-input-placeholder {
            color: transparent;
          }

          .form-label-group input::-moz-placeholder {
            color: transparent;
          }

          .form-label-group input::placeholder {
            color: transparent;
          }

          .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
          }

          .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
          }

          .btn-google {
            color: white;
            background-color: #ea4335;
          }

          .btn-facebook {
            color: white;
            background-color: #3b5998;
          }

          /* Fallback for Edge
          -------------------------------------------------- */

          @supports (-ms-ime-align: auto) {
            .form-label-group>label {
              display: none;
            }
            .form-label-group input::-ms-input-placeholder {
              color: #777;
            }
          }

          /* Fallback for IE
          -------------------------------------------------- */

          @media all and (-ms-high-contrast: none),
          (-ms-high-contrast: active) {
            .form-label-group>label {
              display: none;
            }
            .form-label-group input:-ms-input-placeholder {
              color: #777;
            }
          }

    </style>

</head>

<body>


  <div class="container">

    <div class="row align-items-center mt-2">

        <div class="col-sm-12 col-md-12">
          <h4 class="text-center" >
              แบบวัดการรับรู้ของผู้มีส่วนได้เสียภายใน
              Internal Integrity and Transparency Assessment (IIT)<br>
              การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ <br>
              ประจำปีงบประมาณ พ.ศ. 2564
          </h4>
        </div>
    </div>

      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" id="FrmIITLogin">
                  <div class="form-label-group">
                    <input type="username" id="username" class="form-control" placeholder="User Name" required autofocus>
                    <label for="username">User Name</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="passwd" name="passwd" class="form-control" placeholder="Password" required>
                    <label for="passwd">Password</label>
                  </div>

                  <div class="mb-3 text-center">

                    <div class="custom-control-label" >!! เข้าใช้งานระบบโดย !! <br>ใช้ชื่อผู้ใช้งานเดียวกันกับระบบอินเทอร์เน็ตมหาวิทยาลัย</div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button" id="iit_login">Sign in</button>

              </form>
            </div>
          </div>
        </div>
      </div>





      <footer class="footer">
        <div class="d-flex justify-content-between">
          <div class="small">
            &copy; กองนโยบายและแผน มหาวิทยาลัยสวนดุสิต
          </div>
          <div class="small">
            ออกแบบและพัฒนาโดย ฝ่ายศูนย์ข้อมูลกลาง สำนักวิทยบริการและเทคโนโลยีสารสนเทศ
          </div>
        </div>
      </footer>


  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendors/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <script>
      var BASE_URL = '<?php echo base_url(); ?>';
      console.log('JS: base_url = '+ BASE_URL);

      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>



  <script language="javascript">
    $(document).ready(function(){


      $('#iit_login').on('click', function (e) {
            e.preventDefault();

            var formData = {
						'username': $("#username").val(),
						'passwd' : $("#passwd").val(),
						 [csrfName] : csrfHash
					}

					console.log(formData);
					// console.log(base_url);

					$.ajax({
						url:  BASE_URL + "internal/do_login",
						type: 'POST',
						dataType: 'json',
						data: formData,
						success: function (resLogin){

							console.log("internal/do_login : [success]");
							console.log(resLogin);

							if(resLogin.uid == ""){

								swal.fire({
									text: "Login Fail!!",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "กรุณาลองใหม่อีกครั้ง",
									customClass: {
										confirmButton: "btn font-weight-bold btn-light-primary"
									}
								}).then(function() {
									location.reload();
								});

							}else{


										//--::Begin Store Session
											var FormLoginData = {

												'uid' : resLogin.uid,
												'user_id' : resLogin.hrcode,
												'citizencode' : resLogin.citizencode,
												'name' : resLogin.name,
												'surname' : resLogin.surname,
                        'displayname': resLogin.displayname,
                        [csrfName] : csrfHash
											}
											jQuery.ajax({
												url:  BASE_URL + "internal/do_login_session",
												type: 'POST',
												dataType: 'json',
												data: FormLoginData,
												success: function (resSession){

													console.log("internal/do_login_session : [success]");
													console.log(resSession);
													window.location.href = BASE_URL + "internal/form";

												}
											});
										//--::End Store Session

							}
						}
					});

      });


    });


  </script>



</body>
</html>


