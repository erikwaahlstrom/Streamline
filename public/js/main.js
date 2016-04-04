$(document).ready(function(){
    var i = 1;
    $(document).on('click','.addorder',function(e){
       e.preventDefault();
       console.log(i);
       var input = '<h6 class="order">Order ' + i + '</h6>' + '<div class="input-field">' + '<input id="order-' + i + '"' + 'type="text" class="validate" name="orders[' + i + '][ordernummer]">' + '<label for="order-' + i + '">' + 'Ordernummer</label>' + '</div>' + '<button class="btn waves-effect default #000000 addarticle">Lägg till artikel</button><br>';
    //    $('#bookingform').append(input);
        $(input).insertBefore(this);
        i++;

        $('.bookingbtn').removeClass('hide');
        $('.bookingbtn').addClass('show');

        return false;
    });

    var articleCount = 1;
    // $(document).one('click','.addarticle',function(e){
    //     i--;
    // });

    $(document).on('click','.addarticle',function(e){
        e.preventDefault();
        console.log(i);
        var articleInput = '<h6 class="article">Artikel ' + articleCount + '</h6>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="orders[' + i + '][articles][' + articleCount + ']">' + '<label for="article-' + articleCount + '">' + 'Artikelnummer</label>' + '</div>';
        $(articleInput).insertBefore(this);
        articleCount++;
        console.log();



        $(document).on('click','.addorder',function(e){
            articleCount = 1;
        });

        return false;
    });


    // $('.addarticle').click(function(e) {
    //    e.preventDefault();
    //    var articleInput = '<h6 class="article">Artikel ' + articleCount + '</h6>' + '<div class="input-field">' + '<input id="article-' + articleCount + '"' + 'type="text" class="validate" name="supplier_id">' + '<label for="article-' + articleCount + '">' + 'Artikelnummer</label>' + '</div>' + '<button class="btn waves-effect default #000000 addarticle">Lägg till artikel</button><br>';
    //    $(articleInput).insertBefore(this);
    //    articleCount++;
    // });
});
