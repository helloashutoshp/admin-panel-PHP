window.setTimeout(function(){
    $(".hide").fadeTo(500,0).slideUp(500,function(){
        $(this).remove();
    });
},2000);




