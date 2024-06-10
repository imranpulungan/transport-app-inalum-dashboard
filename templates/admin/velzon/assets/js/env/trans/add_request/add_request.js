'use strict';

var ExAsUser = (function() {
    const queryString   = window.location.search;
    const urlParams     = new URLSearchParams(queryString);
    const idTrip        = urlParams.get('id_trip');

    var MAIN = 'trans/request/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var seatAvailable;
    var indexWizard = 0;
    // Form
    $('.f1 fieldset:first').fadeIn('slow');
    
    $('.f1 input[type="text"], .f1 input[type="password"], .f1 input[type="number"], .f1 textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });
    
    // step selanjutnya (ketika klik tombol selanjutnya)
    $('.f1 .btn-next').on('click', function() {        
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        // navigation steps / progress steps
        var current_active_step = $(this).parents('.f1').find('.f1-step.active');
        var progress_line = $(this).parents('.f1').find('.f1-progress-line');
        
        // validasi form
        parent_fieldset.find('input[type="text"], input[type="password"], input[type="number"], textarea').each(function() {
            if( $(this).val() == "" ) {
                $(this).addClass('input-error');
                next_step = false;
            }
            else {
                $(this).removeClass('input-error');
            }
        });
        
        if( next_step ) {
            indexWizard = current_active_step.index();
            if (indexWizard == 1) {
                const totalPassenger = $("#total_passenger").val();
                var passengerList = [];
                for (let index = 0; index < totalPassenger; index++) {
                    let passenger = {
                        id : randomId(10),
                        urutan : index+1,
                        seat : "",
                        name : "",
                        gender : "",
                        age : "",     
                        relation : ""   
                    }
                    passengerList.push(passenger);
                }
                saveLocalData("passengerList", passengerList);   
            }
            checkIndexWizard(indexWizard);

            parent_fieldset.fadeOut(400, function() {
                // change icons
                current_active_step.removeClass('active').addClass('activated').next().addClass('active');

                // progress bar
                bar_progress(progress_line, 'right');
                // show next step
                $(this).next().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class( $('.f1'), 20 );
            });
        }
    });
    
    // step sbelumnya (ketika klik tombol sebelumnya)
    $('.f1 .btn-previous').on('click', function() {
        // navigation steps / progress steps
        var current_active_step = $(this).parents('.f1').find('.f1-step.active');
        var progress_line = $(this).parents('.f1').find('.f1-progress-line');

        
        $(this).parents('fieldset').fadeOut(400, function() {
            
            // change icons
            current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
            // progress bar
            bar_progress(progress_line, 'left');
            // show previous step
            $(this).prev().fadeIn();
            // scroll window to beginning of the form
            scroll_to_class( $('.f1'), 20 );            

            indexWizard = current_active_step.index() - 1;
            checkIndexWizard();
        });
    });

    $('.f1 #btn-request').on('click', function() {
        let passengerList = getLocalData('passengerList', true);
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "insert",
            method: "POST",
            data: {
                id_trip: idTrip,
                schedule_number : $("#schedule_number").val(),
                type_bus : $("#type_schedule_bus").val(),
                total_passenger : $("#total_passenger").val(),
                departure : $("#departure").val(),
                arrival : $("#arrival").val(),
                departure_code : $("#departure_code").val(),
                arrival_code : $("#arrival_code").val(),
                departure_date : $("#departure_date").val(),
                departure_day : $("#departure_day").val(),
                departure_time : $("#departure_time").val(),
                return_date :  $("#return_date").val(),
                return_day :  $("#return_day").val(),
                return_time : $("#return_time").val(),
                passengers : passengerList,
                scrty: true
            },
            success: function(response) {
                if (ExAs.Utils.Json.valid(response)) {
                    var res = JSON.parse(response);

                    if (res.status) {                        
                        ExAl.Toast.Success(res.header, res.message, function(result) {
                            if (result.isDismissed) {
                                // loadData();
                                // ExAl.Modal.Close('#modalTambah', true);
                            }
                        });
                    } else {
                        ExAl.Toast.Failed(res.header, res.message);
                    }
                }
            },
            error: function(e) {
                
            },
        });
    });    

    /**
     * Transaction
     */

    var Transaction = function() {
        addTrigger();        
    }

    var addTrigger = function() {
        if (ExAs.Doc.Exist("#form_passenger")) {            
            ExAs.Validator("#submit", function(isValid) {
                var _input = $("#form_passenger").serializeArray();
                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_tambah button").attr("disabled", "disabled");

                if (isValid == true) {
                    let passengerList = getLocalData('passengerList', true);
                    passengerList = passengerList.map(p =>
                        p.id == $("#input_id").val()
                          ? { ...p, name : $("#input_name").val(),
                                    gender : $("#input_gender").val(),
                                    age : $("#input_age").val(),     
                                    gender : $("#input_gender").find(":selected").val(),
                                    relation : $("#input_relation").val(),
                                    seat : $('#input_seat').find(":selected").val()}                                
                          : p
                      );
                      
                    saveLocalData("passengerList", passengerList);      

                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_tambah button").removeAttr("disabled");
                    $("#modalPassenger").modal('hide');

                    displayInfoPassenger();
                    
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
                id_trip: idTrip,
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    if (res.data != null) {   
                        console.log(res.data);                                             
                        saveLocalData("dataDeparture", {
                            schedule_number : res.data.schedule_number,
                            type_schedule_bus : res.data.type_schedule_bus,
                            departure_date : res.data.departure_date,
                            departure_day : res.data.departure_day,
                            departure_time : res.data.departure_time,
                            departure : res.data.departure,
                            arrival : res.data.arrival,
                            departure_code : res.data.departure_code,
                            arrival_code : res.data.arrival_code,
                            return_date : res.data.return_date,
                            return_day : res.data.return_day,
                            return_time : res.data.return_time,
                        });   

                        displayInfoDeparture();                        
                    }
                    //  else {
                    //     alert("Jadwal tidak ditemukan");
                    //     window.location = e3nCeL0t + MoDaD + MAIN;
                    // }
                    
                }
            },
            error: function(e) {                
            },
        });
    }    

    var loadDataSeat = function(){                 
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "seat",
            method: "POST",
            data: {
                id_trip: idTrip,
                scrty: true
            },
            
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    if (res.data != null) {
                        seatAvailable = res.data.seat_available;
                        $.each(seatAvailable, function(i, el){ 
                            $('#input_seat').append( new Option(el,el) );
                        });
                        // #input_seat

                        // res.data.seat_available
                        // res.data.total_seat_available
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
            loadDataSeat();
            Transaction();
        },
        refresh: function() { 
        }
    }
})();

