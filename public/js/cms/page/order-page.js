$(document).ready(function () {

    $('#cartNumber').html('0')
    $('.addToCartNumberCheckbox:checked').prop('checked', false)
    $('.addToCartNumberRadio:checked').prop('checked', false)

    //this jquery for increment and decrement add to cart text number for dine-in
    $(".addToCartNumberCheckbox").on('click', function () {
        let num = parseInt($('#cartNumber').html());
        // console.log(num)
        // console.log($('.addToCartNumberCheckbox:checked').is(':checked'))
        if ($('.addToCartNumberCheckbox:checked').is(':checked')) {
            $('#cartNumber').text(++num)
        }else{
            $('#cartNumber').text(--num)
        }
    })


    //this flag for indicate that, once radio button clicked cart text will only increment once
    let flag=0
    //this jquery for increment and decrement add to cart text number for dine-in
    $(".addToCartNumberRadio").on('click', function () {
        let num = parseInt($('#cartNumber').html());
        
        // console.log(num)
        console.log($('.addToCartNumberRadio:checked').is(':checked'))
        if ($('.addToCartNumberRadio:checked').is(':checked') && flag ==0) {
            flag = 1
            $('#cartNumber').text(++num)
        }
    })



});