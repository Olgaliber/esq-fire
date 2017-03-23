jQuery(document).ready(function(){  
    var count = 1;
    jQuery('.thumbnail, .extrastyle_1').each(function(){
            $(this).prepend("<span class='shadowsup'></span>");
    })
});
