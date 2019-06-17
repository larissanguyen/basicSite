<html>
   
   <head>
      <title>View Relevant Funds</title>
   </head>
   
   <body>
      <text>{{$funds}}</text>

<!--       <table border = 1>
         <tr>
            <td>Fund Name</td>
            <td>Type</td>
            <td>Inception Date</td>
            <td>Description</td>
         </tr>
         @foreach ($funds as $fund)
         <tr>
            <td>{{ $fund->fundName }}</td>
            <td>{{ $fund->type }}</td>
            <td>{{ $fund->inceptionDate }}</td>
            <td>{{ $fund->description }}</td>
         </tr>
         @endforeach
      </table> -->
   </body>
</html>