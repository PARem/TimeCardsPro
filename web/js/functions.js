//FUNCTION
// function returns a unique number

// function get date
function getData()
{
    let d = new Date(),
        curr_date = d.getDate(),
        curr_month = d.getMonth() + 1,
        curr_year = d.getFullYear();
    return `${curr_year}-${curr_month}-${curr_date}`;

}
//function create new event
function createEvent(id, eventColor, eventText, eventTime) {
    eventTime = eventTime || '0';
    let htmlButton = `
        <div class='row event'>
            <label class='btn btn-secondary info' data-id="${id}" style="background-color:${eventColor}">
                <input type='radio' name='options' autocomplete='off'> 
            </label>    
            <input type='text' class='form-control rounded-0 event-name' placeholder="${eventText}" aria-label='Input group example' aria-describedby='btnGroupAddon'>  
            <input type='text' class='form-control rounded-0 event-time' placeholder="${eventTime}" aria-label='Input group example' aria-describedby='btnGroupAddon'>
            <button type='button' class='btn btn-secondary myClose rounded-right' aria-label='Close'><span>&times;</span></button>
        </div>`;
    $('div.myWidth2').append(htmlButton);
    let countBoxTime = timeConversation(eventTime);
    createTimeCardsFromOneEvent(eventColor, id, countBoxTime);
}

// function create time cards from events
function createTimeCards(){
    let events = $('.event');
    events.each(function(){
        let eventColor = $(this).find('.info').css('background-color'),
            eventId = $(this).find('.info').data('id'),
            eventTime = $(this).find('.event-time').attr('placeholder'),
            countBoxTime = timeConversation(eventTime);
        createTimeCardsFromOneEvent(eventColor, eventId, countBoxTime);
    });
}
// function converts time to minutes
//returns the number of minutes
function timeConversation(time){
    let timeConvert= time.split(':');
    return  Math.round((timeConvert[0]*60 + (+timeConvert[1]))/10);
}
//function create time cards from one event's data
function createTimeCardsFromOneEvent(eventColor, eventId, countBoxTime){
    let divs = $('div.box');
    for(let i = 0, countBox = 0; countBox < countBoxTime; i++){

        if(i === 100) break;

        if(divs.eq(i).data('id') === undefined || divs.eq(i).data('id') === '') {
            divs.eq(i).data('id', eventId)
                .css('background-color', eventColor);
            countBox++;
            }
    }

}
// function change the time of recording when manually marking
function changeTimeEvent(boxId) {
    let time = 0;
    $('div.box').each(function () {
        if($(this).data('id') === boxId){
            time += 10;
        }
        $(`[data-id=${boxId}]`).siblings('.event-time')
                               .attr("placeholder", convertTimeToString(time));
    });

}
//function convert time to string
function convertTimeToString(time) {
    if(time < 60){
        return '00:'+time;
    }
    let hours = Math.floor(time/60);
    return  hours + ':' + ( time - hours*60 === 0? '00' : time - hours*60);
}
//function remove background-color and data-text in div
function removeColorAndIdDivs(dataIdDel) {
    let divs = $('div.box');// divs where need to remove the background-color
    divs.each(function()
    {
        if($(this).data('id') === dataIdDel)
        {
            $(this).removeAttr('style')
                   .removeData('id')
                   .removeClass('active');
        }
    });
}
// get information about type of object
function getClass(obj) {
    return {}.toString.call(obj).slice(8, -1);
}
// download
function downloadBox(data){
    let div = $('div.box'),
        ids = data.divs,
        events = data.events;

    for(let i = 0; i < ids.length; i++){
        if(getClass(ids[i]) === "Number"){
            let ColorBox = events[ids[i]].color;
            div.eq(i).data('id', ids[i]).css('background-color', ColorBox);
        }
    }
}