ExAs.Dom(ExAsUser.run())

function checkIndexWizard(indexWizard){
    if (indexWizard == 1) {
        displayInfoPassenger();                
    } else if (indexWizard == 2) {
    }
}

function scroll_to_class(element_class, removed_height) {
    var scroll_to = $(element_class).offset().top - removed_height;
    if($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({scrollTop: scroll_to}, 0);
    }
}

function bar_progress(progress_line_object, direction) {
    var number_of_steps = progress_line_object.data('number-of-steps');
    var now_value = progress_line_object.data('now-value');
    var new_value = 0;
    if(direction == 'right') {
        new_value = now_value + ( 100 / number_of_steps );
    }
    else if(direction == 'left') {
        new_value = now_value - ( 100 / number_of_steps );
    }
    progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

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

function saveLocalData(key, data) {
    localStorage.setItem(key, JSON.stringify(data));        
}

function getLocalData(key, isArray = false) {
    let data = localStorage.getItem(key);
    if (!empty(data)) {
        return JSON.parse(data);
    }

    if (isArray) {
        return [];
    }
    return null;
}

function editPassenger(id){
    $("#modalPassenger").modal('show');
    
    const passengerList = getLocalData('passengerList', true);
    const dataPassenger = passengerList.filter(p => p.id === id)[0];
    $("#urutan-penumpang").html(dataPassenger.urutan);
    $("#input_id").val(dataPassenger.id);
}

function removePassenger(id) {
    let passengerList = getLocalData('passengerList', true);

    const index = passengerList.findIndex(_element => _element.id === id);

    if (index > -1) passengerList.splice(index, 1);
    
    saveLocalData("passengerList", passengerList);
    displayInfoPassenger();
}    

const randomId = function(length = 6) {
    return Math.random().toString(36).substring(2, length+2);
};

function displayInfoPassenger() {
    const passengerList = getLocalData('passengerList', true);
    
    var cardHTML = "";
    var cardHTMLFinal = "";
    passengerList.forEach((passenger, index) => {
        cardHTML += `<div class="col-lg-3 col-md-6 col sm-12 p-2">
                        <div class="card">
                            <div class="card-header">
                                ${passenger.name != "" ? `${passenger.name}` : `Penumpang ${passenger.urutan}`} 
                                ${passenger.gender != "" ? `(${passenger.gender})` : ""}
                            </div>
                            <div class="card-body">
                                <p>Usia ${passenger.age != "" ? passenger.age : "Belum ditentukan"},</p>
                                <p>Hubungan ${passenger.relation != "" ? passenger.relation : "Belum ditentukan"}</p>
                                <p>No. Kursi ${passenger.seat != "" ? passenger.seat : "Belum ditentukan"}</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-warning btn-sm" onclick="editPassenger('${passenger.id}')">
                                    <span class="mdi mdi-pencil"></span> Ubah & Lengkapi
                                </button>
                            </div>
                        </div>
                    </div>`;

                    cardHTMLFinal += `<div class="col-lg-6 col-md-12 col sm-12 p-2">
                    <div class="card">
                        <div class="card-header">
                            ${passenger.name != "" ? `${passenger.name}` : `Penumpang ${passenger.urutan}`} 
                            ${passenger.gender != "" ? `(${passenger.gender})` : ""}
                        </div>
                        <div class="card-body">
                            <p>Usia ${passenger.age != "" ? passenger.age : "Belum ditentukan"},</p>
                            <p>Hubungan ${passenger.relation != "" ? passenger.relation : "Belum ditentukan"}</p>
                            <p>No. Kursi ${passenger.seat != "" ? passenger.seat : "Belum ditentukan"}</p>
                        </div>
                    </div>
                </div>`;
    });
    
    $("#title-information-passenger").html(`Informasi Penumpang ${passengerList.length}`);
    $("#data-passenger").html(cardHTML);
    $("#final-passenger").html(cardHTMLFinal);
}

function displayInfoDeparture() {
    const dataDeparture = getLocalData('dataDeparture', true);
    $("#schedule_number").val(dataDeparture.schedule_number);
    $("#type_schedule_bus").val(dataDeparture.type_schedule_bus);
    $("#departure_date").val(dataDeparture.departure_date);
    $("#departure_day").val(dataDeparture.departure_day);
    $("#departure_time").val(dataDeparture.departure_time);
    $("#departure").val(dataDeparture.departure);
    $("#arrival").val(dataDeparture.arrival);
    $("#return_date").val(dataDeparture.return_date)
    $("#return_day").val(dataDeparture.return_day)
    $("#return_time").val(dataDeparture.return_time)

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