$(function () {
    // create unique id
    let  uniqueID = (function() {
        let  id = 0; // This is the private persistent value
        return function() { return id++; };
    })();

    //EVENT
    // text and color from new button
    let  eventColor ='',
        eventText = '',
        eventTime = '';
    // clear the field event name
    $('#button_add_event').click(function()
    {
        $('input[type=text]#recipient-name').val('');
    });
    //create new personal-event
    //get color and text new personal-event, add new button
    $('button#addEvent').on('click', function () {
        //get color, time and text from modal
        eventColor = $("#color1").val();
        eventText = $('input[type=text]#recipient-name').val();
        eventTime = $('input[type=time]').val();
        // add button
        createEvent(uniqueID(), eventColor, eventText, eventTime)

    });

    // data-id and color from new personal-event
    let  dataColor = "",
        dataId = "";

    //get options from divs
    $('div.myWidth2').on('click','label', function()
    {
        dataColor = $(this).css('background-color');   // get color
        dataId = $(this).data('id');   //get data-id
    });

    //clamp tracking shift
    let  shift = false;
    $(window).on('keydown', function(e){
        if(e.keyCode === 16)
        {
            shift = true;
        }
    });

    // tracking is not clamp shift
    $(window).on('keyup', function(e){
        if(e.keyCode === 16)
        {
            shift = false;
        }
    });

    //adding color to the timeBox
    $('div.card').on('click', function () {
        if(shift)
        {
            let  currentElement = $('.myWrap').children().index($(this)) + 1;
            // add color several timeBoxes, when push shift
            $('.myWrap').children().each(function (index)
            {
                if(index < currentElement && !$(this).hasClass('active') && (dataColor !== ""))
                {
                    $(this).css('background-color', dataColor)
                        .data('id', dataId)
                        .addClass('active');
                }
            });
        }else if(dataColor !== "")
        {

            $(this).css('background-color', dataColor)
                .data('id', dataId)
                .addClass('active');
        }
        changeTimeEvent(dataId);
    });

    //remove color square right button mouse
    $('div.card').on('contextmenu', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        $(this).removeAttr('style')
            .removeData('id')
            .removeClass('active');
        changeTimeEvent(id);
    });

    //delete event
    $('div.myWidth2').on('click','button.myClose', function()
    {
        let  dataIdDel = $(this).siblings('.event label').data('id');

        $(this).parents('div.event').remove();  // remove button
        removeColorAndIdDivs(dataIdDel);
    });

    $('#color1').colorPicker(); //connection Color Picker Plugin


});