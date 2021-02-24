@extends('layouts.master')

@section('title')
    Admin Dashboard | i-Vote Buddy
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>  Name</th>
                <th> Country</th>
                <th> City </th>
                <th class="text-right">  Salary</th>
              </thead>
              <tbody>
                <tr>
                  <td> Sonam Jamtsho</td>
                  <td> Bhutan </td>
                  <td> Thimphu </td>
                  <td> Nu.15000 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

@section('scripts')
    
@endsection