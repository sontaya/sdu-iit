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

    <div class="row mt-3">
      <div class="col-md-12">
        <div id="flipdown" class="flipdown"></div>
      </div>
    </div>

      <form id="FormIIT"  action="<?php echo base_url('internal/store'); ?>" method="post" accept-charset="utf-8" >

        <!-- ส่วนที่ 1  -->
        <div class="row mt-3">
          <div class="alert alert-dismissible alert-info col-sm-12">
            <strong>ตัวชี้วัดที่ 1 การปฏิบัติหน้าที่</strong>
          </div>
        </div>


        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Begin:>> I1 -->
                      <tr>
                        <td colspan="5" class="main-topic">I1 บุคลากรในหน่วยงานของท่าน ปฏิบัติงาน/ให้บริการแก่ผู้มาติดต่อ ตามประเด็นดังต่อไปนี้ มากน้อยเพียงใด </td>
                      </tr>

                      <tr>
                        <td>&nbsp;-เป็นไปตามขั้นตอนที่กำหนด<span id="ans_i101_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i101" id="ans_i101_id1" class="custom-control-input" data-error="#ans_i101_Error" value="0" />
                            <label class="custom-control-label" for="ans_i101_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i101" id="ans_i101_id2" class="custom-control-input" data-error="#ans_i101_Error" value="33" />
                            <label class="custom-control-label" for="ans_i101_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i101" id="ans_i101_id3" class="custom-control-input" data-error="#ans_i101_Error" value="67" />
                            <label class="custom-control-label" for="ans_i101_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i101" id="ans_i101_id4" class="custom-control-input" data-error="#ans_i101_Error" value="100" />
                            <label class="custom-control-label" for="ans_i101_id4"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>&nbsp;-เป็นไปตามระยะเวลาที่กำหนด<span id="ans_i102_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i102" id="ans_i102_id1" class="custom-control-input" data-error="#ans_i102_Error" value="0" />
                            <label class="custom-control-label" for="ans_i102_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i102" id="ans_i102_id2" class="custom-control-input" data-error="#ans_i102_Error" value="33" />
                            <label class="custom-control-label" for="ans_i102_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i102" id="ans_i102_id3" class="custom-control-input" data-error="#ans_i102_Error" value="67" />
                            <label class="custom-control-label" for="ans_i102_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i102" id="ans_i102_id4" class="custom-control-input" data-error="#ans_i102_Error" value="100" />
                            <label class="custom-control-label" for="ans_i102_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I1 -->

                  <!-- Begin:>> I2 -->
                      <tr>
                        <td class="main-topic">I2 บุคลากรในหน่วยงานของท่าน ปฏิบัติงาน/ให้บริการ แก่ผู้มาติดต่อทั่ว ๆ ไป กับผู้มาติดต่อที่รู้จักเป็นการส่วนตัวอย่างเท่าเทียมกัน มากน้อยเพียงใด <span id="ans_i201_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i201" id="ans_i201_id1" class="custom-control-input" data-error="#ans_i201_Error" value="0" />
                            <label class="custom-control-label" for="ans_i201_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i201" id="ans_i201_id2" class="custom-control-input" data-error="#ans_i201_Error" value="33" />
                            <label class="custom-control-label" for="ans_i201_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i201" id="ans_i201_id3" class="custom-control-input" data-error="#ans_i201_Error" value="67" />
                            <label class="custom-control-label" for="ans_i201_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i201" id="ans_i201_id4" class="custom-control-input" data-error="#ans_i201_Error" value="100" />
                            <label class="custom-control-label" for="ans_i201_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I2 -->

                  <!-- Begin:>> I3 -->
                      <tr>
                        <td colspan="5" class="main-topic">I3 บุคลากรในหน่วยงานของท่าน มีพฤติกรรมในการปฏิบัติงาน ตามประเด็นดังต่อไปนี้ อย่างไร</td>
                      </tr>

                      <tr>
                        <td>&nbsp;- มุ่งผลสำเร็จของงาน<span id="ans_i301_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i301" id="ans_i301_id1" class="custom-control-input" data-error="#ans_i301_Error" value="0" />
                            <label class="custom-control-label" for="ans_i301_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i301" id="ans_i301_id2" class="custom-control-input" data-error="#ans_i301_Error" value="33" />
                            <label class="custom-control-label" for="ans_i301_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i301" id="ans_i301_id3" class="custom-control-input" data-error="#ans_i301_Error" value="67" />
                            <label class="custom-control-label" for="ans_i301_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i301" id="ans_i301_id4" class="custom-control-input" data-error="#ans_i301_Error" value="100" />
                            <label class="custom-control-label" for="ans_i301_id4"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>&nbsp;- ให้ความสำคัญกับงานมากกว่าธุระส่วนตัว <span id="ans_i302_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i302" id="ans_i302_id1" class="custom-control-input" data-error="#ans_i302_Error" value="0" />
                            <label class="custom-control-label" for="ans_i302_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i302" id="ans_i302_id2" class="custom-control-input" data-error="#ans_i302_Error" value="33" />
                            <label class="custom-control-label" for="ans_i302_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i302" id="ans_i302_id3" class="custom-control-input" data-error="#ans_i302_Error" value="67" />
                            <label class="custom-control-label" for="ans_i302_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i302" id="ans_i302_id4" class="custom-control-input" data-error="#ans_i302_Error" value="100" />
                            <label class="custom-control-label" for="ans_i302_id4"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>&nbsp;- พร้อมรับผิดชอบ หากความผิดพลาดเกิดจากตนเอง <span id="ans_i303_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i303" id="ans_i303_id1" class="custom-control-input" data-error="#ans_i303_Error" value="0" />
                            <label class="custom-control-label" for="ans_i303_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i303" id="ans_i303_id2" class="custom-control-input" data-error="#ans_i303_Error" value="33" />
                            <label class="custom-control-label" for="ans_i303_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i303" id="ans_i303_id3" class="custom-control-input" data-error="#ans_i303_Error" value="67" />
                            <label class="custom-control-label" for="ans_i303_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i303" id="ans_i303_id4" class="custom-control-input" data-error="#ans_i303_Error" value="100" />
                            <label class="custom-control-label" for="ans_i303_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I3 -->


              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->


        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="2">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มี</th>
                  <th class="text-center align-middle" style="width:8%" >ไม่มี</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Begin:>> I4 -->
                      <tr>
                        <td colspan="5" class="main-topic">I4 บุคลากรในหน่วยงานของท่าน มีการเรียกรับสิ่งดังต่อไปนี้ จากผู้มาติดต่อ  เพื่อแลกกับการปฏิบัติงาน การอนุมัติ อนุญาต หรือให้บริการ หรือไม่ </td>
                      </tr>

                      <tr>
                        <td>&nbsp;- เงิน <span id="ans_i401_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i401" id="ans_i401_id1" class="custom-control-input" data-error="#ans_i401_Error" value="0" />
                            <label class="custom-control-label" for="ans_i401_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i401" id="ans_i401_id2" class="custom-control-input" data-error="#ans_i401_Error" value="100" />
                            <label class="custom-control-label" for="ans_i401_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ทรัพย์สิน <span id="ans_i402_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i402" id="ans_i402_id1" class="custom-control-input" data-error="#ans_i402_Error" value="0" />
                            <label class="custom-control-label" for="ans_i402_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i402" id="ans_i402_id2" class="custom-control-input" data-error="#ans_i402_Error" value="100" />
                            <label class="custom-control-label" for="ans_i402_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ประโยชน์อื่น ๆ ที่อาจคำนวณเป็นเงินได้ เช่น การลดราคา การรับความบันเทิง เป็นต้น <span id="ans_i403_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i403" id="ans_i403_id1" class="custom-control-input" data-error="#ans_i403_Error" value="0" />
                            <label class="custom-control-label" for="ans_i403_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i403" id="ans_i403_id2" class="custom-control-input" data-error="#ans_i403_Error" value="100" />
                            <label class="custom-control-label" for="ans_i403_id2"></label>
                          </div>
                        </td>

                      </tr>
                      <tr>
                        <td colspan="3" class="remark-title">หมายเหตุ: เป็นการเรียกรับที่นอกเหนือจากที่กฎหมายกำหนดให้รับได้ เช่น ค่าธรรมเนียม ค่าบริการ ค่าปรับ เป็นต้น</td>
                      </tr>
                  <!-- End:>> I4 -->

                  <!-- Begin:>> I5 -->
                      <tr>
                        <td colspan="5" class="main-topic">I5 นอกเหนือจากการรับจากญาติหรือจากบุคคล ที่ให้กันในโอกาสต่าง ๆ โดยปกติตามขนบธรรมเนียม ประเพณี หรือวัฒนธรรม หรือให้กันตามมารยาทที่ปฏิบัติกันในสังคมแล้ว บุคลากรในหน่วยงานของท่าน มีการรับสิ่งดังต่อไปนี้ หรือไม่</td>
                      </tr>

                      <tr>
                        <td>&nbsp;- เงิน <span id="ans_i501_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i501" id="ans_i501_id1" class="custom-control-input" data-error="#ans_i501_Error" value="0" />
                            <label class="custom-control-label" for="ans_i501_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i501" id="ans_i501_id2" class="custom-control-input" data-error="#ans_i501_Error" value="100" />
                            <label class="custom-control-label" for="ans_i501_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ทรัพย์สิน <span id="ans_i502_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i502" id="ans_i502_id1" class="custom-control-input" data-error="#ans_i502_Error" value="0" />
                            <label class="custom-control-label" for="ans_i502_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i502" id="ans_i502_id2" class="custom-control-input" data-error="#ans_i502_Error" value="100" />
                            <label class="custom-control-label" for="ans_i502_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ประโยชน์อื่น ๆ ที่อาจคำนวณเป็นเงินได้ เช่น การลดราคา การรับความบันเทิง เป็นต้น <span id="ans_i503_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i503" id="ans_i503_id1" class="custom-control-input" data-error="#ans_i503_Error" value="0" />
                            <label class="custom-control-label" for="ans_i503_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i503" id="ans_i503_id2" class="custom-control-input" data-error="#ans_i503_Error" value="100" />
                            <label class="custom-control-label" for="ans_i503_id2"></label>
                          </div>
                        </td>

                      </tr>
                  <!-- End:>> I5 -->

                  <!-- Begin:>> I6 -->
                      <tr>
                        <td colspan="5" class="main-topic">I6 บุคลากรในหน่วยงานของท่าน มีการให้สิ่งดังต่อไปนี้ แก่บุคคลภายนอกหรือภาคเอกชน เพื่อสร้างความสัมพันธ์ที่ดีและคาดหวังให้มีการตอบแทนในอนาคต หรือไม่</td>
                      </tr>

                      <tr>
                        <td>&nbsp;- เงิน <span id="ans_i601_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i601" id="ans_i601_id1" class="custom-control-input" data-error="#ans_i601_Error" value="0" />
                            <label class="custom-control-label" for="ans_i601_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i601" id="ans_i601_id2" class="custom-control-input" data-error="#ans_i601_Error" value="100" />
                            <label class="custom-control-label" for="ans_i601_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ทรัพย์สิน <span id="ans_i602_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i602" id="ans_i602_id1" class="custom-control-input" data-error="#ans_i602_Error" value="0" />
                            <label class="custom-control-label" for="ans_i602_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i602" id="ans_i602_id2" class="custom-control-input" data-error="#ans_i602_Error" value="100" />
                            <label class="custom-control-label" for="ans_i602_id2"></label>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>&nbsp;- ประโยชน์อื่น ๆ ที่อาจคำนวณเป็นเงินได้ เช่น การลดราคา การรับความบันเทิง เป็นต้น <span id="ans_i603_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i603" id="ans_i603_id1" class="custom-control-input" data-error="#ans_i603_Error" value="0" />
                            <label class="custom-control-label" for="ans_i603_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i603" id="ans_i603_id2" class="custom-control-input" data-error="#ans_i603_Error" value="100" />
                            <label class="custom-control-label" for="ans_i603_id2"></label>
                          </div>
                        </td>

                      </tr>
                  <!-- End:>> I6 -->

              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->

        <!-- ส่วนที่ 2  -->
        <div class="row mt-3">
          <div class="alert alert-dismissible alert-info col-sm-12">
            <strong>ตัวชี้วัดที่ 2 การใช้งบประมาณ</strong>
          </div>
        </div>


        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Begin:>> I7 -->

                      <tr>
                        <td class="main-topic">I7 ท่านรู้เกี่ยวกับแผนการใช้จ่ายงบประมาณประจำปี  ของหน่วยงานของท่าน มากน้อยเพียงใด <span id="ans_i701_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i701" id="ans_i701_id1" class="custom-control-input" data-error="#ans_i701_Error" value="0" />
                            <label class="custom-control-label" for="ans_i701_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i701" id="ans_i701_id2" class="custom-control-input" data-error="#ans_i701_Error" value="33" />
                            <label class="custom-control-label" for="ans_i701_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i701" id="ans_i701_id3" class="custom-control-input" data-error="#ans_i701_Error" value="67" />
                            <label class="custom-control-label" for="ans_i701_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i701" id="ans_i701_id4" class="custom-control-input" data-error="#ans_i701_Error" value="100" />
                            <label class="custom-control-label" for="ans_i701_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I7 -->

                  <!-- Begin:>> I8 -->
                      <tr>
                        <td colspan="5" class="main-topic">I8 หน่วยงานของท่าน ใช้จ่ายงบประมาณ โดยคำนึงถึงประเด็นดังต่อไปนี้ มากน้อยเพียงใด</td>
                      </tr>
                      <tr>
                        <td>&nbsp;- คุ้มค่า <span id="ans_i801_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i801" id="ans_i801_id1" class="custom-control-input" data-error="#ans_i801_Error" value="0" />
                            <label class="custom-control-label" for="ans_i801_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i801" id="ans_i801_id2" class="custom-control-input" data-error="#ans_i801_Error" value="33" />
                            <label class="custom-control-label" for="ans_i801_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i801" id="ans_i801_id3" class="custom-control-input" data-error="#ans_i801_Error" value="67" />
                            <label class="custom-control-label" for="ans_i801_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i801" id="ans_i801_id4" class="custom-control-input" data-error="#ans_i801_Error" value="100" />
                            <label class="custom-control-label" for="ans_i801_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ไม่บิดเบือนวัตถุประสงค์ของงบประมาณที่ตั้งไว้ <span id="ans_i802_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i802" id="ans_i802_id1" class="custom-control-input" data-error="#ans_i802_Error" value="0" />
                            <label class="custom-control-label" for="ans_i802_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i802" id="ans_i802_id2" class="custom-control-input" data-error="#ans_i802_Error" value="33" />
                            <label class="custom-control-label" for="ans_i802_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i802" id="ans_i802_id3" class="custom-control-input" data-error="#ans_i802_Error" value="67" />
                            <label class="custom-control-label" for="ans_i802_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i802" id="ans_i802_id4" class="custom-control-input" data-error="#ans_i802_Error" value="100" />
                            <label class="custom-control-label" for="ans_i802_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- Begin:>> I8 -->

                  <!-- Begin:>> I9 -->
                      <tr>
                        <td class="main-topic">I9 หน่วยงานของท่าน ใช้จ่ายงบประมาณเพื่อประโยชน์ส่วนตัว กลุ่ม หรือพวกพ้อง มากน้อยเพียงใด <span id="ans_i901_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i901" id="ans_i901_id1" class="custom-control-input" data-error="#ans_i901_Error" value="100" />
                            <label class="custom-control-label" for="ans_i901_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i901" id="ans_i901_id2" class="custom-control-input" data-error="#ans_i901_Error" value="67" />
                            <label class="custom-control-label" for="ans_i901_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i901" id="ans_i901_id3" class="custom-control-input" data-error="#ans_i901_Error" value="33" />
                            <label class="custom-control-label" for="ans_i901_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i901" id="ans_i901_id4" class="custom-control-input" data-error="#ans_i901_Error" value="0" />
                            <label class="custom-control-label" for="ans_i901_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I9 -->

                  <!-- Begin:>> I10 -->
                      <tr>
                        <td class="main-topic">I10 หน่วยงานของท่าน ใช้จ่ายงบประมาณเพื่อประโยชน์ส่วนตัว กลุ่ม หรือพวกพ้อง มากน้อยเพียงใด <span id="ans_i1001_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1001" id="ans_i1001_id1" class="custom-control-input" data-error="#ans_i1001_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1001_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1001" id="ans_i1001_id2" class="custom-control-input" data-error="#ans_i1001_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1001_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1001" id="ans_i1001_id3" class="custom-control-input" data-error="#ans_i1001_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1001_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1001" id="ans_i1001_id4" class="custom-control-input" data-error="#ans_i1001_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1001_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I10 -->

                  <!-- Begin:>> I11 -->
                      <tr>
                        <td colspan="5" class="main-topic">I11 หน่วยงานของท่าน มีการจัดซื้อจัดจ้าง/การจัดหาพัสดุ และการตรวจรับพัสดุในลักษณะดังต่อไปนี้  มากน้อยเพียงใด </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- โปร่งใส ตรวจสอบได้ <span id="ans_i1101_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1101" id="ans_i1101_id1" class="custom-control-input" data-error="#ans_i1101_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1101_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1101" id="ans_i1101_id2" class="custom-control-input" data-error="#ans_i1101_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1101_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1101" id="ans_i1101_id3" class="custom-control-input" data-error="#ans_i1101_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1101_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1101" id="ans_i1101_id4" class="custom-control-input" data-error="#ans_i1101_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1101_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- เอื้อประโยชน์ให้ผู้ประกอบการรายใดรายหนึ่ง <span id="ans_i1102_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1102" id="ans_i1102_id1" class="custom-control-input" data-error="#ans_i1102_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1102_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1102" id="ans_i1102_id2" class="custom-control-input" data-error="#ans_i1102_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1102_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1102" id="ans_i1102_id3" class="custom-control-input" data-error="#ans_i1102_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1102_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1102" id="ans_i1102_id4" class="custom-control-input" data-error="#ans_i1102_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1102_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- End:>> I11 -->

                  <!-- Begin:>> I12 -->
                      <tr>
                        <td colspan="5" class="main-topic">I12 หน่วยงานของท่าน เปิดโอกาสให้ท่าน มีส่วนร่วม ในการตรวจสอบการใช้จ่ายงบประมาณ ตามประเด็นดังต่อไปนี้ มากน้อยเพียงใด</td>
                      </tr>
                      <tr>
                        <td>&nbsp;- สอบถาม <span id="ans_i1201_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1201" id="ans_i1201_id1" class="custom-control-input" data-error="#ans_i1201_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1201_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1201" id="ans_i1201_id2" class="custom-control-input" data-error="#ans_i1201_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1201_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1201" id="ans_i1201_id3" class="custom-control-input" data-error="#ans_i1201_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1201_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1201" id="ans_i1201_id4" class="custom-control-input" data-error="#ans_i1201_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1201_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ทักท้วง <span id="ans_i1202_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1202" id="ans_i1202_id1" class="custom-control-input" data-error="#ans_i1202_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1202_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1202" id="ans_i1202_id2" class="custom-control-input" data-error="#ans_i1202_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1202_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1202" id="ans_i1202_id3" class="custom-control-input" data-error="#ans_i1202_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1202_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1202" id="ans_i1202_id4" class="custom-control-input" data-error="#ans_i1202_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1202_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ร้องเรียน <span id="ans_i1203_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1203" id="ans_i1203_id1" class="custom-control-input" data-error="#ans_i1203_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1203_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1203" id="ans_i1203_id2" class="custom-control-input" data-error="#ans_i1203_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1203_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1203" id="ans_i1203_id3" class="custom-control-input" data-error="#ans_i1203_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1203_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1203" id="ans_i1203_id4" class="custom-control-input" data-error="#ans_i1203_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1203_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- End:>> I12 -->




              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->


        <!-- ส่วนที่ 3  -->
        <div class="row mt-3">
          <div class="alert alert-dismissible alert-info col-sm-12">
            <strong>ตัวชี้วัดที่ 3 การใช้อำนาจ</strong>
          </div>
        </div>

        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Begin:>> I13 -->

                      <tr>
                        <td class="main-topic">I13 ท่านได้รับมอบหมายงานจากผู้บังคับบัญชาอย่างเป็นธรรม มากน้อยเพียงใด <span id="ans_i1301_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1301" id="ans_i1301_id1" class="custom-control-input" data-error="#ans_i1301_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1301_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1301" id="ans_i1301_id2" class="custom-control-input" data-error="#ans_i1301_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1301_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1301" id="ans_i1301_id3" class="custom-control-input" data-error="#ans_i1301_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1301_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1301" id="ans_i1301_id4" class="custom-control-input" data-error="#ans_i1301_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1301_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I13 -->

                  <!-- Begin:>> I14 -->

                      <tr>
                        <td class="main-topic">I14 ท่านได้รับการประเมินผลการปฏิบัติงาน ตามระดับคุณภาพของผลงานอย่างถูกต้อง มากน้อยเพียงใด <span id="ans_i1401_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1401" id="ans_i1401_id1" class="custom-control-input" data-error="#ans_i1401_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1401_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1401" id="ans_i1401_id2" class="custom-control-input" data-error="#ans_i1401_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1401_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1401" id="ans_i1401_id3" class="custom-control-input" data-error="#ans_i1401_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1401_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1401" id="ans_i1401_id4" class="custom-control-input" data-error="#ans_i1401_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1401_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- Begin:>> I14 -->

                  <!-- Begin:>> I15 -->

                      <tr>
                        <td class="main-topic">I15 ผู้บังคับบัญชาของท่าน มีการคัดเลือกผู้เข้ารับการฝึกอบรม การศึกษาดูงาน หรือการให้ทุนการศึกษา อย่างเป็นธรรม มากน้อยเพียงใด <span id="ans_i1501_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1501" id="ans_i1501_id1" class="custom-control-input" data-error="#ans_i1501_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1501_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1501" id="ans_i1501_id2" class="custom-control-input" data-error="#ans_i1501_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1501_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1501" id="ans_i1501_id3" class="custom-control-input" data-error="#ans_i1501_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1501_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1501" id="ans_i1501_id4" class="custom-control-input" data-error="#ans_i1501_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1501_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- Begin:>> I15 -->

                  <!-- Begin:>> I16 -->

                      <tr>
                        <td class="main-topic">I16 ท่านเคยถูกผู้บังคับบัญชาสั่งการให้ทำธุระส่วนตัวของผู้บังคับบัญชา มากน้อยเพียงใด <span id="ans_i1601_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1601" id="ans_i1601_id1" class="custom-control-input" data-error="#ans_i1601_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1601_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1601" id="ans_i1601_id2" class="custom-control-input" data-error="#ans_i1601_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1601_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1601" id="ans_i1601_id3" class="custom-control-input" data-error="#ans_i1601_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1601_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1601" id="ans_i1601_id4" class="custom-control-input" data-error="#ans_i1601_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1601_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- Begin:>> I16 -->

                  <!-- Begin:>> I17 -->

                      <tr>
                        <td class="main-topic">I17 ท่านเคยถูกผู้บังคับบัญชาสั่งการให้ทำในสิ่งที่ไม่ถูกต้อง หรือมีความเสี่ยงต่อการทุจริต มากน้อยเพียงใด <span id="ans_i1701_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1701" id="ans_i1701_id1" class="custom-control-input" data-error="#ans_i1701_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1701_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1701" id="ans_i1701_id2" class="custom-control-input" data-error="#ans_i1701_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1701_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1701" id="ans_i1701_id3" class="custom-control-input" data-error="#ans_i1701_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1701_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1701" id="ans_i1701_id4" class="custom-control-input" data-error="#ans_i1701_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1701_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- Begin:>> I17 -->

                  <!-- Begin:>> I8 -->
                      <tr>
                        <td colspan="5" class="main-topic">I18 การบริหารงานบุคคลของหน่วยงานของท่าน  มีลักษณะดังต่อไปนี้ มากน้อยเพียงใด</td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ถูกแทรกแซงจากผู้มีอำนาจ <span id="ans_i1801_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1801" id="ans_i1801_id1" class="custom-control-input" data-error="#ans_i1801_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1801_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1801" id="ans_i1801_id2" class="custom-control-input" data-error="#ans_i1801_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1801_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1801" id="ans_i1801_id3" class="custom-control-input" data-error="#ans_i1801_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1801_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1801" id="ans_i1801_id4" class="custom-control-input" data-error="#ans_i1801_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1801_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- มีการซื้อขายตำแหน่ง <span id="ans_i1802_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1802" id="ans_i1802_id1" class="custom-control-input" data-error="#ans_i1802_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1802_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1802" id="ans_i1802_id2" class="custom-control-input" data-error="#ans_i1802_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1802_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1802" id="ans_i1802_id3" class="custom-control-input" data-error="#ans_i1802_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1802_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1802" id="ans_i1802_id4" class="custom-control-input" data-error="#ans_i1802_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1802_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- เอื้อประโยชน์ให้กลุ่มหรือพวกพ้อง <span id="ans_i1803_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1803" id="ans_i1803_id1" class="custom-control-input" data-error="#ans_i1803_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1803_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1803" id="ans_i1803_id2" class="custom-control-input" data-error="#ans_i1803_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1803_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1803" id="ans_i1803_id3" class="custom-control-input" data-error="#ans_i1803_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1803_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1803" id="ans_i1803_id4" class="custom-control-input" data-error="#ans_i1803_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1803_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I18 -->

              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->

        <!-- ส่วนที่ 4  -->
        <div class="row mt-3">
          <div class="alert alert-dismissible alert-info col-sm-12">
            <strong>ตัวชี้วัดที่ 4 การใช้ทรัพย์สินของราชการ</strong>
          </div>
        </div>

        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>

                  <!-- Begin:>> I19 -->

                      <tr>
                        <td class="main-topic">I19 บุคลากรในหน่วยงานของท่าน มีการเอาทรัพย์สินของราชการ ไปเป็นของส่วนตัว หรือนำไปให้กลุ่มหรือพวกพ้อง มากน้อยเพียงใด <span id="ans_i1901_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1901" id="ans_i1901_id1" class="custom-control-input" data-error="#ans_i1901_Error" value="100" />
                            <label class="custom-control-label" for="ans_i1901_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1901" id="ans_i1901_id2" class="custom-control-input" data-error="#ans_i1901_Error" value="67" />
                            <label class="custom-control-label" for="ans_i1901_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1901" id="ans_i1901_id3" class="custom-control-input" data-error="#ans_i1901_Error" value="33" />
                            <label class="custom-control-label" for="ans_i1901_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i1901" id="ans_i1901_id4" class="custom-control-input" data-error="#ans_i1901_Error" value="0" />
                            <label class="custom-control-label" for="ans_i1901_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I19 -->

                  <!-- Begin:>> I20 -->

                      <tr>
                        <td class="main-topic">I20 ขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการ ไปใช้ปฏิบัติงานในหน่วยงานของท่าน มีความสะดวกมากน้อยเพียงใด <span id="ans_i2001_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2001" id="ans_i2001_id1" class="custom-control-input" data-error="#ans_i2001_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2001_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2001" id="ans_i2001_id2" class="custom-control-input" data-error="#ans_i2001_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2001_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2001" id="ans_i2001_id3" class="custom-control-input" data-error="#ans_i2001_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2001_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2001" id="ans_i2001_id4" class="custom-control-input" data-error="#ans_i2001_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2001_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- End:>> I20 -->

                  <!-- Begin:>> I21 -->

                      <tr>
                        <td class="main-topic">I21 ถ้าต้องมีการขอยืมทรัพย์สินของราชการ ไปใช้ปฏิบัติงาน บุคลากรในหน่วยงานของท่าน  มีการขออนุญาตอย่างถูกต้อง มากน้อยเพียงใด <span id="ans_i2101_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2101" id="ans_i2101_id1" class="custom-control-input" data-error="#ans_i2101_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2101_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2101" id="ans_i2101_id2" class="custom-control-input" data-error="#ans_i2101_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2101_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2101" id="ans_i2101_id3" class="custom-control-input" data-error="#ans_i2101_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2101_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2101" id="ans_i2101_id4" class="custom-control-input" data-error="#ans_i2101_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2101_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I21 -->

                  <!-- Begin:>> I22 -->

                      <tr>
                        <td class="main-topic">I22 บุคคลภายนอกหรือภาคเอกชน มีการนำทรัพย์สินของราชการไปใช้ โดยไม่ได้ขออนุญาตอย่างถูกต้อง จากหน่วยงานของท่าน มากน้อยเพียงใด <span id="ans_i2201_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2201" id="ans_i2201_id1" class="custom-control-input" data-error="#ans_i2201_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2201_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2201" id="ans_i2201_id2" class="custom-control-input" data-error="#ans_i2201_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2201_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2201" id="ans_i2201_id3" class="custom-control-input" data-error="#ans_i2201_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2201_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2201" id="ans_i2201_id4" class="custom-control-input" data-error="#ans_i2201_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2201_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- End:>> I22 -->

                  <!-- Begin:>> I23 -->

                      <tr>
                        <td class="main-topic">I23 ท่านรู้แนวปฏิบัติของหน่วยงานของท่าน เกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง มากน้อยเพียงใด <span id="ans_i2301_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2301" id="ans_i2301_id1" class="custom-control-input" data-error="#ans_i2301_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2301_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2301" id="ans_i2301_id2" class="custom-control-input" data-error="#ans_i2301_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2301_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2301" id="ans_i2301_id3" class="custom-control-input" data-error="#ans_i2301_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2301_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2301" id="ans_i2301_id4" class="custom-control-input" data-error="#ans_i2301_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2301_id4"></label>
                          </div>
                        </td>
                      </tr>


                  <!-- End:>> I23 -->

                  <!-- Begin:>> I24 -->

                      <tr>
                        <td class="main-topic">I24 หน่วยงานของท่าน มีการกำกับดูแลและตรวจสอบการใช้ทรัพย์สินของราชการ เพื่อป้องกันไม่ให้มีการนำไปใช้ประโยชน์ส่วนตัว กลุ่ม หรือพวกพ้อง มากน้อยเพียงใด <span id="ans_i2401_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2401" id="ans_i2401_id1" class="custom-control-input" data-error="#ans_i2401_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2401_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2401" id="ans_i2401_id2" class="custom-control-input" data-error="#ans_i2401_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2401_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2401" id="ans_i2401_id3" class="custom-control-input" data-error="#ans_i2401_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2401_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2401" id="ans_i2401_id4" class="custom-control-input" data-error="#ans_i2401_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2401_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I24 -->

              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->



        <!-- ส่วนที่ 5  -->
        <div class="row mt-3">
          <div class="alert alert-dismissible alert-info col-sm-12">
            <strong>ตัวชี้วัดที่ 5 การแก้ไขปัญหาการทุจริต</strong>
          </div>
        </div>

        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>

                  <!-- Begin:>> I25 -->

                      <tr>
                        <td class="main-topic">I25 ผู้บริหารสูงสุดของหน่วยงานของท่าน ให้ความสำคัญ กับการต่อต้านการทุจริต มากน้อยเพียงใด <span id="ans_i2501_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2501" id="ans_i2501_id1" class="custom-control-input" data-error="#ans_i2501_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2501_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2501" id="ans_i2501_id2" class="custom-control-input" data-error="#ans_i2501_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2501_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2501" id="ans_i2501_id3" class="custom-control-input" data-error="#ans_i2501_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2501_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2501" id="ans_i2501_id4" class="custom-control-input" data-error="#ans_i2501_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2501_id4"></label>
                          </div>
                        </td>
                      </tr>

                  <!-- End:>> I25 -->
              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->


        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="2">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มี</th>
                  <th class="text-center align-middle" style="width:8%" >ไม่มี</th>
                </tr>
              </thead>
              <tbody>

                  <!-- Begin:>> I26 -->
                  <tr>
                        <td colspan="5" class="main-topic">I26 หน่วยงานของท่าน มีการดำเนินการ ดังต่อไปนี้ หรือไม่</td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ทบทวนนโยบายหรือมาตรการป้องกันการทุจริตในหน่วยงานให้มีประสิทธิภาพ <span id="ans_i2601_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2601" id="ans_i2601_id1" class="custom-control-input" data-error="#ans_i2601_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2601_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2601" id="ans_i2601_id2" class="custom-control-input" data-error="#ans_i2601_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2601_id2"></label>
                          </div>
                        </td>

                      </tr>
                      <tr>
                        <td>&nbsp;- จัดทำแผนงานด้านการป้องกันและปราบปรามการทุจริตของหน่วยงาน <span id="ans_i2602_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2602" id="ans_i2602_id1" class="custom-control-input" data-error="#ans_i2602_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2602_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2602" id="ans_i2602_id2" class="custom-control-input" data-error="#ans_i2602_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2602_id2"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I26 -->

              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->



        <div class="form-row is-stop">
          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr >
                  <th class="text-center align-middle" rowspan="2" >ประเด็นการประเมิน</th>
                  <th class="text-center align-middle col-bg-gray" colspan="4">ระดับ</th>
                </tr>

                <tr >
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >น้อยที่สุดหรือไม่มีเลย</th>
                  <th class="text-center align-middle" style="width:8%" >น้อย</th>
                  <th class="text-center align-middle col-bg-gray" style="width:8%" >มาก</th>
                  <th class="text-center align-middle" style="width:8%" >มากที่สุด</th>
                </tr>
              </thead>
              <tbody>

                  <!-- Begin:>> I27 -->

                      <tr>
                        <td class="main-topic">I27 ปัญหาการทุจริตในหน่วยงานของท่าน ได้รับการแก้ไข มากน้อยเพียงใด <span id="ans_i2701_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2701" id="ans_i2701_id1" class="custom-control-input" data-error="#ans_i2701_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2701_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2701" id="ans_i2701_id2" class="custom-control-input" data-error="#ans_i2701_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2701_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2701" id="ans_i2701_id3" class="custom-control-input" data-error="#ans_i2701_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2701_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2701" id="ans_i2701_id4" class="custom-control-input" data-error="#ans_i2701_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2701_id4"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="5" class="remark-title">หมายเหตุ: หากท่านเห็นว่าหน่วยงานของท่านไม่มีปัญหาการทุจริตให้ตอบ “มากที่สุด”</td>
                      </tr>
                  <!-- End:>> I27 -->

                  <!-- Begin:>> I28 -->

                      <tr>
                        <td colspan="5" class="main-topic">
                          I28 หน่วยงานของท่าน มีการดำเนินการดังต่อไปนี้  ต่อการทุจริตในหน่วยงาน มากน้อยเพียงใด
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- เผ้าระวังการทุจริต <span id="ans_i2801_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2801" id="ans_i2801_id1" class="custom-control-input" data-error="#ans_i2801_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2801_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2801" id="ans_i2801_id2" class="custom-control-input" data-error="#ans_i2801_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2801_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2801" id="ans_i2801_id3" class="custom-control-input" data-error="#ans_i2801_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2801_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2801" id="ans_i2801_id4" class="custom-control-input" data-error="#ans_i2801_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2801_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ตรวจสอบการทุจริต <span id="ans_i2802_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2802" id="ans_i2802_id1" class="custom-control-input" data-error="#ans_i2802_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2802_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2802" id="ans_i2802_id2" class="custom-control-input" data-error="#ans_i2802_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2802_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2802" id="ans_i2802_id3" class="custom-control-input" data-error="#ans_i2802_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2802_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2802" id="ans_i2802_id4" class="custom-control-input" data-error="#ans_i2802_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2802_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;- ลงโทษทางวินัย เมื่อมีการทุจริต <span id="ans_i2803_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2803" id="ans_i2803_id1" class="custom-control-input" data-error="#ans_i2803_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2803_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2803" id="ans_i2803_id2" class="custom-control-input" data-error="#ans_i2803_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2803_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2803" id="ans_i2803_id3" class="custom-control-input" data-error="#ans_i2803_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2803_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2803" id="ans_i2803_id4" class="custom-control-input" data-error="#ans_i2803_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2803_id4"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="5" class="remark-title">หมายเหตุ: หากหน่วยงานของท่านไม่มีการทุจริต จึงทำให้ไม่มีการลงโทษทางวินัย ให้ตอบ "มากที่สุด"</td>
                      </tr>


                  <!-- End:>> I28 -->

                  <!-- Begin:>> I29 -->

                      <tr>
                        <td class="main-topic">I29 หน่วยงานของท่าน มีการนำผลการตรวจสอบของฝ่ายตรวจสอบ ทั้งภายในและภายนอกหน่วยงานไปปรับปรุงการทำงาน เพื่อป้องกันการทุจริตในหน่วยงาน มากน้อยเพียงใด <span id="ans_i2901_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2901" id="ans_i2901_id1" class="custom-control-input" data-error="#ans_i2901_Error" value="0" />
                            <label class="custom-control-label" for="ans_i2901_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2901" id="ans_i2901_id2" class="custom-control-input" data-error="#ans_i2901_Error" value="33" />
                            <label class="custom-control-label" for="ans_i2901_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2901" id="ans_i2901_id3" class="custom-control-input" data-error="#ans_i2901_Error" value="67" />
                            <label class="custom-control-label" for="ans_i2901_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i2901" id="ans_i2901_id4" class="custom-control-input" data-error="#ans_i2901_Error" value="100" />
                            <label class="custom-control-label" for="ans_i2901_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="5" class="remark-title">หมายเหตุ: ฝ่ายตรวจสอบภายใน หมายถึง ส่วนงานตรวจสอบภายในของหน่วยงาน ฝ่ายตรวจสอบภายนอก หมายถึง หน่วยงานที่มีอำนาจหน้าที่ตรวจสอบการดำเนินงานของหน่วยงานภาครัฐ เช่น สำนักงานการตรวจเงินแผ่นดิน สำนักงาน ป.ป.ช. สำนักงาน ป.ป.ท. เป็นต้น</td>
                      </tr>

                  <!-- End:>> I29 -->

                  <!-- Begin:>> I30 -->
                      <tr>
                        <td colspan="5" class="main-topic">
                          I30 หากท่านพบเห็นแนวโน้มการทุจริตที่จะเกิดขึ้นในหน่วยงานของท่าน ท่านมีความคิดเห็นต่อประเด็นดังต่อไปนี้ อย่างไร
                        </td>
                      </tr>
                      <tr>
                        <td >&nbsp;- สามารถร้องเรียนและส่งหลักฐานได้อย่างสะดวก <span id="ans_i3001_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3001" id="ans_i3001_id1" class="custom-control-input" data-error="#ans_i3001_Error" value="0" />
                            <label class="custom-control-label" for="ans_i3001_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3001" id="ans_i3001_id2" class="custom-control-input" data-error="#ans_i3001_Error" value="33" />
                            <label class="custom-control-label" for="ans_i3001_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3001" id="ans_i3001_id3" class="custom-control-input" data-error="#ans_i3001_Error" value="67" />
                            <label class="custom-control-label" for="ans_i3001_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3001" id="ans_i3001_id4" class="custom-control-input" data-error="#ans_i3001_Error" value="100" />
                            <label class="custom-control-label" for="ans_i3001_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td >&nbsp;- สามารถติดตามผลการร้องเรียนได้ <span id="ans_i3002_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3002" id="ans_i3002_id1" class="custom-control-input" data-error="#ans_i3002_Error" value="0" />
                            <label class="custom-control-label" for="ans_i3002_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3002" id="ans_i3002_id2" class="custom-control-input" data-error="#ans_i3002_Error" value="33" />
                            <label class="custom-control-label" for="ans_i3002_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3002" id="ans_i3002_id3" class="custom-control-input" data-error="#ans_i3002_Error" value="67" />
                            <label class="custom-control-label" for="ans_i3002_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3002" id="ans_i3002_id4" class="custom-control-input" data-error="#ans_i3002_Error" value="100" />
                            <label class="custom-control-label" for="ans_i3002_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td >&nbsp;- มั่นใจว่าจะมีการดำเนินการอย่างตรงไปตรงมา <span id="ans_i3003_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3003" id="ans_i3003_id1" class="custom-control-input" data-error="#ans_i3003_Error" value="0" />
                            <label class="custom-control-label" for="ans_i3003_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3003" id="ans_i3003_id2" class="custom-control-input" data-error="#ans_i3003_Error" value="33" />
                            <label class="custom-control-label" for="ans_i3003_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3003" id="ans_i3003_id3" class="custom-control-input" data-error="#ans_i3003_Error" value="67" />
                            <label class="custom-control-label" for="ans_i3003_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3003" id="ans_i3003_id4" class="custom-control-input" data-error="#ans_i3003_Error" value="100" />
                            <label class="custom-control-label" for="ans_i3003_id4"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td >&nbsp;- มั่นใจว่าจะปลอดภัยและไม่มีผลกระทบต่อตนเอง <span id="ans_i3004_Error" ></span></td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3004" id="ans_i3004_id1" class="custom-control-input" data-error="#ans_i3004_Error" value="0" />
                            <label class="custom-control-label" for="ans_i3004_id1"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3004" id="ans_i3004_id2" class="custom-control-input" data-error="#ans_i3004_Error" value="33" />
                            <label class="custom-control-label" for="ans_i3004_id2"></label>
                          </div>
                        </td>
                        <td class="align-middle col-bg-gray">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3004" id="ans_i3004_id3" class="custom-control-input" data-error="#ans_i3004_Error" value="67" />
                            <label class="custom-control-label" for="ans_i3004_id3"></label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="custom-control custom-radio ml-2">
                            <input type="radio" name="ans_i3004" id="ans_i3004_id4" class="custom-control-input" data-error="#ans_i3004_Error" value="100" />
                            <label class="custom-control-label" for="ans_i3004_id4"></label>
                          </div>
                        </td>
                      </tr>
                  <!-- End:>> I30 -->

              </tbody>
            </table>

          </div> <!-- /.table-responsive -->
        </div>  <!-- /.form-row -->

          <div id="secsubmit" class="section-box" >
            <!-- ### Submit ### -->
                <div class="row alert alert-primary">
                      <div class="col-sm-12 text-center">
                        <button type="submit" id="inputSave" name="inputSave" class="btn btn-primary" >บันทึกแบบสอบถาม</button>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                      </div>
                </div>
          </div>


      </form>
      <!-- /#FormIIT -->

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


    <script>
      var base_url = '<?php echo base_url(); ?>';
      console.log('JS: base_url = '+ base_url);

      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>



  <script language="javascript">
    $(document).ready(function(){

        $.extend( $.validator.messages, {
          required: "โปรดระบุ",
          remote: "โปรดแก้ไขให้ถูกต้อง",
          email: "โปรดระบุที่อยู่อีเมล์ที่ถูกต้อง",
          url: "โปรดระบุ URL ที่ถูกต้อง",
          date: "โปรดระบุวันที่ ที่ถูกต้อง",
          dateISO: "โปรดระบุวันที่ ที่ถูกต้อง (ระบบ ISO).",
          number: "โปรดระบุทศนิยมที่ถูกต้อง",
          digits: "โปรดระบุจำนวนเต็มที่ถูกต้อง",
          creditcard: "โปรดระบุรหัสบัตรเครดิตที่ถูกต้อง",
          equalTo: "โปรดระบุค่าเดิมอีกครั้ง",
          extension: "โปรดระบุค่าที่มีส่วนขยายที่ถูกต้อง",
          maxlength: $.validator.format( "โปรดอย่าระบุค่าที่ยาวกว่า {0} อักขระ" ),
          minlength: $.validator.format( "โปรดอย่าระบุค่าที่สั้นกว่า {0} อักขระ" ),
          rangelength: $.validator.format( "โปรดอย่าระบุค่าความยาวระหว่าง {0} ถึง {1} อักขระ" ),
          range: $.validator.format( "โปรดระบุค่าระหว่าง {0} และ {1}" ),
          max: $.validator.format( "โปรดระบุค่าน้อยกว่าหรือเท่ากับ {0}" ),
          min: $.validator.format( "โปรดระบุค่ามากกว่าหรือเท่ากับ {0}" )
        } );




        $("#FormIIT").validate({

          errorClass: 'custom-error',
          rules: {

              ans_i101 : "required",
              ans_i102 : "required",
              ans_i201 : "required",
              ans_i301 : "required",
              ans_i302 : "required",
              ans_i303 : "required",
              ans_i401 : "required",
              ans_i402 : "required",
              ans_i403 : "required",
              ans_i501 : "required",
              ans_i502 : "required",
              ans_i503 : "required",
              ans_i601 : "required",
              ans_i602 : "required",
              ans_i603 : "required",
              ans_i701 : "required",
              ans_i801 : "required",
              ans_i802 : "required",
              ans_i901 : "required",
              ans_i1001 : "required",
              ans_i1101 : "required",
              ans_i1102 : "required",
              ans_i1201 : "required",
              ans_i1202 : "required",
              ans_i1203 : "required",
              ans_i1301 : "required",
              ans_i1401 : "required",
              ans_i1501 : "required",
              ans_i1601 : "required",
              ans_i1701 : "required",
              ans_i1801 : "required",
              ans_i1802 : "required",
              ans_i1803 : "required",
              ans_i1901 : "required",
              ans_i2001 : "required",
              ans_i2101 : "required",
              ans_i2201 : "required",
              ans_i2301 : "required",
              ans_i2401 : "required",
              ans_i2501 : "required",
              ans_i2601 : "required",
              ans_i2602 : "required",
              ans_i2701 : "required",
              ans_i2801 : "required",
              ans_i2802 : "required",
              ans_i2803 : "required",
              ans_i2901 : "required",
              ans_i3001 : "required",
              ans_i3002 : "required",
              ans_i3003 : "required",
              ans_i3004 : "required"

          },
          messages:{

          },
          errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            console.log(placement);
            if (placement) {
              $(placement).append(error)
            } else {
              error.insertAfter(element);
            }
          }
        });





    });


  </script>



</body>
</html>


