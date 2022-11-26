<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
    </tr>
  </thead>
  <tbody>
    @foreach($roles as $role)
    <tr>
        <td>
            <div>
                {{ $role->name }}
            </div>
        </td>
        <td>
            <a href="">Edit </a>
            <a href="">Delete </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
