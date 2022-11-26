<x-user-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table dropdown">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">INFORMACJE</th>
      <th scope="col">DZIEŃ DOSTAWY</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
        <td>
            <div>
                {{ $order->nr_listu }}
            </div>
        </td>
        <td>
            <div>
                {{ $order->info }}
            </div>
        </td>
        <td>
            <div>
                {{ $order->dostawa }}
            </div>
        </td>
        <td>
            <div>
            @if($order->status == 0)
            Niedostarczono
            
            @else
            Dostarczono
            
            @endif
            </div>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@foreach($adresats as $adresat)
<div>
    Nadawca: <br>
{{ $adresat->first_name }} {{ $adresat->last_name }} Adres: {{ $adresat->postal_code }} {{ $adresat->city }} {{ $adresat->street }}    
</div>
@endforeach
@foreach($odbiorcas as $odbiorca)
<div>
    Odbiorca: <br>
{{ $odbiorca->first_name }} {{ $odbiorca->last_name }} Adres: {{ $odbiorca->postal_code }} {{ $odbiorca->city }}   {{ $odbiorca->street }} 
</div>
@endforeach

                </div>
            </div>
        </div>
    </div>
</x-user-layout>
