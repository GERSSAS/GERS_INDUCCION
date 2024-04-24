$(document).ready(function () {
  // item 1
  $("#sl21_drag1").draggable({
    revert: 'invalid',
    snap: '#sl21_drop1',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop1").droppable({
    accept: '#sl21_drag1',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });

  // item 2
  $("#sl21_drag2").draggable({
    revert: 'invalid',
    snap: '#sl21_drop1',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop2").droppable({
    accept: '#sl21_drag2',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });

  // item 3
  $("#sl21_drag3").draggable({
    revert: 'invalid',
    snap: '#sl21_drop3',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop3").droppable({
    accept: '#sl21_drag3',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });

  // item 4
  $("#sl21_drag4").draggable({
    revert: 'invalid',
    snap: '#sl21_drop4',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop4").droppable({
    accept: '#sl21_drag4',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });

  // item 5
  $("#sl21_drag5").draggable({
    revert: 'invalid',
    snap: '#sl21_drop5',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop5").droppable({
    accept: '#sl21_drag5',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });

  // item 6
  $("#sl21_drag6").draggable({
    revert: 'invalid',
    snap: '#sl21_drop6',
    snapMode: 'corner',
    snapTolerance: '22'
  });
  $("#sl21_drop6").droppable({
    accept: '#sl21_drag6',
    drop: function( ev, ui ) {
      ui.draggable.detach();
      $(this).append( ui.draggable );
      $(this).addClass("correct");
    }
  });


//Para generar el TOOLTIP para el slide 10
$(function() {
$('.actOrderElement li img').each(function() {
var concepto;

switch ($(this).closest('li').attr('value')) {
case '1':
  concepto = 'Coexistir con comunidades es convivir en armonía y respeto mutuo, promoviendo la paz y la equidad.';
  break;
case '2':
  concepto = 'Eficiencia operacional es hacer más con menos recursos, optimizando procesos para alcanzar resultados óptimos.';
  break;
case '3':
  concepto = 'Proteger el medio ambiente mediante prácticas responsables y sostenibles.';
  break;
case '4':
  concepto = 'Destinando recursos para mejorar la calidad de vida y promover el desarrollo comunitario.';
  break;
case '5':
  concepto = 'Garantizar condiciones seguras y promover el bienestar físico y mental de las personas en entornos laborales y sociales.';
  break;
case '6':
  concepto = 'Divulgar información para rendir cuentas y construir confianza.';
  break;
default:
  concepto = 'Concepto por defecto';
}

$(this).attr('title', concepto).tooltip();
});
});


//Para generar el TOOLTIP para el slide 18
$(function() {
$('.iconos-uniforme img').each(function() {

var imgSrc;
var $img = $('<img>');
switch ($(this).attr('value')) {
case '1':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-lampara.png';
  break;
case '2':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-casco.png';
  break;
case '3':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-gafas.png';
  break;
case '4':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-protector.png';
  break;
case '5':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-repistaorio.png';
  break;
case '6':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-guantes.png';
  break;
case '7':
  imgSrc = 'assets/img/vestuario-mina/uniforme-mina-botas.png';
  break;
}

$(this).attr('title', '<img src="' + imgSrc + '">').tooltip({
html: true,
track: true
});
});
});

//Para generar el TOOLTIP para el slide 19
$(function() {
$('.iconos-vestuario-oficina img').each(function() {

var descripcion;
switch ($(this).attr('value')) {
case '1':
  descripcion = 'Uso de camisa empresarial';
  break;
case '2':
  descripcion = 'Uso de blue jeans sin rotos, desgastes o decorados fuertes';
  break;
case '3':
  descripcion = 'Uso de botas de seguridad';
  break;
}

$(this).attr('title',descripcion ).tooltip({
html: true,
track: true
});
});
});

//Para generar el TOOLTIP para el slide 20
$(function() {
$('.iconos-vestuario-oficina-2 img').each(function() {

var descripcion_vestuario;
switch ($(this).attr('value')) {
case '1':
  descripcion_vestuario = 'Evitar faldas y vestidos demasiado cortos';
  break;
case '2':
  descripcion_vestuario = 'Las blusas no deben tener escotes exagerados ni ser demasiado cortas';
  break;
case '3':
  descripcion_vestuario = 'Los jeans no deben tener roturas, desgaste excesivo ni decoraciones llamativas';
  break;
}

$(this).attr('title',descripcion_vestuario ).tooltip({
html: true,
track: true
});
});
});

var canvas = document.getElementById("firmaCanvas");
var signaturePad = new SignaturePad(canvas);

// Para borrar la firma
$("#borrarFirmaBtn").on("click", function () {
signaturePad.clear();
});

// Para obtener la imagen de la firma como base64
$("#guardarFirmaBtn").on("click", function () {
var firmaImagen = signaturePad.toDataURL();
// Puedes enviar la firmaImagen a tu servidor o realizar otras acciones con ella.
console.log(firmaImagen);
});

// Mover el tooltip junto con el cursor
// $('#main-image').mousemove(function (e) {
//   if(e.pageX >= 1075 && e.pageX <= 1109 && e.pageY >= 90 && e.pageY <= 117){
//     $('#img-1').show();
//   }else{
//     $('#img-1').hide();
//   }

//   if(e.pageX >= 1074 && e.pageX <= 1125 && e.pageY > 115 && e.pageY <= 128){
//     $('#img-2').show();
//     $('#img-2').css('margin-top', '15px');

//   }else{
//     $('#img-2').hide();
//   }

//   if(e.pageX >= 1076 && e.pageX <= 1112 && e.pageY > 137 && e.pageY <= 147){
//     $('#img-3').show();
//     $('#img-3').css('margin-top', '35px');

//   }else{
//     $('#img-3').hide();
//   }
//   // console.log(e.pageX);

//   if(e.pageX >= 1116 && e.pageX <= 1135 && e.pageY > 147 && e.pageY <= 159){
//     $('#img-4').show();
//     $('#img-4').css('margin-top', '45px');

//   }else{
//     $('#img-4').hide();
//   }

//   if(e.pageX >= 1065 && e.pageX <= 1100 && e.pageY > 160 && e.pageY <= 188){
//     $('#img-5').show();
//     $('#img-5').css('margin-top', '55px');

//   }else{
//     $('#img-5').hide();
//   }

//   if(e.pageX >= 1135 && e.pageX <= 1168 && e.pageY >= 290 && e.pageY <= 325 ){
//     $('#img-6').show();
//     $('#img-6').css('margin-top', '150px');

//   }else{
//     $('#img-6').hide();
//   }

//   if(e.pageX >= 1038 && e.pageX <= 1075 && e.pageY >= 455 && e.pageY <= 485 ){
//     $('#img-7').show();
//     $('#img-7').css('margin-top', '200px');

//   }else{
//     $('#img-7').hide();
//   }
// });

$('.zoom').magnify();
sistemaVotacion();
preguntas01();
preguntas02();
preguntas03();
preguntas04();
//img 01 grag & drop
$("#actPuzzleDra01").draggable({
snap: '#actPuzzleDro01'
});
$("#actPuzzleDro01").droppable({
accept: '#actPuzzleDra01'
}).on('droppable:drop',function(e){
$(this).find('.imgPz').remove();
reproducirAudio();
});

//img02 grag & drop
$("#actPuzzleDra02").draggable({
snap: '#actPuzzleDro02'
});
$("#actPuzzleDro02").droppable({
accept: '#actPuzzleDra02'
}).on('droppable:drop',function(e){
$(this).find('.imgPz').remove();
});

//img03 grag & drop
$("#actPuzzleDra03").draggable({
snap: '#actPuzzleDro03'
});
$("#actPuzzleDro03").droppable({
accept: '#actPuzzleDra03'
}).on('droppable:drop',function(e){
$(this).find('.imgPz').remove();
});





$(function() {
$("#actOrderElement").sortable({
revert: true,
stop: function(event, ui) {
console.log("pl");
}
});
$( "#actOrderElement" ).disableSelection();

$("#actOrderElement2").sortable({
revert: true,
stop: function(event, ui) {
console.log("pl");
}
});
$( "#actOrderElement2" ).disableSelection();
});


//TRACKING
$("#actividad_1").on("click", function() {
trackingManager.startTracking("actividad_1");
trackingManager.stopTracking("actividad_1");
});

$("#actividad_5").on({
play:function(){
trackingManager.startTracking("actividad_5");
trackingManager.stopTracking("actividad_5");
}
  });

$("#actividad_5").on({
play:function(){
trackingManager.startTracking("actividad_5");
trackingManager.stopTracking("actividad_5");
}
});

$("#actividad_6").on({
play:function(){
trackingManager.startTracking("actividad_6");
trackingManager.stopTracking("actividad_6");
}
});

$("#actividad_7").on({
play:function(){
trackingManager.startTracking("actividad_7");
trackingManager.stopTracking("actividad_7");
}
});

//TRACKING


$("#llamada-correcta").on({
play:function(){
trackingManager.startTracking("llamada-correcta");
trackingManager.stopTracking("llamada-correcta");
}
});

$("#grupo_whatsapp").on("click", function() {
trackingManager.startTracking("grupo_whatsapp");
trackingManager.stopTracking("grupo_whatsapp");
});


// Comportamiento de acordeón en dispositivos móviles
$(".accordion-label").click(function () {
$(this).siblings(".accordion-content").slideToggle();
});

setTimeout(() => {
$(".actVorF .tol").html($(".itemQ").length);
}, "2000");

$("#drop1, #drop2, #drop3, #drop4, #drop5, #drop6").on("droppable:drop",
function (e) {
$(this).addClass("corret");
actualizarProgreso(); // Llama a la función para actualizar el progreso
}
);

$("#grupo_whatsapp").click(function () {
window.open('https://chat.whatsapp.com/G91Vr9cBLlwAWaXGmS1cB9','_blank');
});

arrastrarElemento();
// actualizarGrafico();
actualizarGrafico2();
// listaLlamadaCorrecta();
// listaLlamadaIncorrecta();
pausarMultimedia();
reproducirAudioImagen();

var selects = document.querySelectorAll('.select-opcion');

// Itera sobre cada select y agrega un evento de cambio
selects.forEach(function(select) {
select.addEventListener('change', function() {
  // Obtén el valor y la imagen asociada de la opción seleccionada
  var selectedValue = select.value;
  var selectedImage = select.options[select.selectedIndex].getAttribute('data-image');

  // Obtén la imagen dentro del div padre del select actual
  var image = select.closest('.actividad_slide_14').querySelector('.img-estructura');

  // Cambia la fuente de la imagen según la opción seleccionada
  image.src = 'assets/img/' + (selectedImage);
});
});



// var logoImage = document.getElementById("logoImage");
// function checkScreenWidth() {
//     var newImageSrc = window.innerWidth <= 768 ? "assets/img/logo_slide_05_movil.png" : "assets/img/logoW.png";
//     logoImage.src = newImageSrc;
// }
// window.onload = checkScreenWidth;
// window.addEventListener("resize", checkScreenWidth);

//Actualizar el progreso del curso cada vez que se avanza en los slides
$("#next").on('click', function() {
// updateProgress();
});
var carrusel_img = document.getElementById("carrusel");
carrusel_img.style.backgroundImage = 'url(assets/img/slide/Slide-1.jpg)';
carrusel();
popsAudios();

});

