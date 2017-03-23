jQuery(document).ready(function($) {
    // parallax slider type switcher
    
    var type_switcher = $('#my-meta-box-parallax-slider-type-switcher'),
        library_video_box = $('#my-meta-box-parallax-slider-media-library-video'),
        youtube_box = $('#my-meta-box-parallax-slider-youtube-video'),
        vimeo_box = $('#my-meta-box-parallax-slider-vimeo-video');
              
    hide_blocks();
    show_block();
          
    $(document).on('change', type_switcher, function(event) {
        hide_blocks();
        show_block();
	});
    
    function show_block(){
        currValue = $('input[type="radio"]:checked', type_switcher).val();
        
        switch (currValue) {
            case 'media-library-video-slide-type':
                library_video_box.css({display:'block'});
                break;
            case 'youtube-video-slide-type':
                youtube_box.css({display:'block'});
                break;
            case 'vimeo-video-slide-type':
                vimeo_box.css({display:'block'});
                break;
        }
    }
    
    function hide_blocks(){
        library_video_box.css({display:'none'});
        youtube_box.css({display:'none'});
        vimeo_box.css({display:'none'});
    }
    
    // wp media
    $('.upload-video-button.button').click(function(e) {
        _this = $(this);
        
        var custom_uploader = wp.media({
            title: 'Select Video',
            library: {
                type: 'video'
            },
            multiple: false
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            _this.siblings('.upload-video-name').val(attachment.filename);
        })
        .open();
    });
});
