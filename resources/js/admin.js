
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
// $(document).ready(function() {
//     // Данный механизм устанавливает атрибут checked в нашем чекбоксе, где срабатывает условие для самого чекбокса.
//     $('input[type="checkbox"]' ).on( "click", function() {
//         if($(this).is(":checked")) {
//             $(this).attr('cheked', 'cheked');
//         } else {
//             $(this).removeAttr('cheked', 'cheked');
//         }
//     });

//     // Механизм который отвечает за отключение и включения ввода информации в поле input=text
//     $('#checkbox').on('click', function(event) {
//         if($('#checkbox').is(':checked')) {
//             $('.box').find('.discount').attr('disabled', 'disabled');
//         } else {
//             $('.box').find('.discount').removeAttr('disabled');
//         }
//     });
// });
var checkboxValues = {};
$(":checkbox").each(function(){
  checkboxValues[this.id] = this.checked;
});
$.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })

function repopulateCheckboxes(){
    var checkboxValues = $.cookie('checkboxValues');
    if(checkboxValues){
      Object.keys(checkboxValues).forEach(function(element) {
        var checked = checkboxValues[element];
        $("#" + element).prop('checked', checked);
      });
    }
  }
console.log('444')