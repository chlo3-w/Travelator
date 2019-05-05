$(document).ready(function() {
    console.log('load');
    var blogPosts = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('title'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: 'http://localhost/Travelator/api/search.php?query=%QUERY',
            wildcard: '%QUERY'
        }
    });
    $('.typeahead').typeahead(null, {
        name: 'blog-posts',
        display: 'title',
        source: blogPosts
    });
    
    $('.typeahead').on('typeahead:selected', function (evt, item) {
        window.location.href = 'http://localhost/Travelator/index.php/?controller=post&action=read&id=' + item.id;
    });    
});
