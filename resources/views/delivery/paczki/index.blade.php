<x-delivery-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 table-responsive text-nowrap">
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NR LISTU</th>
      <th scope="col">INFORMACJE</th>
      <th scope="col">DATA DOSTARCZENIA</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($odbiorcas as $odbiorca)
    <tr>
        <td>
            <div>
                {{ $odbiorca->nr_listu }}
            </div>
        </td>
        <td>
            <div>
                {{ $odbiorca->info }}
            </div>
        </td>
        <td>
            <div>
                {{ $odbiorca->dostawa }}
            </div>
        </td>
        <td>
            <div>
            @if($odbiorca->status == 0)
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

                </div>
            </div>
        </div>
    </div>
</x-delivery-layout>
