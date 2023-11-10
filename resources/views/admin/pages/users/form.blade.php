@extends('admin.master')

@section('content')

<form action="{{route('users.store')}}"method="post">
    @csrf
  <div class="form-group">
    <label for="">Enter user Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="user_name">
  </div>

  <div class="form-group">
    <label for="">Select Role:</label>
   <select class="form-control" name="role" id="">
        <!-- <option value="">Admin</option> -->
        <option value="manager">Manager</option>
        <option value="account">Account</option>
   </select>
  </div>
  
  <div class="form-group">
    <label for="">Enter User email:</label>
    <input type="email" class="form-control" id="" placeholder="Enter email" name="user_email" >
  </div>

  <div class="form-group">
    <label for="">Upload Users photo: </label>
    <input name="user_image" type="file" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Enter Password: </label>
    <input type="password" class="form-control" placeholder="Enter password" name="user_password">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection