
$('input[type="file"][preview-target-id]').on('change', function() {
    var input = $(this)
    if (!window.FileReader) return false // check for browser support
    if (input[0].files && input[0].files[0]) {
        var reader = new FileReader()
        reader.onload = function (e) {
            var target = $('#' + input.attr('preview-target-id'))
            var background_image = 'url(' + e.target.result + ')'
            target.css('background-image', background_image)
            target.parent().show()
        }
        reader.readAsDataURL(input[0].files[0]);
    }
})
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
        
//         reader.onload = function (e) {
//             $('#blah').attr('src', e.target.result);
//         }
        
//         reader.readAsDataURL(input.files[0]);
//     }
// }

// $("#imgInp").change(function(){
//     readURL(this);
// }); 
// function remove_img(){
//     document.getElementById("myFileInputID").value = null;
//  };

console.log('444')