function changeImage2(element, newSrc) {
element.src = newSrc;
}

function popsAudios(){
var iconos = document.querySelectorAll('.icono');
var currentAudio = null;
iconos.forEach(function (icono, index) {
icono.addEventListener('click', function () {
    toggleAudio(icono.id, 'audio' + (index + 1));
});
});

function toggleAudio(iconId, audioId) {
var audio = document.getElementById(audioId);

if (currentAudio && currentAudio !== audio) {
    currentAudio.pause();
}

if (audio.paused) {
    audio.play();
    currentAudio = audio;
} else {
    audio.pause();
    currentAudio = null;
}
}
}

function carrusel() {
var carrusel = document.getElementById("carrusel");
var images = [];

// Generar URLs de imágenes con un bucle
for (var i = 1; i <= 19; i++) {
var img = document.createElement("img");
img.src = `assets/img/slide/Slide-${i}.jpg`;
carrusel.appendChild(img);
images.push(img);
// images.push(`url(assets/img/slide/Slide-${i}.jpg)`);
}

var currentImageIndex = 0;

function changeImage() {
images[currentImageIndex].classList.remove("active-img");
currentImageIndex = (currentImageIndex + 1) % images.length;
images[currentImageIndex].classList.add("active-img");
}
images[currentImageIndex].classList.add("active-img");
// Cambiar la imagen cada dos segundos
setInterval(changeImage, 2100);
}

