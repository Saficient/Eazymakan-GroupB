@extends('master.layout')
@section('content')

<style>
    .table{
        padding: 20px;
        border: 20px
        /* background-color: red; */
    }
.h1{
    position: relative;
    position: 100px 200x
}
</style>


<div class="container">
<table class="table">
    <h1 class="h1">List of the Feedbacks</h1>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>otto@gmail.com</td>
        <td>Serviece</td>
        <td>Really great </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>thornton@gmail.om</td>
        <td>Serviece</td>
        <td>It's really organised and handy</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>thebird@gmail.com</td>
        <td>Serviece</td>
        <td>Everything is arranged and also provide delivery <br>
            which is a great oppurtunity for those who do runner</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
