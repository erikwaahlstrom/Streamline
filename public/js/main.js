$(document).ready(function(){
    var i = 1;
   $('.addorder').click(function(e){
       e.preventDefault();
       var input = '<h6 class="order">Order ' + i + '</h6>' + '<div class="input-field">' + '<input id="order-' + i + '"' + 'type="text" class="validate" name="supplier_id">' + '<label for="order-' + i + '">' + 'Ordernummer</label>' + '</div>';
    //    $('#bookingform').append(input);
        $(input).insertBefore(this);
        i++;
   });
});
