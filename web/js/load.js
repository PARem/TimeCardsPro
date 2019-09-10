$(function () {

    let download = $('#download');//load data

    if(download.data('check')){
        let downloadText  = download.text(),
            downloadData = JSON.parse(downloadText),
            downloadEvents = downloadData.events;

        downloadBox(downloadData);

        for(let key in downloadEvents){
            createEvent(downloadEvents[key].id, downloadEvents[key].color, downloadEvents[key].text);
        }
    }
});

