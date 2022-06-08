$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("body").on('click', "#register-customer", function(){
        alert('success');
    });

    $("body").on('click', ".menu-link", function(){
        // $('li.menu-link.active').removeClass("active");
        // $(this).addClass("active");
        alert('true');
    });

};

