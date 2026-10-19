@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center font-weight-bold mb-2" data-aos="zoom-in">System Admin Dashboard Preview</h2>
    <p class="text-center text-secondary mb-5">Enterprise Administrative Architecture Overview</p>

    <div class="card card-custom p-4 shadow-lg" data-aos="fade-up">
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="p-3 bg-dark rounded border border-secondary text-center">
                    <span class="text-uppercase text-secondary small">Total Submissions</span>
                    <h3 class="text-primary font-weight-bold mb-0 mt-2">1,248</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-dark rounded border border-secondary text-center">
                    <span class="text-uppercase text-secondary small">Pending Requests</span>
                    <h3 class="text-warning font-weight-bold mb-0 mt-2">42</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-dark rounded border border-secondary text-center">
                    <span class="text-uppercase text-secondary small">Resolved Complaints</span>
                    <h3 class="text-success font-weight-bold mb-0 mt-2">1,180</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-dark rounded border border-secondary text-center">
                    <span class="text-uppercase text-secondary small">Active System Users</span>
                    <h3 class="text-info font-weight-bold mb-0 mt-2">350+</h3>
                </div>
            </div>
        </div>

        <h5 class="text-white mb-3">Recent System Operations</h5>
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0">
                <thead>
                    <tr>
                        <th>Module</th>
                        <th>Action</th>
                        <th>User Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feedback Management</td>
                        <td>Assigned ticket to department head</td>
                        <td><span class="badge bg-indigo text-primary border border-primary">Super Admin</span></td>
                        <td><span class="text-success">Completed</span></td>
                    </tr>
                    <tr>
                        <td>Role Permission (Spatie)</td>
                        <td>Updated user access levels</td>
                        <td><span class="badge bg-indigo text-primary border border-primary">System Admin</span></td>
                        <td><span class="text-success">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection