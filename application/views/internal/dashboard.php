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
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-iit-form.css');?>">

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-sdu-text-th.png');  ?>"/>
</head>

<body>


  <div class="container h-100">

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

        <div class="row ">

              <div class="card col-sm-12 col-md-6">
                <div class="card-body">
                  <div class="card-title">
                    <strong>ตัวชี้วัดที่ 1 การปฏิบัติหน้าที่</strong>
                    <canvas id="myChart1"></canvas>
                  </div>
                </div>
              </div>

            <div class="card col-sm-12 col-md-6">
                <div class="card-body">
                  <div class="card-title">
                    <strong>ตัวชี้วัดที่ 2 การใช้งบประมาณ</strong>
                    <canvas id="myChart2"></canvas>
                  </div>
                </div>
            </div>

        </div>

        <div class="row mt-2 ">

              <div class="card col-sm-12 col-md-6">
                <div class="card-body">
                  <div class="card-title">
                    <strong>ตัวชี้วัดที่ 3 การใช้อำนาจ</strong>
                    <canvas id="myChart3"></canvas>
                  </div>
                </div>
              </div>

            <div class="card col-sm-12 col-md-6">
                <div class="card-body">
                  <div class="card-title">
                    <strong>ตัวชี้วัดที่ 4 การใช้ทรัพย์สินของราชการ</strong>
                    <canvas id="myChart4"></canvas>
                  </div>
                </div>
            </div>

        </div>

        <div class="row mt-2 ">

              <div class="card col-sm-12 col-md-6">
                <div class="card-body">
                  <div class="card-title">
                    <strong>ตัวชี้วัดที่ 5 การแก้ไขปัญหาการทุจริต</strong>
                    <canvas id="myChart5"></canvas>
                  </div>
                </div>
              </div>

        </div>


  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendors/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
      var base_url = '<?php echo base_url(); ?>';
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>

<script>




    $(document).ready(function(){
      ajax_init();

      function ajax_init(){
        var formData = {
          [csrfName] : csrfHash
        }

        $.ajax({
          url:  base_url + "internal/dashboard_source",
          type: 'POST',
          dataType: 'json',
          data: formData,
          success: function (res){
             console.log(res);

            resAvg = res[0];

            var ctx1 = document.getElementById('myChart1');
            var myChart1 = new Chart(ctx1, {
                type: 'horizontalBar',
                data: {
                    labels: ['I1', 'I2', 'I3', 'I4', 'I5', 'I6'],
                    datasets: [{
                        label: '% of Votes',
                        data: [
                          resAvg.avg_i1,
                          resAvg.avg_i2,
                          resAvg.avg_i3,
                          resAvg.avg_i4,
                          resAvg.avg_i5,
                          resAvg.avg_i6,
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)'

                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100
                            }
                        }]
                    }
                }
            });


            var ctx2 = document.getElementById('myChart2');
            var myChart2 = new Chart(ctx2, {
                type: 'horizontalBar',
                data: {
                    labels: ['I7', 'I8', 'I9', 'I10', 'I11', 'I12'],
                    datasets: [{
                        label: '% of Votes',
                        data: [
                          resAvg.avg_i7,
                          resAvg.avg_i8,
                          resAvg.avg_i9,
                          resAvg.avg_i10,
                          resAvg.avg_i11,
                          resAvg.avg_i12
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100
                            }
                        }]
                    }
                }
            });

            var ctx3 = document.getElementById('myChart3');
            var myChart3 = new Chart(ctx3, {
                type: 'horizontalBar',
                data: {
                    labels: ['I13', 'I14', 'I15', 'I16', 'I17', 'I18'],
                    datasets: [{
                        label: '% of Votes',
                        data: [
                          resAvg.avg_i13,
                          resAvg.avg_i14,
                          resAvg.avg_i15,
                          resAvg.avg_i16,
                          resAvg.avg_i17,
                          resAvg.avg_i18
                        ],
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)'

                        ],
                        borderColor: [
                          'rgba(255, 206, 86, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100
                            }
                        }]
                    }
                }
            });

            var ctx4 = document.getElementById('myChart4');
            var myChart4 = new Chart(ctx4, {
                type: 'horizontalBar',
                data: {
                    labels: ['I19', 'I20', 'I21', 'I22', 'I23', 'I24'],
                    datasets: [{
                        label: '% of Votes',
                        data: [
                          resAvg.avg_i19,
                          resAvg.avg_i20,
                          resAvg.avg_i21,
                          resAvg.avg_i22,
                          resAvg.avg_i23,
                          resAvg.avg_i24
                        ],
                        backgroundColor: [
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(75, 192, 192, 0.2)'

                        ],
                        borderColor: [
                          'rgba(75, 192, 192, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100
                            }
                        }]
                    }
                }
            });

            var ctx5 = document.getElementById('myChart5');
            var myChart5 = new Chart(ctx5, {
                type: 'horizontalBar',
                data: {
                    labels: ['I25', 'I26', 'I27', 'I28', 'I29', 'I30'],
                    datasets: [{
                        label: '% of Votes',
                        data: [
                          resAvg.avg_i25,
                          resAvg.avg_i26,
                          resAvg.avg_i27,
                          resAvg.avg_i28,
                          resAvg.avg_i29,
                          resAvg.avg_i30
                        ],
                        backgroundColor: [
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(153, 102, 255, 0.2)'

                        ],
                        borderColor: [
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100
                            }
                        }]
                    }
                }
            });


          }
        });

      }
    });
</script>

</body>
</html>
