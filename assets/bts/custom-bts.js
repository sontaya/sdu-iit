

var CurrentSet = 1;

$(document).ready(function() {

  //-- init
  $('.has-join').hide();


  $(document).on('click', '.information .sets-answer', function () {
    var question = $(this).closest('.information-wrapper').data('question');
    $('#info' + question).val($(this).data('value'));
    console.log('.information .sets-answer : ' + $(this).data('value'));

    if($('#info7').val() == "1"){
      $('.has-join').fadeIn('slow');
    }else{
      $('.has-join').hide();
    }
  });



    $(document).on('click', '.decision .sets-answer', function () {
        var question = $(this).closest('.question-wrapper').data('question');
        $('#a' + question).val($(this).data('value'));
        // console.log('.decision .sets-answer');
    });

    $(document).on('click', '.decision .caption.left', function () {
        $(this).next().children('.option').removeClass('active');
        $(this).next().children('.option.agree.max').addClass('active');
        console.log('.decision .caption.left');
    });

    $(document).on('click', '.decision .caption.right', function () {
        $(this).prev().children('.option').removeClass('active');
        $(this).prev().children('.option.disagree.max').addClass('active');
        console.log('.decision .caption.right');
    });


});
