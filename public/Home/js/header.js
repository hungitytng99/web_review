//prevent scroll when open mobile nav
let mobileNavHandle = $('#mobile-nav-check');
mobileNavHandle.prop('checked',false);
mobileNavHandle.change(() => {
    if(mobileNavHandle.prop('checked')){
        $('body').css('overflow','hidden');
    }else{
        $('body').css('overflow','scroll');
    }
})