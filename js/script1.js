var mes = ["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SET","OCT","NOV","DIC" ];

var meses = meses || {};

var ENE = new Array()
ENE[1] = "Año Nuevo";

var FEB = new Array();

var MAR = new Array()
MAR[0] = "MAR"
MAR[8] ="Día Internacional de la Mujer"
MAR[14] = "Nacimiento de Albert Einstein"
MAR[15] = "Día Mundial de los Derechos del Consumidor"
MAR[21] = "Día Internacional del Síndrome de Down"
MAR[22] = "Día Mundial del Agua"
MAR[24] = "Día de la Lucha contra la Tuberculosis"
MAR[26] = "La Hora del Planeta"
MAR[28] = "Nacimiento de Mario Vargas Llosa";

var ABR = new Array()
ABR[0] = "ABR"
ABR[1] = "Día de la Educación"
ABR[2] = "Día Mundial del Libro Infantil"
ABR[7] = "Día Mundial de la Salud"
ABR[8] = "Aniversario del Sacrificio Heroico de Pedro Vilca Apaza"
ABR[12] = "Nacimiento del Inca Garcilaso de La Vega"
ABR[14] = "Día de las Américas"
ABR[15] = "Fallecimiento de César Vallejo"
ABR[15] = "Nacimiento del prócer Toribio Rodríguez de Mendoza"
ABR[18] = "Día de la Educación Básica Alternativa"
ABR[22] = "Día de la Tierra"
ABR[23] = "Día Mundial del Libro y del Derecho de Autor"
ABR[23] = "Día del Idioma Español";

var MAY = new Array()
MAY[0] = "MAY"
MAY[1] = "Día Mundial del Trabajo"
MAY[2] = "Aniversario del Combate del Dos de Mayo"
MAY[3] = "Día de la Libertad de Prensa"
MAY[8] = "Día Mundial de la Cruz Roja"
MAY[11] = "Aniversario de la acción heroica de María Parado de Bellido"
MAY[12] = "Día Escolar de las Matemáticas"
MAY[12] = "Día Internacional para la Erradicación del Trabajo Infantil"
MAY[12] = "Día del Prócer Toribio Rodríguez de Mendoza"
MAY[14] = "Día de la Madre"
MAY[15] = "Día Internacional de la Familia"
MAY[17] = "Día Mundial del Internet"
MAY[18] = "Día Internacional de los Museos"
MAY[18] = "Sacrificio heroico de Túpac Amaru II y Micaela Bastidas"
MAY[21] = "El Combate de Iquique"
MAY[22] = "Día Internacional de la Diversidad Biológica"
MAY[25] = "Día de la Educación Inicial"
MAY[26] = "Día de la Integración Andina"
MAY[28] = "Día Internacional del Juego"
MAY[30] = "Día Nacional de la Papa"
MAY[31] = "Día del no Fumador"
MAY[31] = "Día de la Solidaridad";

var JUN = new Array()
JUN[0] = "JUN"
JUN[2] = "Día del Prócer Faustino Sánchez Carrión"
JUN[3] = "Fallecimiento de Julio C. Tello, padre de la Arqueología Peruana"
JUN[4] = "Día Internacional de los Niños Víctimas Inocentes de la Agresión"
JUN[5] = "Día Mundial del Medio Ambiente"
JUN[7] = "Aniversario de la Batalla de Arica y Día del Héroe Francisco Bolognesi"
JUN[8] = "Día Mundial de los Océanos"
JUN[12] = "Día Mundial Contra el Trabajo Infantil"
JUN[12] = "Día del Prócer Toribio Rodríguez de Mendoza"
JUN[15] = "Día de la Canción Andina"
JUN[17] = "Día Mundial de Lucha Contra la Desertificación y la Sequía"
JUN[18]= "Día del Padre"
JUN[20] = "Aniversario del primer grito de Francisco de Zela"
JUN[22] = "Fallecimiento de Manuel González Prada"
JUN[24] = "Día de la Fiesta del Sol o Inti Raymi"
JUN[24] = "Día del Campesino"
JUN[26] = "Día Internacional de la Preservación de los Bosques Tropicales"
JUN[26] = "Día Internacional de las Naciones Unidas en Apoyo de las Víctimas de la Tortura"
JUN[26] = "Día de la Lucha Contra el Tráfico Ilícito y el Uso Indebido de Drogas"
JUN[26] = "Día del Registro del Estado Civil"
JUN[28] = "Día Nacional del Cebiche"
JUN[29] = "Día del Papa - San Pedro y San Pablo"
JUN[29] = "Día del Sacrificio del Mártir José Olaya Balandra";

