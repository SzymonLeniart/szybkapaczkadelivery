<x-delivery-layout>
<body>

<div class="container">
  <h2 class="text-center">Edytuj zamówienie: {{$order->id}}</h2>
  <br>
  <table class="table table-striped table-fixed">
    <tbody>
        <form action="{{ route('delivery.zlecenia.update', $order->id) }}" method = "POST" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php" @csrf @method ('PATCH') 

        
        <tr>
            <td><label class="form-group">Waga:</label>
                <input type="text" value= "{{$order->waga }}" class="form-control w-25"  name="waga"></td>
                <td class=" w-25"><label>Szerokość:</label>
                <input type="text" value= "{{$order->szerokosc }}" class="form-control w-25"  name="szerokosc"></td>
                <td> <label>Długość:</label>
                <input type="text" value= "{{$order->dlugosc }}" class="form-control w-25"  name="dlugosc"></td>
                <td><label>Wysokosc:</label>
                <input type="text" value= "{{$order->wysokosc }}" class="form-control w-25"  name="wysokosc"></td>
                <input type="text" value= "{{$order->users_id }}" class="form-control w-25"  name="users_id"></td>
            
        </tr>
</tbody>
  </table>
  <label>Odbiorca:</label>
                <input type="text" value= "{{$order->odbiorca }}" class="form-control" placeholder="Enter Email" name="odbiorca">
            <label>Adres odbiorcy:</label>
                <input type="text" value= "{{$order->adres_dostawy }}" class="form-control" placeholder="Enter Email" name="adres_dostawy">
            <br>
            <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
        </form>
    
</div>

</body>
</x-delivery-layout>