var results = [];
var elements = [];

function Questions01(el, e) {
var index = elements.indexOf(el);
if (index === -1) {
  elements.push(el);
  results.push(e);
} else {
  results[index] = e;
}

$(el).addClass('act');
}

function sistemaVotacion(){
const estrellas = document.querySelectorAll('input[name="estrellas"]');
const resultado = document.querySelector('.resultado');
const estrellasLabels = document.querySelectorAll('.rating label');
// const course_code = $('#course_code').val();
// const module_id = $('#module_id').val();
// const unique_course_id = $('#unique_course_id').val();


// Función para obtener la calificación guardada en la base de datos
//  function obtenerCalificacionGuardada() {
//     $.ajax({
//         type: "POST",
//         url: "../../functions_helpers.php?sistema_votacion=2", // Cambia la URL a una que maneje la obtención de la calificación guardada
//         data: {
//             course_code: course_code,
//             module_id: module_id,
//             unique_course_id: unique_course_id
//         },
//         success: function (response) {

//             if (response ) {
//                 let responseData = JSON.parse(response);
//                 let numEstrellas = responseData.num_estrellas;
//                 resultado.innerHTML = `Has calificado con ${numEstrellas} estrella${numEstrellas === 1 ? '' : 's'}.<br>¡Gracias por tu calificación!`;
//                 estrellasLabels.forEach((label, i) => {
//                     if (i < numEstrellas) {
//                         label.style.backgroundImage = 'url("assets/img/estrella-llena.png")';
//                     } else {
//                         label.style.backgroundImage = 'url("assets/img/estrella-vacia.png")';
//                     }
//                 });
//             }
//         }
//     });
//  }

// obtenerCalificacionGuardada();

estrellas.forEach((estrella, index) => {
estrella.addEventListener('change', () => {
    resultado.innerHTML = `Has calificado con ${estrella.value} estrella${estrella.value === '1' ? '' : 's'}.<br>¡Gracias por tu calificación!`;
    
    // Llena todas las estrellas anteriores a la seleccionada
    estrellasLabels.forEach((label, i) => {
        if (i <= index) {
            label.style.backgroundImage = 'url("assets/img/estrella-llena.png")'; 
        } else {
            label.style.backgroundImage = 'url("assets/img/estrella-vacia.png")'; 
        }
    });
    //Guardar el numero de estrellas con que calificación
    // $.ajax({
    //     type: "POST", 
    //     url: "../../functions_helpers.php?sistema_votacion=1",
    //     data: {
    //         num_estrella: estrella.value,
    //         course_code : course_code,
    //         module_id : module_id,
    //         unique_course_id : unique_course_id
    //     },
    //     success: function (response) {
    //         console.log(response);
    //     }
    // });
});
});
}


