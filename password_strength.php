<script>
$(document).ready(function(){
	$('#bar1').hide();
	$('#bar2').hide();
	$('#bar3').hide();
	$('#bar4').hide();
	$('#bar5').hide();
	$('#bar6').hide();
	$('#bar7').hide();
	$('#bar8').hide();
	$('#bar9').hide();
	
	$('#p_password').keyup(function(){
		
		var upperCase= new RegExp('[A-Z]');
		var lowerCase= new RegExp('[a-z]');
		var numbers = new RegExp('[0-9]');
		var symbols = new RegExp('[!#\$%&\*\+\-\/=\?\^_`{\|}~]');

		$pass=$('#p_password').val();
		
		// If all char is small
		if($pass.match(lowerCase) && $pass.match(upperCase) && $pass.match(numbers) && $pass.match(symbols))
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar3').show();
				$('#bar11').hide();
				$('#bar12').hide();
				$('#bar13').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar4').show();
				$('#bar5').show();
				$('#bar14').hide();
				$('#bar15').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar6').show();
				$('#bar7').show();
				$('#bar16').hide();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10){
				$('#bar8').show();
				$('#bar9').show();
				$('#bar18').hide();
				$('#bar19').hide();
				var str = 'Too Strong';
				$( "#msg" ).html( str );
			}
		}
		if($pass.match(lowerCase) && $pass.match(upperCase) && $pass.match(numbers))
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar6').show();
				$('#bar15').hide();
				$('#bar16').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar7').show();
				$('#bar8').show();
				$('#bar17').hide();
				$('#bar18').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>12){
				$('#bar9').show();
				$('#bar19').hide();
				var str = 'Too Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) && $pass.match(lowerCase) && $pass.match(symbols))    
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar6').show();
				$('#bar5').show();
				$('#bar16').hide();
				$('#bar15').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				
				$('#bar7').show();
				$('#bar8').show();
				$('#bar17').hide();
				$('#bar18').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar9').show();
				$('#bar19').hide();
				var str = 'Too Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) && $pass.match(lowerCase))    
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar11').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar2').show();
				$('#bar3').show();
				$('#bar12').hide();
				$('#bar13').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar4').show();
				$('#bar5').show();
				$('#bar14').hide();
				$('#bar15').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar6').show();
				$('#bar16').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar7').show();
				$('#bar17').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) || $pass.match(lowerCase) && $pass.match(symbols))    
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar15').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar6').show();
				$('#bar7').show();
				$('#bar16').hide();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar8').show();
				$('#bar9').show();
				$('#bar18').hide();
				$('#bar19').hide();
				var str = 'Too Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) || $pass.match(lowerCase))
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar11').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar2').show();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar5').show();
				$('#bar15').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar6').show();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(numbers) && $pass.match(symbols))
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar11').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar2').show();
				$('#bar3').show();
				$('#bar13').hide();
				$('#bar12').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar4').show();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar5').show();
				$('#bar15').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar6').show();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(numbers))
		{
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar11').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar2').show();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar5').show();
				$('#bar15').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar6').show();
				$('#bar16').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(lowerCase) && $pass.match(numbers) && $pass.match(symbols))
		{
			
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar11').hide();
				var str = 'Too Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar2').show();
				$('#bar3').show();
				$('#bar4').show();
				$('#bar12').hide();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar6').show();
				$('#bar15').hide();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar7').show();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar8').show();
				$('#bar18').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(lowerCase) && $pass.match(numbers))
		{
			
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar6').show();
				$('#bar15').hide();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar7').show();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar8').show();
				$('#bar18').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) && $pass.match(numbers) && $pass.match(symbols))
		{
			
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar6').show();
				$('#bar15').hide();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar7').show();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar8').show();
				$('#bar18').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
		}
		else if($pass.match(upperCase) && $pass.match(numbers))
		{
			
			if($pass.length<=2){
				$('#bar1').show();
				$('#bar2').show();
				$('#bar11').hide();
				$('#bar12').hide();
				var str = 'Weak';
				$( "#msg" ).html( str );
			}
			if($pass.length>2 && $pass.length<=6){
				$('#bar3').show();
				$('#bar4').show();
				$('#bar13').hide();
				$('#bar14').hide();
				var str = 'Medium';
				$( "#msg" ).html( str );
			}
			else if($pass.length>6 && $pass.length<=10){
				$('#bar5').show();
				$('#bar6').show();
				$('#bar15').hide();
				$('#bar16').hide();
				var str = 'Moderate';
				$( "#msg" ).html( str );
			}
			else if($pass.length>10 && $pass.length<=12){
				$('#bar7').show();
				$('#bar17').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
			else if($pass.length>=12){
				$('#bar8').show();
				$('#bar9').show();
				$('#bar18').hide();
				$('#bar19').hide();
				var str = 'Strong';
				$( "#msg" ).html( str );
			}
		}
				
		if($pass=='')
		{
			$('#bar1').hide();
			$('#bar2').hide();
			$('#bar3').hide();
			$('#bar4').hide();
			$('#bar5').hide();
			$('#bar6').hide();
			$('#bar7').hide();
			$('#bar8').hide();
			$('#bar9').hide();
			
			$('#bar11').show();
			$('#bar12').show();
			$('#bar13').show();
			$('#bar14').show();
			$('#bar15').show();
			$('#bar16').show();
			$('#bar17').show();
			$('#bar18').show();
			$('#bar19').show();
		
			var str = '';
			$( "#msg" ).html( str );
		}
	});
});
</script>