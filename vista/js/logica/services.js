$.ajax({
    type:'GET',
    url: '',
    data: datos_enviados,
    datatype: 'json',
})
.done(function(data){

    console.log(data);
    var datos2 = JSON.parse(data);
    console.log(datos2);

})