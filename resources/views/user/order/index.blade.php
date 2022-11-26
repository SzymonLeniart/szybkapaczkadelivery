<x-user-layout>
<body>

<div class="container">
  <h2 class="text-center">Student Management | Add</h2>
  <br>
  <table class="table table-striped table-fixed">
    <tbody>
        <form action = "{{ route('user.orders.index')}}" method = "POST" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <tr>
            <td><label class="form-group">Waga:</label>
                <input type="text" class="form-control w-25"  name="waga"></td>
                <td class=" w-25"><label>Szerokość:</label>
                <input type="text" class="form-control w-25"  name="szerokosc"></td>
                <td> <label>Długość:</label>
                <input type="text" class="form-control w-25"  name="dlugosc"></td>
                <td><label>Wysokosc:</label>
                <input type="text" class="form-control w-25"  name="wysokosc"></td>
            
        </tr>
</tbody>
  </table>
  <label>Odbiorca:</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="odbiorca">
            <label>Adres odbiorcy:</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="adres_dostawy">
            <br>
            <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
        </form>
    
</div>

</body>
</x-user-layout>