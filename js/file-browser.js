$( document ).ready( function () {
    // Define buttons
    const uploadButton = $('.file-browser-btn');
    const fileInfo = $('.file-info');
    const realInput = $('.file-input');

    // Add click event to custom button
    uploadButton.click( function (e) {
        e.preventDefault();
        realInput.click();
    });

    // Watch for file changes and display file name
    realInput.change( function (e) {
        e.preventDefault();
        const name = realInput.val().split(/\\|\//).pop();
        const truncated = name.length > 20 
          ? name.substr(name.length - 20) 
          : name;
        
        fileInfo.html(truncated);
    });
} );