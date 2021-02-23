<table style="width:100%">
    <tr>
      <td>Name</th>
      <td>{{$details['name']}}</th>
    </tr>
    <tr>
      <td>Email Address</td>
      <td>{{$details['email']}}</td>
    </tr>
    <tr>
      <td>Origin Country</td>
      <td>{{$details['origin_country']}}</td>
    </tr>
    <tr>
      <td>Origin City</td>
      <td>{{$details['origin_city']}}</td>
    </tr>
    <tr>
      <td>Destination Country</td>
      <td>Nigeria</td>
    </tr>
    <tr>
      <td>Destination City</td>
      <td>{{$details['destination_city']}}</td>
    </tr>
    <tr>
      <td>Parcels</td>
      <td>{{$details['parcels']}}</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>{{$details['weight']}}</td>
    </tr>
    <tr>
      <td>Mode</td>
      <td>{{$details['mode'] == 0 ? 'Air' : 'Sea'}}</td>
    </tr>
    <tr>
      <td>Expected Delivery Date</td>
      <td>{{$details['delivery_date']}}</td>
    </tr>
    <tr>
      <td><b>Total Price</b></td>
      <td><b>{{number_format($details['amount'])}}</b></td>
    </tr>
</table>