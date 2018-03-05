/* toDoScript.js */
/*** To Do List Script ***/


$(function(){
    
   $('#toDoList ul').sortable({
       items: "li:not('.listTitle, .addItems')",
       connectWith: "ul",
       dropOnEmpty: true,
       placeholder: "emptySpace"
   });
    
    $('input').keydown(function(e){
        if(e.keyCode == 13/*keycode for return key*/) {
            var item = $(this).val();
            $(this).parent().parent().append('<li>' + item + '</li>');
            $(this).val("");/*replace value with empty str*/
        }
    });
    
    $('#trash').droppable({
        drop: function( event, ui ) {
            ui.draggable.remove();
        }
    });    
});