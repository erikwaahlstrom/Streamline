$(document).ready(function(){
    var i = 0;



    $(document).on('click','.addorder',function(e){
       e.preventDefault();
       i++;
       console.log(i);
       var input = '<div class="orderbox"><h6 class="order">Order ' + i + '</h6>' + '<div class="input-field">' + '<input id="order-' + i + '"' + 'type="text" class="validate" name="orders[' + i + '][ordernummer]">' + '<label for="order-' + i + '">' + 'Ordernummer</label>' + '</div>' + '<button class="btn waves-effect default #000000 addarticle">Lägg till artikel</button></div><br>';
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
        var articleInput = '<h6 class="article">Artikel ' + articleCount + '</h6>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + ']">' + '<label for="article-' + articleCount + '">' + 'Artikelnummer</label>' + '</div>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][weight]">' + '<label for="article-' + articleCount + '">' + 'Vikt</label>' + '</div>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][lenght]">' + '<label for="article-' + articleCount + '">' + 'Längd</label>' + '</div>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + '][position]">' + '<label for="article-' + articleCount + '">' + 'Position</label>' + '</div>';
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
});
