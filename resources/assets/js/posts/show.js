$(document).ready(function() {

    $(".delete-btn").click(function(){               // Lorsqu'on clique sur un objet qui a la classe .delete-btn,
        $(this).siblings(".flash-alert").show();     // On montre son objet fr�re ayant la classe .flash-alert
    });


    $(".hide-alert").click(function(){               // Lorsqu'on clique sur un objet ayant la classe .hide-alert,
        $(".flash-alert").hide();                    // On cache tout objet ayant la classe .flash-alert
    });

});
