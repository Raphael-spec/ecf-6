// $(document).ready(function(){

//     $('[type="search"]').focus(function(){

//         $(this).attr('class','form-control  text-center')

//     });


//     $('[type="search"]').blur(function(){

//         $(this).attr('class','form-control offset-9 col-3 text-center ')

//     });

// })

// $(document).ready(function(){
//     $('[type="search"]').focus(function(){
//         $(this).attr('class', 'form-control col-5 text-center');
//     });
//     $('[type="search"]').blur(function(){
//         $(this).attr('class', 'form-control offset-9 col-3 text-center');
//     });
// });
$(document).ready(function(){
    $('[type="search"]').focus(function(){
        $(this).attr('class', 'form-control text-center');
    });
    $('[type="search"]').blur(function(){
        $(this).attr('class', 'form-control  col-3 offset-9 text-center');
    });
});
