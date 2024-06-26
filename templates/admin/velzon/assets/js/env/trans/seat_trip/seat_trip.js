'use strict';

var ExAsUser = (function() {
    const queryString   = window.location.search;
    const urlParams     = new URLSearchParams(queryString);
    const idTrip        = urlParams.get('id_trip');
    
    var MAIN = 'trans/trip/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    
    /**
     * Transaction
     */

    var Transaction = function() {        
    }

    function updateSeatPassenger(seat_number, id_passenger) {
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "updateseat",
            method: "POST",
            data: {
                seat_number: seat_number,
                id_passenger: id_passenger,
                scrty: true
            },
            success: function(response) {
                var respon = JSON.parse(response);
                if (respon.status) {
                    ExAsUser.run();
                }
            }
        });
    }

    var loadData = function(){                 
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "availableseat",
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
                        
                        const maxLayout = 6;
                        const maxNumber = 5;
                        let rowSeat = '';

                        for (let index = 1; index <= 11; index++) {
                            let seats = '';

                            if (index == 11) {
                                for (let i = 49; i <= 54; i++) {
                                    let calculateIndex = i;
                                    seats += `<button isavailable="false" type="button" id="cell-seat-${calculateIndex}" class="seat text-center text-white">${calculateIndex}</button>`;                                    
                                }
                            } else if (index == 10) {
                                for (let i = maxLayout; i >= 1; i--) {
                                    if (i < 4) {
                                        let calculateIndex = (i > 4) ? i - 1 : i;
                                        seats += `<button isavailable="false" type="button" id="cell-seat-${(index - 1) * maxNumber + calculateIndex}" class="seat text-center text-white">${(index - 1) * maxNumber + calculateIndex}</button>`;
                                    } else {
                                        seats += `<div style="width:55px; height:55px"></div>`;
                                    }
                                }
                            } else if (index % 2 !== 0) {
                                for (let i = 1; i <= maxLayout; i++) {
                                    if (i !== 3) {
                                        let calculateIndex = (i > 3) ? i - 1 : i;
                                        seats += `<button isavailable="false" type="button" id="cell-seat-${(index - 1) * maxNumber + calculateIndex}" class="seat text-center text-white">${(index - 1) * maxNumber + calculateIndex}</button>`;
                                    } else {
                                        seats += `<div style="width:55px; height:55px"></div>`;
                                    }
                                }
                            } else {
                                for (let i = maxLayout; i >= 1; i--) {
                                    if (i !== 4) {
                                        let calculateIndex = (i > 4) ? i - 1 : i;
                                        seats += `<button isavailable="false" type="button" id="cell-seat-${(index - 1) * maxNumber + calculateIndex}" class="seat text-center text-white">${(index - 1) * maxNumber + calculateIndex}</button>`;
                                    } else {
                                        seats += `<div style="width:55px; height:55px"></div>`;
                                    }
                                }
                            }

                            rowSeat += `<div id="row-seat-${index}" class="d-flex flex-row justify-content-center">${seats}</div>`;
                        }
                        
                        $("#canvas-seat").html(rowSeat);

                        $.map(res.data.seat_available, function( val, i ) {
                            $(`#cell-seat-${val}`).addClass("available");
                            $(`#cell-seat-${val}`).attr("isavailable", "true");
                        });

                        $('.seat').click(function() {
                            var cellSeat          = $(this).attr('id');
                            var cellSeatAvailable = $(this).attr('isavailable');
                            var passengerSelected = $("#passenger-selected").val();
                            if ((cellSeatAvailable.toLowerCase() === 'true') && passengerSelected != "") {
                                $("#passenger-selected").val("");
                                updateSeatPassenger(cellSeat.replace(/[^0-9]/g, ''), passengerSelected);
                            }
                        });
                    }                                        
                }
            },
            error: function(e) {                
            },
        });
    }

    var loadDataPassenger = function(){
        
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "approvedpassenger",
            method: "POST",
            data: {
                id_trip: idTrip,
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    console.log(res);    
                    
                    var cardPassenger = "";
                    $.map(res.data, function( val, i ) {
                        cardPassenger+= ` <div id="card-passenger-${val.id_passenger}" class="card-passenger card" onclick="onTapPassenger(${val.id_passenger})" style="background-color:#EEEEEE">
                                                <div class="card-body">
                                                    <label>${val.ticket_number}</label>
                                                    <h5 class="card-title">${val.name_passenger} (${val.gender_passenger})</h5>
                                                    <p class="card-text m-0 p-0">Nomor Kursi: ${val.seat_number != "" ? val.seat_number : "Belum ditentukan"}</p>
                                                    <p class="card-text m-0 p-0">Hubungan: ${val.relation_passenger}</p>
                                                    <p class="card-text m-0 p-0">Usia: ${val.age_passenger} Tahun</p>
                                                </div>
                                            </div>`;
                    });

                    $("#canvas-passenger").html(cardPassenger);
                }
            },
            error: function(e) {                
            },
        });
    }        

    return {
        run: function() {
            loadData();
            loadDataPassenger();
            Transaction();
        },
        refresh: function() { 
        }
    }
})();

ExAs.Dom(ExAsUser.run())

var onTapPassenger = function(id_passenger) {
    $(`.card-passenger`).css('background-color', '#EEEEEE');
    $(`#card-passenger-${id_passenger}`).css('background-color', '#FFEEA9');
    $("#passenger-selected").val(id_passenger);
}