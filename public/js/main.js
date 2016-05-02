$(document).ready(function(){
    var i = 0;

    $(document).on('click','.addorder',function(e){
       e.preventDefault();
       i++;
       console.log(i);
       var input = '<div class="orderbox"><h6>Order ' + i + '</h6>' + '<div class="input-field">' + '<input placeholder="Ordernummer" id="order-' + i + '"' + 'type="text" class="validate" name="orders[' + i + '][ordernummer]">' + '</div>' + '</div>' + '<button class="btn waves-effect default #000000 addarticle">Lägg till artikel<i class="material-icons right">add</i></button>';
    //    $('#bookingform').append(input);
        $(input).insertBefore(this);

        $('.bookingbtn').removeClass('hide');
        $('.bookingbtn').addClass('show');

        // $(document).on('click','.addarticle',function(e){
        //     i = ;
        // });

        return false;
    });

    var articleCount = 1;

    // $(document).one('click','.addarticle',function(e){
    //     i--;
    //     console.log(i);
    // });

    $(document).on('click','.addarticle',function(e){
        e.preventDefault();
        console.log(i);
        var articleInput = '<div class="articlebox"><h6 class="article">Artikel ' + articleCount + '</h6>' + '<div class="input-field">' + '<input placeholder="Artikelnummer" id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + ']">' + '</div>' + '<div class="input-field">' + '<input placeholder="Vikt" id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][weight]">' + '</div>' + '<div class="input-field">' + '<input placeholder="Längd" id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][lenght]">' + '</div>' + '<div class="input-field">' + '<input placeholder="Position" id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][position]">' + '</div>' + '</div>';
        $(articleInput).insertBefore(this);
        articleCount++;
        console.log();

        $(document).on('click','.addorder',function(e){
            articleCount = 1;
        });

        return false;
    });

    // $(document).on('click','.orderdone',function(e){
    //     e.preventDefault();
    //     i++;
    // });

    // $('.addarticle').click(function(e) {
    //    e.preventDefault();
    //    var articleInput = '<h6 class="article">Artikel ' + articleCount + '</h6>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="supplier_id">' + '<label for="article-' + articleCount + '">' + 'Artikelnummer</label>' + '</div>' + '<button class="btn waves-effect default #000000 addarticle">Lägg till artikel</button><br>';
    //    $(articleInput).insertBefore(this);
    //    articleCount++;
    // });

    /*Validation*/

    $("#create").validate({
            rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
                minlength: 5
            },
         },
         messages: {
            email: {
                required: 'Ange en email adress',
                email: 'Ange en giltig email adress (ex: mail@mail.com)'
            },
            name:{
                required: "Fyll i Leverantör",
                minlength: "Fyll i minst 5 karaktärer"
            },
         }
    });

    $("#createUser").validate({
            rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            password_confirmation: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
         },
         messages: {
            email: {
                required: 'Ange en email adress',
                email: 'Ange en giltig email adress (ex: mail@mail.com)'
            },
            password: {
                required: "Detta fältet är obligatoriskt",
                minlength: "Fyll i minst 5 karaktärer"
            },
            password_confirmation: {
                required: "Upprepa lösenord",
                minlength: "Fyll i minst 5 karaktärer",
                equalTo: ""
            },
         }
    });

    $("#login").validate({
            rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
         },
         messages: {
            email: {
                required: 'Vänligen ange en email adress',
                email: 'Vänligen ange en giltig email adress (ex: mail@mail.com)'
            },
            password: {
                required: "Detta fältet är obligatoriskt",
                minlength: "Fyll i minst 5 karaktärer"
            },
         }
    });

    $("#newbookingform").validate({
            rules: {
            name: {
                required: true,
            },
         },
         messages: {
            email: {
                required: 'Ange en email adress',
            },
            name:{
                required: "Bifoga pdf"
            },
         }
    });

});
