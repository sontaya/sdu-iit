/*---### PROVINCE / DISTRICT / SUBDISTRICT ###---*/

  function initSubDistrictFilter(obj, district_id, target_value )
  {
    console.log('initSubDistrictFilter | '+ district_id + ' | ' + $('input[name=hid-district]').val() );
    var urlTarget = "http://www.dusit.ac.th/degree/api/DataService/get_subdistrict/"+district_id;
    jQuery.get(urlTarget, function(data, status){
      if(status == "success"){
        $('select[name="'+obj+'"]').empty();
        $('select[name="'+obj+'"]').append('<option></option>');
        $.each(data, function(key, value) {

           var selectDistrictKey = value.SUB_DISTRICT_ID;
          if( value.SUB_DISTRICT_ID == target_value){
            $('select[name="'+obj+'"]').append('<option value="'+ selectDistrictKey +'" selected>'+ value.SUB_DISTRICT_NAME_TH +'</option>');
          }else{
            $('select[name="'+obj+'"]').append('<option value="'+ selectDistrictKey +'">'+ value.SUB_DISTRICT_NAME_TH +'</option>');
          }
        });
      }else{
        $('select[name="'+obj+'"]').empty();
      }
    }, 'json');
  }

  function initDistrictFilter(obj, province_id, target_value )
  {
    console.log('initDistrictFilter | '+ province_id + ' | ' + $('input[name=hid-amphur]').val() );
    var urlTarget = "http://www.dusit.ac.th/degree/api/DataService/get_district/"+province_id;
    jQuery.get(urlTarget, function(data, status){
      if(status == "success"){
        $('select[name="'+obj+'"]').empty();
        $('select[name="'+obj+'"]').append('<option></option>');
        $.each(data, function(key, value) {

          var selectDistrictKey = value.DISTRICT_ID;
          if( value.DISTRICT_ID == target_value){
            $('select[name="'+obj+'"]').append('<option value="'+ selectDistrictKey +'" selected>'+ value.DISTRICT_NAME_TH +'</option>');
          }else{
            $('select[name="'+obj+'"]').append('<option value="'+ selectDistrictKey +'">'+ value.DISTRICT_NAME_TH +'</option>');
          }
        });
      }else{
        $('select[name="'+obj+'"]').empty();
      }
    }, 'json');
  }

  function initProvinceFilter(obj, target_value)
  {

    console.log('initProvinceFilter |');
    var urlTarget = "http://www.dusit.ac.th/degree/api/DataService/get_province/";
    jQuery.get(urlTarget, function(data, status){
      if(status == "success"){
        $('select[name="'+obj+'"]').empty();
        $('select[name="'+obj+'"]').append('<option></option>');
        $.each(data, function(key, value) {

          var selectProvinceKey = value.PROVINCE_ID;
          if( value.PROVINCE_ID == target_value){
            $('select[name="'+obj+'"]').append('<option value="'+ selectProvinceKey +'" selected>['+ value.PROVINCE_ID +'] '+ value.PROVINCE_NAME_TH +'</option>');
          }else{
            $('select[name="'+obj+'"]').append('<option value="'+ selectProvinceKey +'">'+ value.PROVINCE_NAME_TH +'</option>');
          }
        });
      }else{
        $('select[name="'+obj+'"]').empty();
      }
    }, 'json');
  }
