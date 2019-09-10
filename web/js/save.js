$(function(){
    //SAVE
    $('#saveCards').on('click', function ()
    {
        let saveCards ={},//object with all the data
            arrayBoxId = [];//array of box's id

        //save box's id in arrayBoxId
        $('div .card').each(function()
        {
            if(typeof $(this).data('id') !== "undefined" )
            {
                arrayBoxId[$(this).attr('id')] = $(this).data('id');
            }

        });
        //save custom's events
        let eventFeatures ={};

        $('.event label').each(function() {
            eventFeatures[$(this).data('id')] = {
                "id": $(this).data('id'),
                "color": $(this).css('background-color'),
                "text" : $(this).next().attr('placeholder')
            };
        });


        let saveName = $('#save-name').val() || getData();
            saveCards.events = eventFeatures;
            saveCards.divs = arrayBoxId;

        saveCards = JSON.stringify(saveCards);
        $("#ModalSave").modal('hide');
        $.ajax({
            url: "/site/save",
            data: {"saveCards": saveCards, "saveName": saveName},
            type: 'post',
            success: function(res)
            {

            },
            error: function()
            {
                alert('Ошибка');
            }
        });
    });
});
