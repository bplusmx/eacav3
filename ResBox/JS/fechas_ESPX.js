var arrDays = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var arrMonths = new Array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
var arrMonthsING = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
var myDate = new Date();
var intCurrentMonth = myDate.getMonth() + 1;
var intCurrentYear = myDate.getFullYear();
var intCurrentDay = myDate.getDate();
var intSelectedMonth;
var intSelectedYear;
var intSelectedDay;
intSelectedYear = "";
intSelectedMonth = "";
intSelectedDay = "";

function verificaFechas() {
    var A;
    var B;
    A = arrMonthsING[parseInt(document.getElementById("mes_desde").value) - 1] + " " + document.getElementById("dia_desde").value + ", " + document.getElementById("anio_desde").value;
    B = arrMonthsING[parseInt(document.getElementById("mes_hasta").value) - 1] + " " + document.getElementById("dia_hasta").value + ", " + document.getElementById("anio_hasta").value;
    if (Date.parse(A) > Date.parse(B)) {
        alert("La fecha de salida debe ser posterior a la fecha de llegada.");
        return false
    }
    return true
}

function validaFechas(H, A, G, E, F, C) {
    var B;
    var D;
    
    B = arrMonthsING[parseInt(A) - 1] + " " + G + ", " + H;
    D = arrMonthsING[parseInt(F) - 1] + " " + C + ", " + E;
    
    if (Date.parse(B) > Date.parse(D)) {
        alert("La fecha de salida debe ser posterior a la fecha de llegada.");
        return false
    }
    return true
}

