function preloaderButton(el) {
    el.attr('disabled','disabled')
    icon_origin = el.find('i').addClass('d-none')
    el.append('<div class="spinner-border spinner-btn text-white m-1" role="status"><span class="sr-only">Loading...</span></div>')
}

function preloaderButtonClose(el) {
    icon_origin = el.find('i').removeClass('d-none')
    icon_preloader = el.find('.spinner-btn').remove() 
    el.removeAttr('disabled')   
}