function reproducirAudio() {
var audioPuzzle = document.getElementById('audio-puzzle');
if (audioPuzzle) {
audioPuzzle.play();
}
}

function actOrderElement(){
let cont = 0;
for(var i = 1; i <= $("#actOrderElement li").length; i++) {
if($("#actOrderElement li:nth-child(" + i + ")").attr("value") == i) {
$("#actOrderElement li:nth-child(" + i + ") img").addClass("correct");
$("#actOrderElement li:nth-child(" + i + ") .ico").attr("src", "../assets/imagenes/chulo.png");
cont++
} else {
$("#actOrderElement li:nth-child(" + i + ") img").addClass("incorrect");
$("#actOrderElement li:nth-child(" + i + ") .ico").attr("src", "../assets/imagenes/error.png");
}
}
}


function actOrderElement2(){
let cont = 0;
for(var i = 1; i <= $("#actOrderElement2 li").length; i++) {
if($("#actOrderElement2 li:nth-child(" + i + ")").attr("value") == i) {
$("#actOrderElement2 li:nth-child(" + i + ") img").addClass("correct");
$("#actOrderElement2 li:nth-child(" + i + ") .ico").attr("src", "../assets/imagenes/chulo.png");
cont++
} else {
$("#actOrderElement2 li:nth-child(" + i + ") img").addClass("incorrect");
$("#actOrderElement2 li:nth-child(" + i + ") .ico").attr("src", "../assets/imagenes/error.png");
}
}
}


function updateProgress(){
let code_course = $('#course_code').val();
let module_id = $('#module_id').val(); 
$.ajax({
type: "POST",
url: "../../../functions_helpers.php?progress_courses",
dataType: "json",
data:
{
  code_course: code_course,
  module_id: module_id
},
success: function(result)
{
  let courseProgress = result.course_progress;

  if (courseProgress === null || courseProgress === undefined) {
      $('#course-progress').html('<strong>0.0%</strong>');
  }else{
      $('#course-progress').html('<strong>' + courseProgress + '%</strong>');
  }
}
});
}

function reproducirAudioImagen(){
var audioActual = null;
let rutaActual = '';
var elementosInline = document.querySelectorAll('.inline');

elementosInline.forEach(function (elemento) {
elemento.addEventListener('click', function () {

  let rutaAudio = elemento.getAttribute('data-audio');

  if (audioActual !== null) {
      audioActual.pause();
  }

  let nuevoAudio = new Audio(rutaAudio);
  
  if (rutaAudio === rutaActual) {
    nuevoAudio.pause();
  } else {
      nuevoAudio.play();
      audioActual = nuevoAudio;
      rutaActual = rutaAudio;
  }

  $("#prev, #next").on("click", function () {
    nuevoAudio.pause();
  });

});
});
}

var results = [];
var elements = [];

function Questions(el, e) {
var index = elements.indexOf(el);
if (index === -1) {
  elements.push(el);
  results.push(e);
} else {
  results[index] = e;
}

$(el).addClass('act');
}

function valid(numCorrect) {
var correctCount = 0;
// var malCount = 0;
for (var i = 0; i < elements.length; i++) {
if (results[i] ) {
    $(elements[i]).addClass('true');
    correctCount++;
    if(correctCount == numCorrect){
        $('#respuesta_mal').hide();
        $('#respuesta').html('Respuesta correcta');
        $('#respuesta').show();
        // localStorage.setItem('slider21', 'ok');
        createProgCircle();
    }else{
        $('#respuesta_mal').html('Respuesta incorrecta');
        $('#respuesta_mal').show();
    }
} else {
    $('#respuesta_mal').html('Respuesta incorrecta');
    $('#respuesta_mal').show();
    $(elements[i]).addClass('false');
}
}

if (correctCount == numCorrect) {
for (var i = 0; i < elements.length; i++) {
    $(elements[i]).removeClass('false');
    $(elements[i]).removeClass('act');
}
$('#btn-valid').hide();
}

}


