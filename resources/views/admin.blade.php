@include('admin.header')

<div id="page-wrapper">
    <div id="page-inner" style="min-height: 100vh; overflow: hidden;">
        <div class="row">
            <div class="col-md-12">
                <h2>ADMIN</h2>
                <h5>Welcome Sir!, Love to see you back.</h5>
            </div>
        </div>
        <hr />

        <!-- Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Applicant Table
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name of The Applicant</th>
                                <th>Email of Applicant</th>
                                <th>Cover Letter of Applicant</th>
                                <th>Date of Submission</th>
                                <th>Resume</th>
                                <th>Action</th> <!-- New column for the delete button -->
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->coverletter }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('F j, Y - g:ia') }}</td>
                                        <td><img src="{{ asset('uploads/' . $user->resume) }}" alt="Featured Image" style="max-width: 100px; max-height: 100px;"></td>
                                        <td>
                                            <form action="{{ route('admin.delete', $user->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">No records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Kitchen Sink -->

        @include('admin.footer')
    </div>
</div>

