$(document).on('ready',inicio);

function inicio()
{
	$('button').on('click',function(){
		var $nombre=$("#nombre").val();
		var $email=$("#email").val();
		if($nombre=="" || $email=="")
		{
			alert("Los campos no pueden ir vacios");
		}
		else
		{
			$.post('libros.php',{
				nombre:$nombre,
				email:$email,
			},function(data){
				
			})
		}
	});
}