var JUL = new Array()
JUL[0] = "JUL"
JUL[1] = "Día del Parque Nacional Huascarán"
JUL[6] = "Día del Maestro"
JUL[7] = "Descubrimiento de Machu Picchu"
JUL[7] = "Nace José María Eguren"
JUL[9] = "Día de las Batallas de Pucará, Marcavalle y Concepción"
JUL[10] = "Aniversario de la Batalla de Huamachuco"
JUL[11] = "Día Mundial de la Población"
JUL[12] = "Nacimiento de Pablo Neruda, poeta"
JUL[15] = "Aniversario de la Muerte del Coronel Leoncio Prado"
JUL[21] = "Fallecimiento del pintor Sérvulo Gutiérrez"
JUL[23] = "Día del héroe capitán FAP José Abelardo Quiñones"
JUL[24] = "Nacimiento del Libertador Simón Bolívar"
JUL[24] = "Nacimiento de Francisco Antonio de Zela"
JUL[24] = "Día de los gloriosos hechos de armas de Zarumilla"
JUL[28] = "Día de la Proclamación de la Independencia del Perú";

var AGO = new Array()
AGO[0] = "AGO"
AGO[6] = "Batalla de Junín"
AGO[9] = "Día Internacional de las Poblaciones Indígenas"
AGO[17] = "Muerte del General don José de San Martín"
AGO[22] = "Día Mundial del Folclor"
AGO[26] = "Día del Adulto Mayor"
AGO[27] = "Día de la Defensa Nacional"
AGO[28] = "Reincorporación de Tacna al seno de la Patria"
AGO[30] = "Día de Santa Rosa de Lima"
AGO[31] = "Día del Mariscal Ramón Castilla";

var SET = new Array()
SET[0] = "SET"
SET[1] = "Semana de la Educación Vial"
SET[7] = "Día de los Derechos Cívicos de la Mujer"
SET[8] = "Día Internacional de la Alfabetización"
SET[8] = "Aniversario del Desembarco de la Expedición Libertadora de San Martín en Paracas"
SET[11] - "Día Mundial de la Población"
SET[16] = "Día Internacional para la Protección de la Capa de Ozono."
SET[23] = "Día de la Primavera, de la Juventud"
SET[22] = "Semana Nacional de los Derechos Humanos"
SET[24] = "Día del poeta José Gálvez Barrenechea"
SET[25] = "Aniversario de Antonio Raimondi"
SET[27] = "Día Mundial del Turismo"
SET[29] = "Día Mundial de los Mares";

var OCT = new Array
OCT[0] = "OCT"
OCT[1] = "Día del Periodismo"
OCT[1] = "Semana del Niño"
OCT[5] = "Aniversario de la Acción Heroica de Daniel Alcides Carrión"
OCT[6] = "Día del ilustre tradicionalista don Ricardo Palma"
OCT[8] = "Día del Combate de Angamos"
OCT[12] = "Descubrimiento de América"
OCT[16] = "Día Nacional de la Persona con Discapacidad"
OCT[16] = "Día Mundial de la Alimentación"
OCT[16] = "Día de las Naciones Unidas"
OCT[17] = "Día Internacional para la Erradicación de la Pobreza"
OCT[21] = "Día Nacional de Ahorro de Energía"
OCT[31] = "Día de la Canción Criolla";

var NOV = new Array
NOV[0] = "NOV"
NOV[1] = "Semana Nacional Forestal"
NOV[4] = "Rebelión de Túpac Amaru II"
NOV[10] ="Semana de la Biblioteca Escolar"
NOV[20] ="Día de la Declaración Universal de los Derechos del Niño e Iniciación de la Semana del Niño"
NOV[27] ="Batalla de Tarapacá";

