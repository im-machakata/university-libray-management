$(function () {
    // prevent form submittion if id is empty
    $('#UpdateRequisition').on('click', function (event) {
        if (!$('#ID').val()) event.preventDefault();
    });

    // register bootstrap tooltips
    $(document).find('[data-bs-toggle=tooltip]').map(function () {
        new bootstrap.Tooltip(this);
    });

    // edit requisition status
    $('.requisition .edit-status').on('click', function (event) {
        event.preventDefault();
        const requisitionCard = $(this).parent().parent().parent().parent();
        $('#Amount').text(requisitionCard.find('.amount').text());
        $('#Reason').text(requisitionCard.find('.reason').text().trim());
        $('#User').text(requisitionCard.find('.user').data('bs-title').trim());
        $('#ID').val(requisitionCard.find('.id').val().trim());
        $('#StatusSubmitted').prop('checked', true);
    })

    // click the ancor tag when .card is clicked
    $('.menu .card').on('click', function (event) {
        if (event.target.nodeName.toLowerCase() == "div") {
            event.preventDefault();

            // navigate to selected page url
            window.location.href = $(this).find('a:first').attr('href');
        }
    });

    // change background color on hover menu card
    $('.menu .card').on('mouseenter', function () {
        $(this).addClass('bg-primary');
        $(this).find('a').addClass('text-white');
    }).on('mouseleave', function () {
        $(this).removeClass('bg-primary');
        $(this).find('a').removeClass('text-white');
    });

    // calculate date differences
    $("#OutFrom, #OutTo").on('change', function () {
        const toDate = $("#OutTo").val();
        const fromDate = $("#OutFrom").val();
        const toggleSubmitButton = (days) => {
            $('#Submit').attr('disabled', (days == 0));
        }

        // do not attempt to calculate date differences when one of the dates if missing
        if (!toDate || !fromDate) {
            toggleSubmitButton(0);
            return
        };

        // Parse the input date string into a Date object
        const dates = [
            new Date(fromDate),
            new Date(toDate),
        ];

        const diffInDays = Math.floor((dates[1] - dates[0]) / (1000 * 60 * 60 * 24));
        toggleSubmitButton(diffInDays);
        $("#Days").val(diffInDays);
    });
});