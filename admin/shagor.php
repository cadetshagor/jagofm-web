<html>
  
  <head>
             <title>Collapse/Expand table rows using Jquery</title>
  		   
  	   
  <script src="http://code.jquery.com/jquery-1.5.1.min.js" type="text/javascript"></script>
   <script type="text/javascript">
  		   
              $(document).ready(function()
              {
                  $('.RowToClick').click(function ()
                  {
                      $(this).nextAll('tr').each( function()
                      {
                          if ($(this).is('.RowToClick'))
                         {
                            return false;
                         }
                         $(this).toggle(350);
                      });
                  });
              });
  </script>
 
 
 </head>
 
 <body>

 <h2> Collapse and Expand Table Effect Using JQuery Demo </h2>
 
 <table border=0>
 	<tr class="RowToClick"><td>Click Here to Toggle Dataset 1</td></tr>
    <tr><td>Data Row 1 Goes Here...</td></tr>
     <tr><td>Data Row 2 Goes Here...</td></tr>
    <tr><td>Data Row 3 Goes Here...</td></tr>
     <tr><td>Data Row 4 Goes Here...</td></tr>
     <tr><td>Data Row 5 Goes Here...</td></tr>
 </table>

 <table border=0>
	<tr class="RowToClick"><td>Click Here to Toggle Dataset 2</td></tr>
 	<tr><td>Data Row 1 Goes Here...</td></tr>
 	<tr><td>Data Row 2 Goes Here...</td></tr>
 	<tr><td>Data Row 3 Goes Here...</td></tr>
 	<tr><td>Data Row 4 Goes Here...</td></tr>
 	<tr><td>Data Row 5 Goes Here...</td></tr>
 </table>
 
 <table border=0>  
 	<tr class="RowToClick"><td>Click Here to Toggle Dataset 3</td></tr>
 	<tr><td>Data Row 1 Goes Here...</td></tr>
 	<tr><td>Data Row 2 Goes Here...</td></tr>
 	<tr><td>Data Row 3 Goes Here...</td></tr>
 	<tr><td>Data Row 4 Goes Here...</td></tr>
 	<tr><td>Data Row 5 Goes Here...</td></tr>
 </table>
 
 </body>
 
 </html>
