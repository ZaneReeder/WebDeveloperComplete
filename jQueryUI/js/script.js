
// script.js


/*** Draggable ***/
$(function() {
    
    $('.box').draggable();
    $('#box1').draggable( { scroll: true } );
    
    $('#box2').draggable( {axis: 'x'} );
    $('#box3').draggable( {axis: "y"} );
    
    $('#box4').draggable( {containment: ".container"} );
});



/*** Droppable ***/

$(function() {
    
    $('#box1').draggable({ scroll: true, revert: "invalid" });
    $('#box4').draggable({ scroll: true, revert: "valid" });

    $('#droppable').droppable({
        accept: '#box1',
        drop: function() {
            $(this).text("when a box got attitude drop it like its hot.");
        }
    });
    
});


/*** Sortable ***/

$(function () {
    
    $('#sortable').sortable({
        connectWith: "#sortableToo",
        placeholder: "placeholderBox"
    });
    
    $('#sortableToo').sortable({
        connectWith: "#sortable"
    });
    
});

/*** Accordian ***/

$(function() {
    
    $('#accordian').accordian({
        collapsible: true,
        heightStyle: "content"        
    });
});
*/

/*** Datepicker ***/

$(function() {
    
    $('.date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: false,
        changeYear: false,
        numberOfMonths: 2,
        minDate: -1
    });
});