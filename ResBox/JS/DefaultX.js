disAlertRates_ESP = "Debe introducir las edades de los ninos";
disAlertRates_ING = "You must write the childrens ages";
disAlertAdultos_ING = "Sorry, We cannot accept rooms with no adults.";
disAlertAdultos_ESP = "No podemos aceptar habitaciones sin adultos.";
var _RBToday = new Date();
totalcuartos = 2;
maxNumNinios = 3;
sinAdultos = false;
function FRB_ShowRoom(forma) {
    var TotalCuartos = totalcuartos;
    var numcuartos = eval("document." + forma + ".num_cuartos.value");
    eval("document.getElementById('DivTablaNinos').style.display='none'");
    eval("document.getElementById('DivTablaNinos_1').style.display='none'");
    for (s = 2; s <= TotalCuartos; s++) {
        eval("document.getElementById('DivTablaNinos_" + s + "').style.display='none'");
        eval("document.getElementById('DivHab_" + s + "').style.display='none'")
    }
    for (s = 2; s <= numcuartos; s++) {
        eval("document.getElementById('DivHab_" + s + "').style.display=''")
    }
    FRB_CleanChild(forma, 0)
}
function FRB_CleanChild(forma, k) {
    var TotalCuartos = totalcuartos;
    if (k == 0) {
        eval("document." + forma + ".num_ninos.value=0");
        eval("document.getElementById('DivTablaNinos_1').style.display='none'");
        FRB_LimpiaNinos(forma, 1);
        for (s = 2; s <= TotalCuartos; s++) {
            FRB_LimpiaNinos(forma, s);
            eval("document." + forma + ".num_adultos_" + s + ".value=0");
            eval("document." + forma + ".num_ninos_" + s + ".value=0");
            eval("document.getElementById('DivTablaNinos_" + s + "').style.display='none'")
        }
    } else {
        FRB_LimpiaNinos(forma, k);
        eval("document.getElementById('DivTablaNinos').style.display=''");
        eval("document.getElementById('DivTablaNinos_" + k + "').style.display='none'")
    }
}
function FRB_LimpiaNinos(forma, k) {
    if (k == 1) {
        b = ""
    } else {
        b = "_" + k
    }
    for (var a = 1; a <= maxNumNinios; a++) {
        eval("document." + forma + ".EdadNino" + a + b + ".value=-1")
    }
}
function FRB_ShowNinos(forma, k) {
    var TotalCuartos = totalcuartos;
    if (k == 1) {
        b = ""
    } else {
        b = "_" + k
    }
    eval("document.getElementById('DivTablaNinos_" + k + "').style.display='none'");
    var prende = 0;
    if (eval("document." + forma + ".num_ninos.value") > 0) {
        prende = 1
    }
    for (s = 2; s <= TotalCuartos; s++) {
        if (eval("document." + forma + ".num_ninos_" + s + ".value") > 0) {
            prende = 1
        }
    }
    if (prende == 0) {
        eval("document.getElementById('DivTablaNinos').style.display='none'")
    }
    if (eval("document." + forma + ".num_ninos" + b + ".value") == 0) {
        FRB_LimpiaNinos(forma, k);
        eval("document.getElementById('DivTablaNinos_" + k + "').style.display='none'")
    } else {
        eval("document.getElementById('DivTablaNinos').style.display=''");
        eval("document.getElementById('DivTablaNinos_" + k + "').style.display=''");
        for (var ninios = 1; ninios <= maxNumNinios; ninios++) {
            if (ninios <= eval("document." + forma + ".num_ninos" + b + ".value")) {
                eval("document." + forma + ".EdadNino" + ninios + "" + b + ".style.display=''")
            } else {
                eval("document." + forma + ".EdadNino" + ninios + "" + b + ".style.display='none'")
            }
        }
    }
}
function Show_RoomPackageInicioHome(forma) {
    var TotalCuartos = totalcuartos;
    eval("document." + forma + ".num_cuartos.value=1");
    eval("document.getElementById('DivTablaNinos_1').style.display='none'");
    for (s = 2; s <= TotalCuartos; s++) {
        eval("document.getElementById('DivTablaNinos_" + s + "').style.display='none'");
        eval("document.getElementById('DivHab_" + s + "').style.display='none'")
    }
    FRB_CleanChild(forma, 0)
}
function newwindow_asoc(C, A) {
    if (A != "") {
        var B = window.open(A, C, "top=25,left=25,width=710,height=600,buttons=no,scrollbars=yes,location=no,menubar=no,resizable=no,status=yes,directories=no,toolbar=no")
    } else {
        var B = window.open("", C, "top=25,left=25,width=710,height=600,buttons=no,scrollbars=yes,location=no,menubar=no,resizable=no,status=yes,directories=no,toolbar=no")
    }
    B.focus()
}
function SelOpc(A, C) {
    Elementos = document.getElementById("mnSel").getElementsByTagName("div");
    for (var D = 0; D < Elementos.length; D++) {
        var B = Elementos[D].className.indexOf(C);
        if (D == A) {
            if (B < 0) {
                Elementos[D].className = Elementos[D].className + C
            }
        } else {
            if (B > -1) {
                Elementos[D].className = Elementos[D].className.substring(0, B)
            }
        }
    }
}
function Menu_Buscador(idelement, totelement) {
    for (var i = 1; i <= totelement; i++) {
        if (idelement == i) {
            eval("document.getElementById('Rbx" + idelement + "').style.display=''")
        } else {
            eval("document.getElementById('Rbx" + i + "').style.display='none'")
        }
    }
}
function validaPackAvion(forma, maxTotal, anio_desde, mes_desde, dia_desde, anio_hasta, mes_hasta, dia_hasta) {
    var objTipoVuelo = "";
    var miforma;
    miforma = eval("document." + forma + "");
    if (typeof miforma.TipoVuelo != "undefined" && miforma.TipoVuelo != null) {
        objTipoVuelo = (miforma.TipoVuelo.value != "one") ? "" : miforma.TipoVuelo.value
    }
    if (validaAereopuerto(forma) == false) {
        return false
    }
    if (validaCiudad(forma) == false) {
        return false
    }
    if (validaLeavingVsCiudadDif(forma) == false) {
        return false
    }
    if (objTipoVuelo == "") {
        if (validaFechas(anio_desde, mes_desde, dia_desde, anio_hasta, mes_hasta, dia_hasta) == false) {
            return false
        }
    }
    if (validateEdades(forma) == false) {
        return false
    }
    if (validaTotalAdNi(forma, maxTotal) == false) {
        return false
    }
    return true
}
alertAereopIng = "Please select the departure airport.";
alertAereopEsp = "Por favor seleccione el aeropuerto origen.";
function validaAereopuerto(forma) {
    var idioma = document.getElementById("Idioma").value;
    var mensaje;
    var z = eval("document." + forma + ".Leavingfrom.value");
    if (idioma.toLowerCase() == "ing") {
        mensaje = alertAereopIng
    } else {
        mensaje = alertAereopEsp
    }
    if (eval("document." + forma + ".Leavingfrom.value") == "" || eval("document." + forma + ".Leavingfrom.value") == "Ciudad o Clave IATA" || eval("document." + forma + ".Leavingfrom.value") == "City Name or IATA Code") {
        alert(mensaje);
        return false
    }
    return true
}
function DfltIn(B, A) {
    if (B.value == A) {
        B.dflt = B.value;
        B.value = "";
        B.onblur = DfltOut
    }
}
function DfltOut() {
    if (this.value == "" && this.dflt) {
        this.value = this.dflt
    }
}
alertCiudadIng = "Please select the arrival airport.";
alertCiudadEsp = "Por favor seleccione el aeropuerto de llegada.";
function validaCiudad(forma) {
    var idioma = document.getElementById("Idioma");
    if (idioma == null) {
        idioma = "ing"
    } else {
        idioma = idioma.value
    }
    var mensaje = (idioma.toLowerCase() == "ing") ? alertCiudadIng : alertCiudadEsp;
    var ciudades = eval("document." + forma + ".ciudades");
    var clav_ciudad = eval("document." + forma + ".Clav_ciudad");
    if (typeof ciudades != "undefined" && ciudades != null) {
        if (ciudades.tagName == "INPUT" && ciudades.alt.toLowerCase() == "ajax.off") {
            if (ciudades.value == "" || ciudades.value == "Ciudad o Clave IATA" || ciudades.value == "City Name or IATA Code") {
                alert(mensaje);
                return false
            }
        } else {
            if (ciudades.value == "") {
                alert(mensaje);
                return false
            }
        }
    }
    return true
}
alertDiferentAirportIng = "Please select the diferent departure airport than arrival airport.";
alertDiferentAirportEsp = "El aeropuerto de origen deber ser diferente al aeropuerto de llegada.";
function validaLeavingVsCiudadDif(forma) {
    var idioma = document.getElementById("Idioma");
    if (idioma == null) {
        idioma = "ing"
    } else {
        idioma = idioma.value
    }
    var mensaje = (idioma.toLowerCase() == "ing") ? alertDiferentAirportIng : alertDiferentAirportEsp;
    var objAeropOrig = eval("document." + forma + ".CodeAirport");
    var objAeropDest = eval("document." + forma + ".Clav_ciudad");
    if (typeof objAeropDest == "undefined" || objAeropDest == null) {
        objAeropDest = eval("document." + forma + ".bbAeroDest");
        if (typeof objAeropDest == "undefined" || objAeropDest == null) {
            return true
        }
    }
    if (objAeropOrig.value != "" && objAeropDest.value != "") {
        if (objAeropOrig.value == objAeropDest.value) {
            alert(mensaje);
            return false
        }
    }
    return true
}
function validateEdades(forma) {
    var msg = "";
    var msgAd = "";
    var idioma = document.getElementById("Idioma").value;
    var rooms;
    var adultos;
    var ninios;
    if (idioma.toLowerCase() == "esp") {
        msg = disAlertRates_ESP;
        msgAd = disAlertAdultos_ESP
    } else {
        msg = disAlertRates_ING;
        msgAd = disAlertAdultos_ING
    }
    if (eval("document." + forma + ".Adult_Only.value") == "no") {
        rooms = eval("document." + forma + ".num_cuartos.value");
        for (var i = 1; i <= rooms; i++) {
            if (i == 1) {
                b = ""
            } else {
                b = "_" + i
            }
            adultos = eval("document." + forma + ".num_adultos" + b + ".value");
            if (adultos <= 0) {
                alert(msgAd);
                return false
            }
            ninios = eval("document." + forma + ".num_ninos" + b + ".value");
            for (var y = 1; y <= ninios; y++) {
                if (eval("document." + forma + ".EdadNino" + y + b + ".value") == "-1") {
                    alert(msg);
                    return false
                }
            }
        }
    }
    return true
}
function GtCtrl(A) {
    return document.getElementById(A)
}
function FillCBNumeric(D, E, B) {
    for (var A = E; A <= B; A++) {
        var C = document.createElement("option");
        C.appendChild(document.createTextNode(A));
        C.setAttribute("value", A);
        D.appendChild(C)
    }
}
function SetXDate(B, C) {
    var A = new Date();
    A.setDate(A.getDate() + C);
    B.value = A.getDate() + "-" + (A.getMonth() + 1) + "-" + A.getFullYear()
}
function validaTotalAdNi(forma, maxTotal) {
    var b;
    var rooms;
    var adultos = 0;
    var ninios = 0;
    var pTotal = 0;
    var pGranTotal = 0;
    disTotRebasa_ING = "Please specify at least 1 but no more than " + maxTotal + " travelers.";
    disTotRebasa_ESP = "Por favor especifique al menos 1 y hasta " + maxTotal + " pasajeros.";
    var idioma = document.getElementById("Idioma").value;
    rooms = eval("document." + forma + ".num_cuartos.value");
    for (var i = 1; i <= rooms; i++) {
        if (i == 1) {
            b = ""
        } else {
            b = "_" + i
        }
        adultos = eval("document." + forma + ".num_adultos" + b + ".value");
        if (adultos == "") {
            adultos = 0
        }
        if (eval("document." + forma + ".Adult_Only.value") == "no") {
            ninios = eval("document." + forma + ".num_ninos" + b + ".value");
            if (ninios == "") {
                ninios = 0
            }
        }
        pTotal = parseInt(adultos) + parseInt(ninios);
        pGranTotal += pTotal;
        if (pGranTotal > maxTotal) {
            if (idioma.toLowerCase() == "esp") {
                alert(disTotRebasa_ESP)
            } else {
                alert(disTotRebasa_ING)
            }
            return false
        }
    }
    return true
}
function MuestraOcultaPorObj(A, B, C) {
    if (typeof A != "undefined" && A != null) {
        if (A.value == B) {
            DisplayObj(C, 0)
        } else {
            DisplayObj(C, 1)
        }
    }
}
function DisplayObj(id, s) {
    var e = document.getElementById(id);
    if (e != null) {
        if (s) {
            eval("e.style.display = ''")
        } else {
            eval("e.style.display = 'none'")
        }
    }
}
function LoadFlScript() {
    CalendarLoad(document.formaflight.FOfechaFrom, "FOCalFrom", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    CalendarLoad(document.formaflight.FOfechaTo, "FOCalTo", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    fillYearsSelect(document.formaflight.anio_desde);
    fillYearsSelect(document.formaflight.anio_hasta);
    fillMonthsSelectTo(document.formaflight.anio_desde.value, document.formaflight.mes_desde, document.formaflight.dia_desde, true);
    fillMonthsSelectFrom(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta, document.formaflight.dia_hasta, true);
    fillDaysSelectTo(document.formaflight.anio_desde.value, document.formaflight.mes_desde.value, document.formaflight.dia_desde, true);
    fillDaysSelectFrom(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta.value, document.formaflight.dia_hasta, true);
    ManualCambia(document.formaflight.FOfechaTo, document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);
    ManualCambia(document.formaflight.FOfechaFrom, document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);
    SetXDate(document.formaflight.FOfechaFrom, 7);
    FechaGet(document.formaflight.FOfechaFrom, document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);
    SetXDate(document.formaflight.FOfechaTo, 14);
    FechaGet(document.formaflight.FOfechaTo, document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);
    FillCBNumeric(GtCtrl("num_adultosF1"), 2, 4);
    FillCBNumeric(GtCtrl("EdadNinoF1"), 1, 12);
    FillCBNumeric(GtCtrl("EdadNinoF2"), 1, 12);
    FillCBNumeric(GtCtrl("EdadNinoF3"), 1, 12)
}
function LoadPkgScript() {
    FillPackageCities(document.formapackage.ciudades);
    CalendarLoad(document.formapackage.PKfechaFrom, "PKCalFrom", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    CalendarLoad(document.formapackage.PKfechaTo, "PKCalTo", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    fillYearsSelect(document.formapackage.anio_desde);
    fillYearsSelect(document.formapackage.anio_hasta);
    fillMonthsSelectTo(document.formapackage.anio_desde.value, document.formapackage.mes_desde, document.formapackage.dia_desde, true);
    fillMonthsSelectFrom(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta, document.formapackage.dia_hasta, true);
    fillDaysSelectTo(document.formapackage.anio_desde.value, document.formapackage.mes_desde.value, document.formapackage.dia_desde, true);
    fillDaysSelectFrom(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta.value, document.formapackage.dia_hasta, true);
    ManualCambia(document.formapackage.PKfechaTo, document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);
    ManualCambia(document.formapackage.PKfechaFrom, document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);
    SetXDate(document.formapackage.PKfechaFrom, 7);
    FechaGet(document.formapackage.PKfechaFrom, document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);
    SetXDate(document.formapackage.PKfechaTo, 14);
    FechaGet(document.formapackage.PKfechaTo, document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);
    FillCBNumeric(GtCtrl("num_adultos1"), 2, 4);
    FillCBNumeric(GtCtrl("num_adultos_2"), 1, 4);
    FillCBNumeric(GtCtrl("num_ninos_2"), 1, 3);
    FillCBNumeric(GtCtrl("EdadNino1"), 1, 12);
    FillCBNumeric(GtCtrl("EdadNino2"), 1, 12);
    FillCBNumeric(GtCtrl("EdadNino1_2"), 1, 12);
    FillCBNumeric(GtCtrl("EdadNino2_2"), 1, 12)
}
function LoadHtScript() {
    FillHotelDestinations(document.formahotel.Destino);
    CalendarLoad(document.formahotel.HTfechaFrom, "HTCalFrom", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    CalendarLoad(document.formahotel.HTfechaTo, "HTCalTo", _RBToday.getFullYear(), _RBToday.getFullYear() + 1);
    fillYearsSelect(document.formahotel.anio_desde);
    fillYearsSelect(document.formahotel.anio_hasta);
    fillMonthsSelectTo(document.formahotel.anio_desde.value, document.formahotel.mes_desde, document.formahotel.dia_desde, false);
    fillMonthsSelectFrom(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta, document.formahotel.dia_hasta, false);
    fillDaysSelectTo(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde, false);
    fillDaysSelectFrom(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta, false);
    ManualCambia(document.formahotel.HTfechaFrom, document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);
    ManualCambia(document.formahotel.HTfechaTo, document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);
    SetXDate(document.formahotel.HTfechaFrom, 7);
    FechaGet(document.formahotel.HTfechaFrom, document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);
    SetXDate(document.formahotel.HTfechaTo, 14);
    FechaGet(document.formahotel.HTfechaTo, document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta)
}
function PgEnd() {
    LoadFlScript();
    LoadPkgScript();
    LoadHtScript();
    SelOpc(1, "A");
    MnOp("formahotel");
    sbMnOp("sbSelHT", 1, " _h"); /*MuestraOcultaPorObj(document.formaflight.TipoVuelo,"one","FlightReturn")*/
}
function MnOp(A) {
    Elementos = document.getElementById("RBCt").getElementsByTagName("form");
    for (var B = 0; B < Elementos.length; B++) {
        if (Elementos[B].id == A || (A == "formatour" && Elementos[B].id == "formatransfers")) {
            Elementos[B].style.display = "block"
        } else {
            Elementos[B].style.display = "none"
        }
    }
}
function MnOpV1(id, n) {
    for (var i = 1; i <= n; i++) {
        if (id == i) {
            eval("document.getElementById('Rbx" + i + "').style.display=''")
        } else {
            eval("document.getElementById('Rbx" + i + "').style.display='none'")
        }
    }
}
function sbMnOp(D, E, B) {
    document.getElementById("sbSelHT").style.display = "none";
    document.getElementById("sbSelFL").style.display = "none";
    element = document.getElementById(D);
    if (!element) {
        return
    }
    element.style.display = "block";
    Elementos = element.getElementsByTagName("input");
    for (var C = 0; C < Elementos.length; C++) {
        if (C + 1 == E) {
            Elementos[C].checked = true
        } else {
            Elementos[C].checked = false
        }
    }
    Elementos = element.getElementsByTagName("div");
    for (var C = 0; C < Elementos.length; C++) {
        var A = Elementos[C].className.indexOf(B);
        if (C + 1 == E) {
            Elementos[C].className = Elementos[C].className + B
        } else {
            if (A > -1) {
                Elementos[C].className = Elementos[C].className.substring(0, A)
            }
        }
    }
}
function FRB_ShowNinos1(forma, k) {
    var TotalCuartos = 1;
    if (k == 1) {
        b = ""
    } else {
        b = "_" + k
    }
    eval("document.getElementById('DivTablaNinosF_" + k + "').style.display='none'");
    var prende = 0;
    if (eval("document." + forma + ".num_ninos.value") > 0) {
        prende = 1
    }
    for (s = 2; s <= TotalCuartos; s++) {
        if (eval("document." + forma + ".num_ninos_" + s + ".value") > 0) {
            prende = 1
        }
    }
    if (prende == 0) {
        eval("document.getElementById('DivTablaNinosF').style.display='none'")
    }
    if (eval("document." + forma + ".num_ninos" + b + ".value") == 0) {
        FRB_LimpiaNinos(forma, k);
        eval("document.getElementById('DivTablaNinosF_" + k + "').style.display='none'")
    } else {
        eval("document.getElementById('DivTablaNinosF').style.display=''");
        eval("document.getElementById('DivTablaNinosF_" + k + "').style.display=''");
        for (var ninios = 1; ninios <= maxNumNinios; ninios++) {
            if (ninios <= eval("document." + forma + ".num_ninos" + b + ".value")) {
                eval("document." + forma + ".EdadNino" + ninios + "" + b + ".style.display=''")
            } else {
                eval("document." + forma + ".EdadNino" + ninios + "" + b + ".style.display='none'")
            }
        }
    }
}
;