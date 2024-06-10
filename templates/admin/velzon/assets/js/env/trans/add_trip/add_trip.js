'use strict';

var ExAsUser = (function() {
    const queryString   = window.location.search;
    const urlParams     = new URLSearchParams(queryString);
    const scheduleNumber= urlParams.get('schedule_number');
    const departureDate = urlParams.get('departure_date');

    var MAIN = 'trans/trip/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    
    /**
     * Transaction
     */

    var Transaction = function() {
        addTrigger();        
    }

    var addTrigger = function() {
        if (ExAs.Doc.Exist("#form_tambah")) {            
            ExAs.Validator("#submit", function(isValid) {
                var _input = $("#form_tambah").serializeArray();
                _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_tambah button").attr("disabled", "disabled");

                if (isValid == true) {
                    const url = e3nCeL0t + MoDaD + MAIN + "insert";
                    $.ajax({
                        url: url,
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_tambah button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);

                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            history.back();                                         
                                        }
                                    });
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        },
                        error: function(e) {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_tambah button").removeAttr("disabled");
                }
            });
        }
    };


    var loadData = function(){                 
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "detailschedule",
            method: "POST",
            data: {
                schedule_number: scheduleNumber,
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    if (res.data != null) {           
                        var dataDeparture = res.data;                                     
                        dataDeparture.departure_date = departureDate;
                        displayInfoDeparture(res.data);                        
                    }                                        
                }
            },
            error: function(e) {                
            },
        });
    }      

    return {
        run: function() {
            loadData();
            Transaction();
        },
        refresh: function() { 
        }
    }
})();

ExAs.Dom(ExAsUser.run())

function empty(data) {
    if (typeof(data) == 'number' || typeof(data) == 'boolean') {
        return false;
    }
    if (typeof(data) == 'undefined' || data === null) {
        return true;
    }
    if (typeof(data.length) != 'undefined') {
        return data.length == 0;
    }

    var count = 0;
    for (var i in data) {
        if (data.hasOwnProperty(i)) {
            count++;
        }
    }
    return count == 0;
}

function displayInfoDeparture(dataDeparture) {
    $("#schedule_number").val(dataDeparture.schedule_number);
    $("#type_schedule_bus").val(dataDeparture.type_schedule_bus);
    $("#departure_date").val(dataDeparture.departure_date);
    $("#departure_day").val(dataDeparture.departure_day);
    $("#departure_time").val(dataDeparture.departure_time);
    $("#departure").val(dataDeparture.departure);
    $("#arrival").val(dataDeparture.arrival);

    $("#departure_code").val(dataDeparture.departure_code);
    $("#arrival_code").val(dataDeparture.arrival_code);

    $("#final-departure").html(
        `<tr>
            <td>Kode Keberangkatan</td>
            <td>:</td>
            <td>${dataDeparture.schedule_number}</td>
        </tr>
        <tr>
            <td>Tanggal Berangkat</td>
            <td>:</td>
            <td>${dataDeparture.departure_date}</td>
        </tr>
        <tr>
            <td>Hari Berangkat</td>
            <td>:</td>
            <td>${dataDeparture.departure_day}</td>
        </tr>        
        <tr>
            <td>Jam Berangkat</td>
            <td>:</td>
            <td>${dataDeparture.departure_time}</td>
        </tr>        
        <tr>
            <td>Berangkat dari</td>
            <td>:</td>
            <td>${dataDeparture.departure}</td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>:</td>
            <td>${dataDeparture.arrival}</td>
        </tr>`        
    );
}

$('#return_date').change(function(){
    var weekdays = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY"];
    var date = new Date(this.value);
    $('#return_day').val(weekdays[date.getDay()]);
    
});