function cleanSelect(A) {
    while (A.options.length > 0) {
        A.options[0] = null
    }
}
function fillYearConstanteDesde(A) {
    cleanSelect(document.forma.anio_desde);
    intCurrentYear = A;
    document.forma.anio_desde.options[0] = new Option(intCurrentYear, intCurrentYear, false, false);
    document.forma.anio_desde.options[1] = new Option(intCurrentYear + 1, intCurrentYear + 1, false, false);
    if ((intSelectedYear > 0) && (intSelectedYear != intCurrentYear)) {
        document.forma.anio_desde.options[1].selected = true
    }
}
function fillMonthConstanteDesde(C, H, K) {
    var G;
    var F;
    var D = 0;
    var I;
    var E;
    var A;
    var J;
    var B;
    cleanSelect(document.forma.mes_desde);
    if (C == intCurrentYear) {
        F = intCurrentMonth - 1
    } else {
        F = 0
    }
    E = 11;
    for (G = F; G <= E; G++) {
        if ((intSelectedYear == C) && (intSelectedMonth == G) && (B)) {
            document.forma.mes_desde.options[D++] = new Option(arrMonths[G], G + 1, true, true)
        } else {
            document.forma.mes_desde.options[D++] = new Option(arrMonths[G], G + 1, false, false)
        }
    }
    A = 12 - document.forma.mes_desde.length + 1;
    if (A <= H) {
        J = H - A;
        document.forma.mes_desde.options[J].selected = true
    } else {
        document.forma.mes_desde.options[0].selected = true
    }
    fillDaysSelect(C, document.forma.mes_desde.value, document.forma.dia_desde, B)
}
function fillDayConstanteDesde(F, B, H) {
    var D;
    var C;
    var A = 0;
    var G;
    var E;
    cleanSelect(document.forma.dia_desde);
    if ((F == intCurrentYear) && (B == intCurrentMonth)) {
        C = intCurrentDay
    } else {
        C = 1
    }
    G = arrDays[B - 1];
    if (B == 2) {
        if (F % 4 == 0) {
            G++
        }
    }
    for (D = C; D <= G; D++) {
        if ((intSelectedYear == F) && (intSelectedMonth == B) && (intSelectedDay == D - 1) && (blnFromLoad)) {
            document.forma.dia_desde.options[A++] = new Option(D, D, true, true)
        } else {
            document.forma.dia_desde.options[A++] = new Option(D, D, false, false)
        }
    }
    if (document.forma.dia_desde.length >= H) {
        document.forma.dia_desde.options[H - 1].selected = true
    } else {
        E = document.forma.dia_desde.length;
        document.forma.dia_desde.options[E - 1].selected = true
    }
    if ((F == intCurrentYear) && (B == intCurrentMonth)) {
        if ((H >= C) && (H <= D - 1)) {
            cont = 0;
            indice = 0;
            for (s = C; s <= D - 1; s++) {
                if (s == H) {
                    indice = cont
                }
                cont = cont + 1
            }
            document.forma.dia_desde.options[indice].selected = true
        } else {
            document.forma.dia_desde.options[0].selected = true
        }
    }
}
function fillDayConstanteHasta(B, A, C) {
    document.forma.dia_hasta.options[C - 1].selected = true
}
function fillYearConstantehasta(A) {
    cleanSelect(document.forma.anio_hasta);
    intCurrentYear = A;
    document.forma.anio_hasta.options[0] = new Option(intCurrentYear, intCurrentYear, false, false);
    document.forma.anio_hasta.options[1] = new Option(intCurrentYear + 1, intCurrentYear + 1, false, false);
    if ((intSelectedYear > 0) && (intSelectedYear != intCurrentYear)) {
        document.forma.anio_hasta.options[1].selected = true
    }
}
function fillMonthConstantehasta(C, H, K) {
    var G;
    var F;
    var D = 0;
    var I;
    var E;
    var A;
    var J;
    var B;
    cleanSelect(document.forma.mes_hasta);
    if (C == intCurrentYear) {
        F = intCurrentMonth - 1
    } else {
        F = 0
    }
    E = 11;
    for (G = F; G <= E; G++) {
        if ((intSelectedYear == C) && (intSelectedMonth == G) && (B)) {
            document.forma.mes_hasta.options[D++] = new Option(arrMonths[G], G + 1, true, true)
        } else {
            document.forma.mes_hasta.options[D++] = new Option(arrMonths[G], G + 1, false, false)
        }
    }
    A = 12 - document.forma.mes_hasta.length + 1;
    if (A <= H) {
        J = H - A;
        document.forma.mes_hasta.options[J].selected = true
    } else {
        document.forma.mes_hasta.options[0].selected = true
    }
    fillDaysSelect(C, document.forma.mes_hasta.value, document.forma.dia_hasta, B)
}
function fillDayConstantehasta(F, B, H) {
    var D;
    var C;
    var A = 0;
    var G;
    var E;
    cleanSelect(document.forma.dia_hasta);
    if ((F == intCurrentYear) && (B == intCurrentMonth)) {
        C = intCurrentDay
    } else {
        C = 1
    }
    G = arrDays[B - 1];
    if (B == 2) {
        if (F % 4 == 0) {
            G++
        }
    }
    for (D = C; D <= G; D++) {
        if ((intSelectedYear == F) && (intSelectedMonth == B) && (intSelectedDay == D - 1) && (blnFromLoad)) {
            document.forma.dia_hasta.options[A++] = new Option(D, D, true, true)
        } else {
            document.forma.dia_hasta.options[A++] = new Option(D, D, false, false)
        }
    }
    if (document.forma.dia_hasta.length >= H) {
        document.forma.dia_hasta.options[H - 1].selected = true
    } else {
        E = document.forma.dia_hasta.length;
        document.forma.dia_hasta.options[E - 1].selected = true
    }
    if ((F == intCurrentYear) && (B == intCurrentMonth)) {
        if ((H >= C) && (H <= D - 1)) {
            cont = 0;
            indice = 0;
            for (s = C; s <= D - 1; s++) {
                if (s == H) {
                    indice = cont
                }
                cont = cont + 1
            }
            document.forma.dia_hasta.options[indice].selected = true
        } else {
            document.forma.dia_hasta.options[0].selected = true
        }
    }
}
function fillDayConstanteHasta(B, A, C) {
    document.forma.dia_hasta.options[C - 1].selected = true
}
function fillDaysSelectTo(C, A, D, B) {
    myDate.setDate(myDate.getDate() + 7);
    AssignDate(myDate);
    fillDaysSelect(C, A, D, B);
    myDate = new Date();
    AssignDate(myDate)
}
function fillDaysSelectFrom(C, A, D, B) {
    myDate.setDate(myDate.getDate() + 14);
    AssignDate(myDate);
    fillDaysSelect(C, A, D, B);
    myDate = new Date();
    AssignDate(myDate)
}
function AssignDate(A) {
    intSelectedYear = A.getFullYear() + "";
    intSelectedMonth = (A.getMonth() + 1) + "";
    intSelectedDay = A.getDate() + ""
}
function fillDaysSelect(H, G, A, B) {
    var F;
    var E;
    var C = 0;
    var D;
    var I;
    var J = A.value;
    cleanSelect(A);
    if ((H == intCurrentYear) && (G == intCurrentMonth)) {
        E = intCurrentDay
    } else {
        E = 1
    }
    D = arrDays[G - 1];
    if (G == 2) {
        if (H % 4 == 0) {
            D++
        }
    }
    for (F = E; F <= D; F++) {
        if ((intSelectedYear == H) && (intSelectedMonth == G) && (intSelectedDay == F - 1) && (B)) {
            A.options[C++] = new Option(F, F, true, true)
        } else {
            A.options[C++] = new Option(F, F, false, false)
        }
    }
    if ((A.length >= J) && (J != "")) {
        A.options[J - 1].selected = true
    } else {
        I = A.length;
        if (A.length > 0) {
            A.options[I - 1].selected = true
        }
    }
    if ((H == intCurrentYear) && (G == intCurrentMonth)) {
        if ((J >= E) && (J <= F - 1)) {
            cont = 0;
            indice = 0;
            for (s = E; s <= F - 1; s++) {
                if (s == J) {
                    indice = cont
                }
                cont = cont + 1
            }
            A.options[indice].selected = true
        } else {
            A.options[0].selected = true
        }
    }
}
function fillMonthsSelectTo(C, D, B, A) {
    myDate.setDate(myDate.getDate() + 7);
    AssignDate(myDate);
    fillMonthsSelect(C, D, B, A);
    myDate = new Date();
    AssignDate(myDate)
}
function fillMonthsSelectFrom(C, D, B, A) {
    myDate.setDate(myDate.getDate() + 14);
    AssignDate(myDate);
    fillMonthsSelect(C, D, B, A);
    myDate = new Date();
    AssignDate(myDate)
}
function fillMonthsSelect(K, B, I, C) {
    var G;
    var F;
    var D = 0;
    var J;
    var E;
    var A;
    var L;
    var H = B.value;
    cleanSelect(B);
    if (K == intSelectedYear) {
        F = intSelectedMonth - 1
    } else {
        F = 0
    }
    E = 11;
    for (G = F; G <= E; G++) {
        if ((intSelectedYear == K) && (intSelectedMonth == G) && (C)) {
            B.options[D++] = new Option(arrMonths[G], G + 1, true, true)
        } else {
            B.options[D++] = new Option(arrMonths[G], G + 1, false, false)
        }
    }
    A = 12 - B.length + 1;
    if (A <= H) {
        L = H - A;
        B.options[L].selected = true
    } else {
        B.options[0].selected = true
    }
    fillDaysSelect(K, B.value, I, C)
}
function fillYearsSelect(A) {
    cleanSelect(A);
    A.options[0] = new Option(intCurrentYear, intCurrentYear, false, false);
    A.options[1] = new Option(intCurrentYear + 1, intCurrentYear + 1, false, false);
    if ((intSelectedYear > 0) && (intSelectedYear != intCurrentYear)) {
        A.options[1].selected = true
    }
}
function DateAdd(C, B, A, F) {
    var D = new Date(C.getTime());
    var E = F;
    var G = D.getMonth() + A;
    if (G > 11) {
        E = Math.floor((G + 1) / 12);
        G -= 12 * E;
        E += F
    }
    D.setMonth(G);
    D.setFullYear(D.getFullYear() + E);
    D.setTime(D.getTime() + 60000 * 60 * 24 * B);
    return D
}
function YearAdd(A, B) {
    return DateAdd(A, 0, 0, B)
}
function MonthAdd(B, A) {
    return DateAdd(B, 0, A, 0)
}
function DayAdd(B, A) {
    return DateAdd(B, A, 0, 0)
}
function Fecha(H, C, E) {
    i = 0;
    j = 0;
    k = 0;
    var B;
    var F;
    var D;
    while (i <= 3) {
        if (document.forma.anio_desde[i].value == E) {
            B = i;
            break
        }
        i = i + 1
    }
    document.forma.anio_desde.options.selectedIndex = B;
    fillMonthsSelect(document.forma.anio_desde.value, document.forma.mes_desde, document.forma.dia_desde, false);
    while (j <= 13) {
        if (document.forma.mes_desde[j].value == C) {
            F = j;
            break
        }
        j = j + 1
    }
    document.forma.mes_desde.options.selectedIndex = F;
    fillDaysSelect(document.forma.anio_desde.value, document.forma.mes_desde.value, document.forma.dia_desde, false);
    while (k <= 32) {
        if (document.forma.dia_desde[k].value == H) {
            D = k;
            break;
        }
        k = k + 1;
    }
    document.forma.dia_desde.options.selectedIndex = D;
    var A = (new Date(E, C, H));
    var G = DateAdd(A, 7, -1, 0);
    Anio2 = G.getYear();
    Mes2 = G.getMonth();
    Mes2 = Mes2 + 1;
    Dia2 = G.getDate();
    i = 0;
    j = 0;
    k = 0;
    document.forma.submit()
}
function FechaTour(H, C, E) {
    i = 0;
    j = 0;
    k = 0;
    var B;
    var F;
    var D;
    while (i <= 3) {
        if (document.form_Activities.anio_tour1[i].value == E) {
            B = i;
            break;
        }
        i = i + 1;
    }
    document.form_Activities.anio_tour1.options.selectedIndex = B;
    fillMonthsSelect(document.form_Activities.anio_tour1.value, document.form_Activities.mes_tour1, document.form_Activities.dia_tour1, false);
    while (j <= 13) {
        if (document.form_Activities.mes_tour1[j].value == C) {
            F = j;
            break;
        }
        j = j + 1;
    }
    document.form_Activities.mes_tour1.options.selectedIndex = F;
    fillDaysSelect(document.form_Activities.anio_tour1.value, document.form_Activities.mes_tour1.value, document.form_Activities.dia_tour1, false);
    while (k <= 32) {
        if (document.form_Activities.dia_tour1[k].value == H) {
            D = k;
            break;
        }
        k = k + 1;
    }
    
    document.form_Activities.dia_tour1.options.selectedIndex = D;
    var A = (new Date(E, C, H));
    var G = DateAdd(A, 7, -1, 0);
}
function t1msnDestinos() {
    if (document.forma.Destino.value == "") {
        alert("Seleccione un destino de la lista.");
        return false;
    } else {
        return true;
    }
}

function fillDaysSelectNew(H, G, A, B)
{
    var indice, cont;
    var F;
    var E;
    var C = 0;
    var D;
    var I;
    var J = A.value;
    cleanSelect(A);
    E = 1;
    D = arrDays[G - 1];
    if (G === 2) {
        if ((H % 4) === 0) {
            D++;
        }
    }
    for (F = E; F <= D; F++) {
        if ((intSelectedYear === H) && (intSelectedMonth === G) && (intSelectedDay === F - 1) && (B)) {
            A.options[C++] = new Option(F, F, true, true);
        } else {
            A.options[C++] = new Option(F, F, false, false);
        }
    }
    if (A.length >= J) {
        A.options[J - 1].selected = true;
    } else {
        I = A.length;
        A.options[I - 1].selected = true;
    }
    if ((H === intCurrentYear) && (G === intCurrentMonth)) {
        if ((J >= E) && (J <= F - 1)) {
            cont = 0;
            indice = 0;
            for (var s = E; s <= F - 1; s++) {
                if (s === J) {
                    indice = cont;
                }
                cont = cont + 1;
            }
            A.options[indice].selected = true;
        } else {
            A.options[0].selected = true;
        }
    }
}
