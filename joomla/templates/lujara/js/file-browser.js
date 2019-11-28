$( document ).ready( function () {
     // Watch for file changes and display file name
    $('input[type=file]').change( function (e) {
        
        e.preventDefault();
        const name = $(this).val().split(/\\|\//).pop();
        const truncated = name.length > 20 
          ? name.substr(name.length - 20) 
          : name;
        
        $(this).parent().find('.file-info').html(truncated);
    });
    // Define buttons
    //const uploadButton = $('.file-browser-btn');
    const fileInfo = $('.bfElemWrap .file-info');
    const realInput = $('.bfElemWrap .file-input');
    // Add click event to custom button
    $('.bfElemWrap').on('click', '.file-browser-btn', function(e) {
        e.preventDefault();
        var inputBtn =  $(this).parents('.bfElemWrap');
       inputBtn.find('input[type=file]').click();
    });

} );
