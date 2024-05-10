'use strict';

var ExAsUser = (function() {
    const queryString   = window.location.search;
    const urlParams     = new URLSearchParams(queryString);
    const scheduleNumber= urlParams.get('schedule_number');
    const departureDate = urlParams.get('departure_date');

    var MAIN = 'trans/request/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);

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
                                    relation : $("#input_relation").val()}
                          : p
                      );
                      
                    console.log({
                        name : $("#input_name").val(),
                                    gender : $("#input_gender").val(),
                                    age : $("#input_age").val(),     
                                    relation : $("#input_relation").val()
                    });
                    console.log(passengerList);
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
            url: e3nCeL0t + MoDaD + MAIN + "detail",
            method: "GET",
            data: {
                schedule_number: scheduleNumber,
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    if (res.data != null) {
                                                
                        saveLocalData("dataDeparture", {
                            schedule_number : res.data[0].schedule_number,
                            type_schedule_bus : res.data[0].type_schedule_bus,
                            departure_day : res.data[0].departure_day,
                            departure_date : departureDate,
                            departure : res.data[0].departure,
                            arrival : res.data[0].arrival,
                            departure_time : res.data[0].departure_time,
                        });   

                        displayInfoDeparture();                        
                    } else {
                        alert("Jadwal tidak ditemukan");
                        window.location = e3nCeL0t + MoDaD + MAIN;
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

$(document).ready(function() {

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
            checkIndexWizard();

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
    
    // submit (ketika klik tombol submit diakhir wizard)
    $('.f1').on('submit', function(e) {
    	// validasi form
    	$(this).find('input[type="text"], input[type="password"], .f1 input[type="number"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    });

    function checkIndexWizard(){
        console.log({indexWizard});
        if (indexWizard == 1) {
            displayInfoPassenger();                
        } else if (indexWizard == 2) {
            // departure
            // arrival
            // schedule_number
            // type_schedule_bus
            // departure_day
            // departure_date
            // departure_time
        }
    }
});

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