function preguntas01(){
var video  = document.getElementById('preguntas_01');
var actividad_h_01 = $('#actividad_h_01');

video.addEventListener("timeupdate", function() {
var currentTime = video.currentTime;
if (currentTime >= 73) {
    // $('.custom-split-div').hide();
    actividad_h_01.css('display', 'block'); 
}

video.addEventListener("seeked", function () {
    var currentTime = video.currentTime;
    if (currentTime >= 73) {
        // $('.custom-split-div').hide();
        actividad_h_01.css('display', 'block'); 
    }
    
});

});
}

// PREGUNTAS 02

var results2 = [];
var elements2 = [];

function Questions2(el, e) {
var index = elements2.indexOf(el);
if (index === -1) {
  elements2.push(el);
  results2.push(e);
} else {
  results2[index] = e;
}

$(el).addClass('act');
}



function valid2(numCorrect) {
var correctCount = 0;
// var malCount = 0;
for (var i = 0; i < elements2.length; i++) {
if (results2[i] ) {
    $(elements2[i]).addClass('true');
    correctCount++;
    if(correctCount == numCorrect){
        $('#respuesta_mal2').hide();
        $('#respuesta2').html('Respuesta correcta');
        $('#respuesta2').show();
    }else{
        $('#respuesta_mal2').html('Respuesta incorrecta');
        $('#respuesta_mal2').show();
    }
} else {
    $('#respuesta_mal2').html('Respuesta incorrecta');
    $('#respuesta_mal2').show();
    $(elements2[i]).addClass('false');
}
}

if (correctCount == numCorrect) {
for (var i = 0; i < elements2.length; i++) {
    $(elements2[i]).removeClass('false');
    $(elements2[i]).removeClass('act');
}
$('#btn-valid2').hide();
}

}

function preguntas02(){
var video  = document.getElementById('preguntas_02');
var actividad_h_02 = $('#actividad_h_02');

video.addEventListener("timeupdate", function() {
var currentTime = video.currentTime;
if (currentTime >= 70) {
    // $('.custom-split-div').hide();
    actividad_h_02.css('display', 'block'); 
}

video.addEventListener("seeked", function () {
    var currentTime = video.currentTime;
    if (currentTime >= 70) {
        // $('.custom-split-div').hide();
        actividad_h_02.css('display', 'block'); 
    }
    
});

});
}

function preguntas03(){
var video  = document.getElementById('preguntas_03');
var actividad_h_03 = $('#actividad_h_03');

video.addEventListener("timeupdate", function() {
var currentTime = video.currentTime;
if (currentTime >= 80) {
    // $('.custom-split-div').hide();
    actividad_h_03.css('display', 'block'); 
}

video.addEventListener("seeked", function () {
    var currentTime = video.currentTime;
    if (currentTime >= 80) {
        // $('.custom-split-div').hide();
        actividad_h_03.css('display', 'block'); 
    }
    
});

});
}


var results3 = [];
var elements3 = [];

function Questions3(el, e) {
var index = elements3.indexOf(el);
if (index === -1) {
  elements3.push(el);
  results3.push(e);
} else {
  results3[index] = e;
}

$(el).addClass('act');
}


function valid3(numCorrect) {
var correctCount = 0;
// var malCount = 0;
for (var i = 0; i < elements3.length; i++) {
if (results3[i] ) {
    $(elements3[i]).addClass('true');
    correctCount++;
    if(correctCount == numCorrect){
        $('#respuesta_mal3').hide();
        $('#respuesta3').html('Respuesta correcta');
        $('#respuesta3').show();
    }else{
        $('#respuesta_mal2').html('Respuesta incorrecta');
        $('#respuesta_mal3').show();
    }
} else {
    $('#respuesta_mal3').html('Respuesta incorrecta');
    $('#respuesta_mal3').show();
    $(elements3[i]).addClass('false');
}
}

if (correctCount == numCorrect) {
for (var i = 0; i < elements3.length; i++) {
    $(elements3[i]).removeClass('false');
    $(elements3[i]).removeClass('act');
}
$('#btn-valid3').hide();
}

}

