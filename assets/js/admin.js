
                        // jQuery.ajax({
                        //     url: ajaxurl,
                        //     type: 'post',
                        //     dataType: 'json',
                        //     data: {
                        //         action: 'wcwsl_licenseverify',
                        //         data: jQuery('input#wcwsl_license').val()
                        //     },
                        //     success: function (response) {

                        //         if (response.status && response.status != 'warning') {

                        //             jQuery('form#wcwsl_licenseform').append('<div class="notice notice-success is-dismissible">' + response.message + '. Page wil reload shorthly.</div>');
                        //             setTimeout(function () {
                        //                 $('.notice.notice-success').slideUp('fast').fadeOut(function () {
                        //                     window.location.reload();
                        //                 });
                        //             }, 2500);
                        //         } else if (response.status == 'warning') {
                        //             jQuery('form#wcwsl_licenseform').append('<div class="notice notice-warning is-dismissible">' + response.message + '</div>');
                        //         } else {
                        //             jQuery('form#wcwsl_licenseform').append('<div class="notice notice-error is-dismissible">' + response.message + '</div>');
                        //         }

                        //     }
                        // });