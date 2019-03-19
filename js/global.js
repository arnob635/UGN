

function validateForm(){

  var name = document.forms["form"]["name"].value;
  var password = document.forms["form"]["password"].value;
  //var name = document.forms["form"]["name"].value;
  //var re_password = document.forms["form"]["re-type password"].value;
  //var gender = document.forms["form"]["gender"].value;

  //Username cannot be empty adn cannot contain whitespaces
  if(name==""){
    alert("Band name must be filled out");
    return false;
  }

  /*for (var i=0, len = username.length; i<len; ++i) {
  if (username.charAt(i) === ' ') {
        alert('Username cannot have whitespaces!');
        return false;
    }
  }*/

  /*
  //Name cannot be empty
  if(name==""){
    alert("Name must be filled out");
    return false;
  }
*/

  //Password cannot be empty and password length is between 8-32 characters
  if(password==""){
    alert("Password must be filled out");
    return false;
  }

  if(password.length>=8 && password.length<=32){
    return true;
  }
  else {
    alert("Password length must be between 8-32 characters!");
    return false;
  }

  // Gender has to be selected
  if(gender == "male" || gender == "female" || gender == "other"  ){
    return true;
  }
  else {
    alert("Gender must be selected!");
    return false;
  }

}





(function ($) {
    'use strict';
    /*==================================================================
        [ Daterangepicker ]*/
    try {
        $('.js-datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoUpdateInput": false,
            locale: {
                format: 'DD/MM/YYYY'
            },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click',function(){
            isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker',function(ev, picker){
            isClick = 0;
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click',function(e){
            e.stopPropagation();

            if(isClick === 1) isClick = 0;
            else if(isClick === 0) isClick = 1;

            if (isClick === 1) {
                myCalendar.focus();
            }
        });

        $(myCalendar).on('click',function(e){
            e.stopPropagation();
            isClick = 1;
        });

        $('.daterangepicker').on('click',function(e){
            e.stopPropagation();
        });


    } catch(er) {console.log(er);}
    /*[ Select 2 Config ]
        ===========================================================*/

    try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
            var that = $(this);
            var selectBox = that.find('select');
            var selectDropdown = that.find('.select-dropdown');
            selectBox.select2({
                dropdownParent: selectDropdown
            });
        });

    } catch (err) {
        console.log(err);
    }


})(jQuery);