function preguntas04(){
var video  = document.getElementById('preguntas_04');
var actividad_h_04 = $('#actividad_h_04');

video.addEventListener("timeupdate", function() {
var currentTime = video.currentTime;
if (currentTime >= 70) {
    // $('.custom-split-div').hide();
    actividad_h_04.css('display', 'block'); 
}

video.addEventListener("seeked", function () {
    var currentTime = video.currentTime;
    if (currentTime >= 70) {
        // $('.custom-split-div').hide();
        actividad_h_04.css('display', 'block'); 
    }
    
});

});
}


var results4 = [];
var elements4 = [];

function Questions4(el, e) {
var index = elements4.indexOf(el);
if (index === -1) {
  elements4.push(el);
  results4.push(e);
} else {
  results4[index] = e;
}

$(el).addClass('act');
}


function valid4(numCorrect) {
var correctCount = 0;
// var malCount = 0;
for (var i = 0; i < elements4.length; i++) {
if (results4[i] ) {
    $(elements4[i]).addClass('true');
    correctCount++;
    if(correctCount == numCorrect){
        $('#respuesta_mal4').hide();
        $('#respuesta4').html('Respuesta correcta');
        $('#respuesta4').show();
    }else{
        $('#respuesta_mal2').html('Respuesta incorrecta');
        $('#respuesta_mal4').show();
    }
} else {
    $('#respuesta_mal4').html('Respuesta incorrecta');
    $('#respuesta_mal4').show();
    $(elements4[i]).addClass('false');
}
}

if (correctCount == numCorrect) {
for (var i = 0; i < elements4.length; i++) {
    $(elements4[i]).removeClass('false');
    $(elements4[i]).removeClass('act');
}
$('#btn-valid4').hide();
}

}

function action() {
$(".slide_14 .ctItem").hide();
$(".slide_14 .ctItem button").show();
$(".slide_14 .ctItem .inst").hide();
$(".record").hide();
video_slide_14.pause();
}

function pausarMultimedia() {
var allMediaElements = document.querySelectorAll("audio, video");

allMediaElements.forEach(function (mediaElement) {
mediaElement.addEventListener("play", function () {
allMediaElements.forEach(function (otherMediaElement) {
if (otherMediaElement !== mediaElement && !otherMediaElement.paused) {
  otherMediaElement.pause();
}
});
});
});

//Funcionalidad que permite pausar los elementos multimedias que se este reproduciendo
$("#prev, #next").on("click", function () {
let allMediaElements = $("audio, video");
// Pausar cada elemento multimedia
allMediaElements.each(function () {
if (!this.paused) {
this.pause();
}
});
});
}

function listaLlamadaIncorrecta() {
let incorrect = document.getElementById("llamada-incorrecta");
let listItems = document.querySelectorAll(".custom-list-incorrect li");

let selectedLi = null;

function clickli(event) {
const selectedIndex = Array.from(listItems).indexOf(event.currentTarget);

const existingIcon = event.currentTarget.querySelector(".fa");
const existingBadge = event.currentTarget.querySelector(".badge");

if (existingIcon) {
event.currentTarget.removeChild(existingIcon);
}
if (existingBadge) {
event.currentTarget.removeChild(existingBadge);
}

if (selectedIndex === 0 || selectedIndex === 2) {
// event.currentTarget.classList.add("active");
// event.currentTarget.style.backgroundColor = "#89cf89";
const checkIcon = document.createElement("i");
checkIcon.className = "fa fa-check";
checkIcon.style.color = "#009200";
checkIcon.setAttribute("aria-hidden", "true");
event.currentTarget.insertBefore(
checkIcon,
event.currentTarget.firstChild
);
} else {
// event.currentTarget.classList.add("desactive");
// event.currentTarget.style.backgroundColor = "#db8a8a";
const checkIcon = document.createElement("i");
checkIcon.className = "fa fa-question";
checkIcon.style.color = "#df2828";
checkIcon.setAttribute("aria-hidden", "true");
event.currentTarget.insertBefore(
checkIcon,
event.currentTarget.firstChild
);
const badge = document.createElement("span");
badge.className = "badge";
badge.innerText = "Faltante";
badge.style.backgroundColor = "#EF455F";
badge.style.borderRadius = "9px";
badge.style.padding = "6px";
badge.style.margin = "6px";
event.currentTarget.appendChild(badge);
}

selectedLi = selectedIndex;
}

incorrect.addEventListener("play", function () {
textoIncorrecto = $("#textoIncorrecto");
textoIncorrecto.css("display", "block");
listItems.forEach((item, index) => {
item.style.display = "block";
item.addEventListener("click", clickli);
});
});
}

