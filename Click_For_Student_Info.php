<html>
 <head>
<div class='container'>
		<div class='manu'>
			<ul id='menu'>
				<li><a href="index.html" >Home</a></li>
				<li><a href='registration.html'> Additional Information Add </a></li>	
			</ul>
		</div>
	</div>

 </head>
 <body>
  <script>
   var name="Monika Patel";
   var Address="New Jersey";
   var Back_Ground="BSc In Commerse, MBA in Finance";
   var Hobby="Music, Movies, Travell";
   var result=true;

   document.write("<h1>Student Info</h1>");
   document.write("<h6>As requested</h6>");

   document.write("Today is " + Date());
   //concate two string (String+variable)

   document.write("<br/><br/>Name :  "+name);
   document.write("<br/>Type :  "+typeof(name));

   document.write("<br/><br/>Address :  "+Address);
   document.write("<br/>Type :  "+typeof(Address));

   document.write("<br/><br/>Back_Ground :  "+Back_Ground);
   document.write("<br/>Type :  "+typeof(Back_Ground));

   document.write("<br/><br/>Hobby Marks :  "+Hobby);
   document.write("<br/>Type :  "+typeof(Hobby));

   document.write("<br/>Type :  "+typeof(result));
  </script>
 </body>
 </html>
