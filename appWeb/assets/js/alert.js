/* l'alerte a été trouvée ici : https://bbbootstrap.com/snippets/basic-message-alert-sweat-alerts-42414468*/

(function($) {
    showSwal = function(type) {
    'use strict';
    if (type === 'basic') {
    swal({
    title: 'Read the alert!',
    text: 'Thanks you for your support',
    button: {
    text: "OK",
    value: true,
    visible: true,
    className: "btn btn-primary"
    }
    })
  
    }
    }
  
    })(jQuery);