function listaLlamadaCorrecta() {
const correct = document.getElementById("llamada-correcta");
const listItems = document.querySelectorAll(".custom-list-correct li");

const cues = [
{ time: 0, index: 0 },
{ time: 8, index: 1 },
{ time: 12, index: 2 },
{ time: 20, index: 3 },
{ time: 25, index: 4 },
{ time: 30, index: 5 },
{ time: 35, index: 6 },
{ time: 39, index: 7 },
];

const executedCues = {};

correct.addEventListener("timeupdate", function () {
const currentTime = Math.floor(correct.currentTime);
cues.forEach((cue) => {
if (currentTime === cue.time && !executedCues[cue.index]) {
listItems[cue.index].style.display = "block";
listItems[cue.index].classList.add("active");
const checkIcon = document.createElement("i");
checkIcon.className = "fa fa-check";
checkIcon.style.color = "#009200";
checkIcon.setAttribute("aria-hidden", "true");
listItems[cue.index].insertBefore(
  checkIcon,
  listItems[cue.index].firstChild
);
executedCues[cue.index] = true;
}
});
});
}

function playVideoInterval() {
const videoBackground = document.querySelector(".video-background");
const videoElement = document.createElement("video");
videoElement.autoplay = true;
videoElement.loop = true;

const sourceElement = document.createElement("source");
sourceElement.src = "assets/video/miningprocess.mp4";
sourceElement.type = "video/mp4";

videoElement.appendChild(sourceElement);
videoBackground.appendChild(videoElement);
videoElement.play();
}

function reiniciarActividad(el) {
corret = 0;
completion2 = 0.0;
actualizarGrafico2();
$(".actFin").hide();
$(".btn-reintentar").hide();
$(".itemQ").removeClass("hideT view");
$(".itemQ").removeClass("view");

$(el).parents(".itemQ").addClass("hideT");
$(".actVorF .inc").html(1);

let view = ".actVorF > div:nth-child(2)";
$(view).addClass("view");

for (let i = 1; i <= 6; i++) {
let imgID = "#img_slide19_" + (i < 10 ? "0" : "") + i;
if(imgID==='#img_slide19_02' || imgID==='#img_slide19_04'){
$(imgID).attr("src", "assets/img/slide19_" + (i < 10 ? "0" : "") + i + ".jpg");
}else{
$(imgID).attr("src", "assets/img/slide19_" + (i < 10 ? "0" : "") + i + ".png");
}
}


}

let completion2 = 0.0;
const totalElements2 = 6; // Número total de elementos a arrastrar
const borderWidth2 = 15; // Ancho del borde

function actualizarGrafico2() {
const canvas = document.getElementById("donutChart02");
const context = canvas.getContext("2d");

context.clearRect(0, 0, canvas.width, canvas.height);

// Dibuja el círculo amarillo en el borde
const centerX = canvas.width / 2;
const centerY = canvas.height / 2;
const radius = 80; // Radio del círculo
const startAngle = -Math.PI / 2;
const endAngle = startAngle + 2 * Math.PI;

context.beginPath();
context.arc(centerX, centerY, radius, startAngle, endAngle);
context.lineWidth = borderWidth2;
context.strokeStyle = "white"; // Color del borde amarillo
context.stroke();

// Dibuja la parte que se va llenando en blanco
const filledEndAngle = startAngle + 2 * Math.PI * (completion2 / 100);

context.beginPath();
context.arc(centerX, centerY, radius, startAngle, filledEndAngle);
context.lineWidth = borderWidth2;
context.strokeStyle = "yellow"; // Color de la parte llena en blanco
context.stroke();

// Muestra el porcentaje en el centro
context.font = "20px Arial";
context.fillStyle = "white";
context.textAlign = "center";
context.textBaseline = "middle";
context.fillText(completion2.toFixed(1) + "%", centerX, centerY);
}   

// Actualiza el progreso y el gráfico cuando se realiza una acción de arrastre correcta
function actualizarProgreso2(el) {

if (completion2 < 100) {
completion2 += 100 / totalElements2;
if (completion2 > 100) {
completion2 = 100;
}
actualizarGrafico2();
}
}

let corret = 0;
function actVorF(el, res) {
$(".actVorF button").attr("disabled", "disabled");
//mostrar respuesta
if (res == "correct") {
$(el).parents(".itemQ").find("img").attr("src", "assets/img/true.jpg");
corret = corret + 1;
actualizarProgreso2();
} else {
$(el).parents(".itemQ").find("img").attr("src", "assets/img/false.jpg");
}

setTimeout(() => {
$(el).parents(".itemQ").addClass("hideT");
$(".actVorF .inc").html($(".hideT").length + 1);
//mostrar la siguiente pregunta
$(".itemQ").removeClass("view");
let view = ".actVorF > div:nth-child(" + ($(".hideT").length + 2) + ")";
$(view).addClass("view");
// mostrar resultados finales
if ($(".itemQ").length == $(".hideT").length) {
$(".actVorF .inc").html($(".hideT").length);
$(".actFin").show();
$(".btn-reintentar").show();
$(".actFin .p-res").css("font-size", "30px");
$(".actFin .p-res").css("text-align", "center");
$(".actFin h1").css("text-align", "center");
$(".actFin button").css("text-align", "center");
$(".actFin h1").html(corret + " de " + $(".itemQ").length);
$("#next").removeAttr("disabled").removeAttr("style");
// localStorage.setItem("slider28", "ok");
}
$(".actVorF button").removeAttr("disabled");
}, "1000");
}



