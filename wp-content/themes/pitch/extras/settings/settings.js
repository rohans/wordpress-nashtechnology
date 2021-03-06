jQuery( function ( $ ) {
    
    if( typeof $.fn.wpColorPicker != 'undefined'){
        // Use the new color picker
        $('.color-field' ).wpColorPicker();
    }
    else{
        // Use the old
        $( '.colorpicker-wrapper' ).each( function () {
            var $$ = $( this );

            var picker = $.farbtastic( $$.find( '.farbtastic-container' ).hide() );

            picker.linkTo( function ( color ) {
                $$.find( 'input' ).val( color );
                $$.find( '.color-indicator' ).css( 'background', color );
            } );

            picker.setColor( $$.find( 'input' ).val() );

            $$.find( 'input' )
                .focus( function () {
                    $$.find( '.farbtastic-container' ).show()
                } )
                .blur( function () {
                    $$.find( '.farbtastic-container' ).hide()
                } );
        } );
    }
    
    // Handle the media uploader
    $('a.media-upload-button' ).click(function(){
        var $$ = $(this ).closest('td');
        wp.media.editor.open('settings');

        // We want our own insert into post handler
        wp.media.editor.send.attachment = function(props, attachment){
            $$.find('.current .title' ).html(attachment.title);
            $$.find('input[type=hidden]' ).val(attachment.id);
            
            if(typeof attachment.sizes != 'undefined'){
                if(typeof attachment.sizes.thumbnail != 'undefined')
                    $$.find('.current .thumbnail' ).attr('src', attachment.sizes.thumbnail.url).fadeIn();
                else
                    $$.find('.current .thumbnail' ).attr('src', attachment.sizes.full.url).fadeIn();
            }
            else{
                $$.find('.current .thumbnail' ).attr('src', attachment.icon).fadeIn();
            }
        }
        
        return false;
    });
    
    $('.media-field-wrapper' )
        .mouseenter(function(){
            if($(this ).closest('td').find('input[type=hidden]' ).val() != '') $(this ).find('.media-remove-button').fadeIn('fast');
        })
        .mouseleave(function(){
            $(this ).find('.media-remove-button').fadeOut('fast');
        })
    
    $('.media-field-wrapper .current' )
        .mouseenter(function(){
            var t = $(this ).find('.title' );
            if( t.html() != ''){
                t.fadeIn('fast');
            }
        })
        .mouseleave(function(){
            $(this ).find('.title' ).clearQueue().fadeOut('fast');
        })
    
    $('a.media-remove-button' )
        .click(function(){
            var $$ = $(this ).closest('td');
            
            $$.find('.current .title' ).html('');
            $$.find('input[type=hidden]' ).val('');
            $$.find('.current .thumbnail' ).fadeOut('fast');
            $(this ).fadeOut('fast');
        });
    
    // We're going to use jQuery to transform the settings page into a tabbed interface
    var $$ = $( 'form[action="options.php"]' );
    var tabs = $( '<h2></h2>' ).addClass( 'nav-tab-wrapper' ).prependTo( $$ );
    $$.find( 'h3' ).each( function ( i, el ) {
        var h = $( el ).hide();
        var a = $( '<a href="#"></a>' ).addClass( 'nav-tab' ).html( h.html() ).appendTo( tabs );
        if ( i == 0 ) a.addClass( 'nav-tab-active' );

        var table = h.next().hide();
        a.click( function () {
            $$.find( '> table' ).hide();
            table.show();
            tabs.find( 'a' ).removeClass( 'nav-tab-active' );
            a.addClass( 'nav-tab-active' );

            $( '#current-tab-field' ).val( i );
            return false;
        } );

        if ( i == soSettings.tab ) a.click();
    } );
    
    // Autofill
    $('.input-field-select')
        .change(function(){
            var c = $(this ).closest('td' ).find('input');
            c.val($(this ).val());
            $(this ).val('')
        });
    
    setTimeout( function () {
        $( '#setting-updated' ).slideUp();
    }, 5000 );
} );