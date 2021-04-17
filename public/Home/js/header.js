//prevent scroll when open mobile nav
let mobileNavControl = $('#mobile-nav-check');
mobileNavControl.prop('checked',false);
mobileNavControl.change(() => {
    if(mobileNavControl.prop('checked')){
        $('body').css('overflow','hidden');
    }else{
        $('body').css('overflow','scroll');
    }
})