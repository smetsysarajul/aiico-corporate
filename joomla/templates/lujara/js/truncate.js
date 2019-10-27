$( document ).ready( function () {

    function truncateText(maxLen) {
        return function truncateToNearestSpace(idx, text) {
            // this may chop in the middle of a word
            var truncated = text.substr(0, maxLen);

            if (/[^\s]$/.test(truncated))
                return truncated.replace(/\s[^\s]+$/, " ...");
            else
                return truncated.trim();
        }
    }

    $('.news__excerpt').text(truncateText(150));
} );