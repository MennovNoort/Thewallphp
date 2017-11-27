$(document).ready(
    function(){
        $('a').click(function () {
        $('#okok img:last-child').remove();
        var src = $(this).find('img').attr('src');
        $('#okok').append('<img id="theImg" src="' + src + '" />')
        console.log(src);
        });
});