const titles = document.querySelectorAll(".rulest h2");
const image = document.querySelector("#img_slide13");
const backgroundImageDiv = document.querySelector(".bg-slide-13");
const titles2 = document.querySelectorAll(".bg-slide-13 h2");

let currentIndex = 0;
let allowNextSlide = true;
let prev = false;

function prevSlide() {
if(prev){
if (allowNextSlide) {
currentIndex = (currentIndex - 1 + titles.length) % titles.length;
updateSlide();
}
}
}

function nextSlide() {
if (allowNextSlide) {
currentIndex = (currentIndex + 1) % titles.length;
updateSlide();
prev = true;
}
}

function updateSlide() {
allowNextSlide = false;

// Cambiar la imagen
const newImageSrc = `assets/img/${titles[currentIndex].getAttribute("data-title").toLowerCase()}.png`;
console.log(newImageSrc);
image.src = newImageSrc;
image.style.cursor = "pointer";

const newBackgroundImageSrc = `assets/img/${titles2[currentIndex].getAttribute("data-title").toLowerCase()}.jpg`;
backgroundImageDiv.style.backgroundImage = `url(${newBackgroundImageSrc})`;

allowNextSlide = true;

}

let completion = 0.0;
const totalElements = 6; // Número total de elementos a arrastrar
const borderWidth = 10; // Ancho del borde

function actualizarGrafico() {
const canvas = document.getElementById("donutChart01");
const context = canvas.getContext("2d");

context.clearRect(0, 0, canvas.width, canvas.height);

// Dibuja el círculo amarillo en el borde
const centerX = canvas.width / 2;
const centerY = canvas.height / 2;
const radius = 80; // Radio del círculo
const startAngle = -Math.PI / 2;
const endAngle = startAngle + 2 * Math.PI;

context.beginPath();
context.arc(centerX, centerY, radius, startAngle, endAngle);
context.lineWidth = borderWidth;
context.strokeStyle = "white"; // Color del borde amarillo
context.stroke();

// Dibuja la parte que se va llenando en blanco
const filledEndAngle = startAngle + 2 * Math.PI * (completion / 100);

context.beginPath();
context.arc(centerX, centerY, radius, startAngle, filledEndAngle);
context.lineWidth = borderWidth;
context.strokeStyle = "yellow"; // Color de la parte llena en blanco
context.stroke();

// Muestra el porcentaje en el centro
context.font = "20px Arial";
context.fillStyle = "white";
context.textAlign = "center";
context.textBaseline = "middle";
context.fillText(completion.toFixed(1) + "%", centerX, centerY);
} 

// Actualiza el progreso y el gráfico cuando se realiza una acción de arrastre correcta
function actualizarProgreso() {
if (completion < 100) {
completion += 100 / totalElements;
if (completion > 100) {
completion = 100;
}
actualizarGrafico();
}
}

function changeImage(element, newSrc) {
const image = element.querySelector("img");
image.src = newSrc;
}

function arrastrarElemento() {
// Logica para la actividad (SLIDE 6)
// item 1
$("#drag1").draggable({
revert: "invalid",
snap: "#drop1",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop1")
.droppable({
accept: "#drag1",
})
.on("droppable:drop", function (e) {
console.log("ENTRAA AQUII");
$(this).addClass("corret");
});

// item 2
$("#drag2").draggable({
revert: "invalid",
snap: "#drop2",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop2")
.droppable({
accept: "#drag2",
})
.on("droppable:drop", function (e) {
$(this).addClass("corret");
});

// item 3
$("#drag3").draggable({
revert: "invalid",
snap: "#drop3",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop3")
.droppable({
accept: "#drag3",
})
.on("droppable:drop", function (e) {
$(this).addClass("corret");
});

// item 4
$("#drag4").draggable({
revert: "invalid",
snap: "#drop4",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop4")
.droppable({
accept: "#drag4",
})
.on("droppable:drop", function (e) {
$(this).addClass("corret");
});

// item 4
$("#drag5").draggable({
revert: "invalid",
snap: "#drop5",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop5")
.droppable({
accept: "#drag5",
})
.on("droppable:drop", function (e) {
$(this).addClass("corret");
});

// item 4
$("#drag6").draggable({
revert: "invalid",
snap: "#drop4",
snapMode: "corner",
snapTolerance: "1",
});
$("#drop6")
.droppable({
accept: "#drag6",
})
.on("droppable:drop", function (e) {
$(this).addClass("corret");
});
}