var DIC = new Array()
DIC[0] = "DIC"
DIC[1] = "Día Mundial de la Lucha contra el SIDA"
DIC[9] = "Aniversario de la Batalla de Ayacucho"
DIC[10] = "Declaración Universal de los Derechos Humanos"
DIC[14] = "Día del Cooperativismo Peruano"
DIC[25] = "Navidad";

var hoy = new Date();
var M = hoy.getMonth();
var D = hoy.getDate();


function fechasCalendario(){

	var calendario = document.getElementById("fechas");

var i = 0;
 
	while (i <= 5)
	{

		switch (M)
		{
			case 0:
				var mesN = ENE;
				break;
			case 1:
				var mesN = FEB;
				break;
			case 2:
				var mesN = MAR;
				break;
			case 3:
				var mesN = ABR;
				break;
			case 4:
				var mesN = MAY;
				break;
			case 5:
				var mesN = JUN;
				break;
			case 6:
				var mesN = JUL;
				break
			case 7:
				var mesN = AGO;
				break;
			case 8:
				var mesN = SET;
				break;
			case 9:
				var mesN = OCT;
				break;
			case 10:
				var mesN = NOV;
				break;
			case 11:
				var mesN = DIC;
				break;
		}

		while ( D<= 31 && i<=5)
		{
		
			if (mesN[D] != undefined) 
			{
				i= i + 1;
			var nodo1 = document.createElement("article");
			var nodo2 = document.createElement("h3");
			var nodo3 = document.createElement("p");
			var fecha = document.createTextNode( D + " de "+ mes[M]);
			var celebracion = document.createTextNode(mesN[D]);

			nodo2.appendChild(fecha);
			nodo1.appendChild(nodo2);
			nodo3.appendChild(celebracion);
			nodo1.appendChild(nodo3);
			calendario.appendChild(nodo1);
			nodo1.setAttribute("class","\" calend col-xs-6 col-sm-4 col-lg-2 \"");
			}
		D=D+1;
		}
		D=1;

		M = M + 1;
		if (M == 12) 
		{
			M = 0;
		}
	
	}
}


/*function cambioAltura()
		{
		var ancho = (window.innerWidth)
		var alto = String((window.innerWidth/3)+ "px") ; // ancho
		
		if (ancho >= 1200) {
		var alto = String((window.innerWidth/3)+ "px") ;
		}
		var scarrusel = document.getElementById("SCarrusel");
		scarrusel.style.height = alto ;

		}

		setInterval('cambioAltura()',1000);

*/

function focoBE()
{
 document.getElementById("beneficios").focus();
}

function focoAN()
{
 document.getElementById("anuncios").focus();
}

function focoNO()
{
 document.getElementById("noticias").focus();
}

function focoCA()
{
 document.getElementById("calencario").focus();
}	

function focoGA()
{
 document.getElementById("galeria").focus();
}

function focoMU()
{
 document.getElementById("multimedia").focus();
}

function focoIN()
{
 document.getElementById("arriba").focus();
}

//validaciones
function conmetario()
{	
	alert("Conectado");
	var valor = document.getElementById("Nombre").value;
	alert(valor);

    if (valor.length == 0) 
    {
        alert("Campo Nombre no puede quedar vacio");
        document.formulario.Nombre.focus();
        return false;
    }

    valor = document.getElementById("Apellido").value;
    if (valor.length == 0) 
    {
        alert("El campo Apellido no puede quedar vacio");
        document.formulario.Apellido.focus();
        return false;
    }
    valor = document.getElementById("Cemail").value;
     if (valor.length == 0) 
    {
        alert("El campo email no puede quedar vacio");
        document.formulario.Cemail.focus();
        return false;
    }
    valor = document.getElementById("Comentario").value;
    if (valor.length == 0) 
    {
    	alert("El campo email no puede quedar vacio");
        document.formulario.Comentario.focus();
        return false;
    }
}

$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});