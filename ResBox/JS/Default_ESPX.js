var CiudadesId = new Array("ACA", "AGU", "CPE", "CUN", "CUU", "MEX", "CME", "CJS", "CEN", "CVM", "CLQ", "CZM", "CVJ", "CUL", "DGO", "GDL", "GYM", "HMO", "HUX", "ZIH", "LAP", "LZC", "BJX", "LTO", "LMM", "ZLO", "MAM", "MZT", "MID", "MXL", "MTT", "LOV", "MTY", "MLM", "NLD", "OAX", "PDS", "PAZ", "PBC", "PXM", "PVR", "QRO", "REX", "SCX", "SLW", "SJD", "SLP", "TAM", "TAP", "TPQ", "TIJ", "TLC", "TRC", "TGZ", "VER", "VSA", "ZCL");
var CiudadesNombre = new Array("Acapulco (ACA)", "Aguascalientes (AGU)", "Campeche (CPE)", "Cancun (CUN)", "Chihuahua (CUU)", "Ciudad de Mexico (MEX)", "Ciudad del Carmen (CME)", "Ciudad Ju�rez (CJS)", "Ciudad Obreg�n (CEN)", "Ciudad Victoria (CVM)", "Colima (CLQ)", "Cozumel (CZM)", "Cuernavaca (CVJ)", "Culiac�n (CUL)", "Durango (DGO)", "Guadalajara (GDL)", "Guaymas (GYM)", "Hermosillo (HMO)", "Huatulco (HUX)", "Ixtapa/Zihuatanejo (ZIH)", "La Paz (LAP)", "L�zaro Cardenas (LZC)", "Le�n (BJX)", "Loreto (LTO)", "Los Mochis (LMM)", "Manzanillo (ZLO)", "Matamoros (MAM)", "Mazatl�n (MZT)", "Merida (MID)", "Mexicali (MXL)", "Minatitl�n (MTT)", "Monclova (LOV)", "Monterrey (MTY)", "Morelia (MLM)", "Nuevo Laredo (NLD)", "Oaxaca (OAX)", "Piedras Negras (PDS)", "Poza Rica (PAZ)", "Puebla (PBC)", "Puerto Escondido (PXM)", "Puerto Vallarta (PVR)", "Quer�taro (QRO)", "Reynosa (REX)", "Salina Cruz (SCX)", "Saltillo (SLW)", "San Jos� del Cabo (SJD)", "San Luis Potos� (SLP)", "Tampico (TAM)", "Tapachula (TAP)", "Tepic (TPQ)", "Tijuana (TIJ)", "Toluca (TLC)", "Torre�n (TRC)", "Tuxtla Guti�rrez (TGZ)", "Veracruz (VER)", "Villahermosa (VSA)", "Zacatecas (ZCL)");
var DestinosId = new Array("1", "49", "55", "46", "2", "66", "3", "92", "48", "11", "45", "53", "58", "36", "4", "57", "61", "15", "47", "14", "5", "6", "7", "35", "54", "71", "8", "30", "9", "10", "70", "107", "32", "51", "17", "68", "78", "16", "39", "52", "12", "40", "13", "74", "76", "59", "69", "64", "65", "56", "43", "41", "50", "67", "44", "73", "77", "31", "42", "72", "93", "60");
var DestinosNombre = new Array("Acapulco", "Aguascalientes", "Barrancas del Cobre", "Campeche", "Cancun", "Chetumal", "Chiapas", "Chichen Itza", "Chihuahua", "Ciudad de Mexico", "Ciudad del Carmen", "Ciudad Juarez", "Coahuila", "Costa Alegre", "Cozumel", "Cuernavaca", "Durango", "Guadalajara", "Guanajuato", "Holbox", "Huatulco", "Isla Mujeres", "Ixtapa y Zihuatanejo", "La Paz", "Leon", "Loreto", "Los Cabos", "Manzanillo", "Mazatlan", "Merida", "Mexicali", "Michoacan", "Monterrey", "Morelia", "Oaxaca", "Pachuca", "Palenque", "Playa del Carmen", "Puebla", "Puerto Escondido", "Puerto Vallarta", "Queretaro", "Riviera Maya", "Saltillo", "San Cristobal de las Casas", "San Luis Potosi", "San Miguel de Allende", "Sinaloa", "Sonora", "Tamaulipas", "Tampico", "Taxco", "Tijuana y Rosarito", "Tlaxcala", "Toluca", "Torreon", "Tuxtla Gutierrez", "Veracruz", "Villahermosa", "Xalapa", "Yucatan", "Zacatecas");

function FillHotelDestinations(C) {
    for (var A = 0; A < DestinosNombre.length; A++) {
        var B = document.createElement("option");
        B.appendChild(document.createTextNode(DestinosNombre[A]));
        B.setAttribute("value", DestinosId[A]);
        C.appendChild(B)
    }
}

function FillPackageCities(C) {
    for (var A = 0; A < CiudadesNombre.length; A++) {
        var B = document.createElement("option");
        B.appendChild(document.createTextNode(CiudadesNombre[A]));
        B.setAttribute("value", CiudadesNombre[A]);
        C.appendChild(B)
    }
}
;