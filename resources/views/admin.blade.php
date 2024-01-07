@include('admin.header')

        <!-- Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Applicant Table
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Name of The Applicant</th>
                                <th>Email of Applicant</th>
                                <th>Cover Letter of Applicant</th>
                                <th>Resume</th>
                                <th>Date of Submission</th>
                                <th>Action</th> <!-- New column for the delete button -->
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->coverletter }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('img/pdf.png') }}" alt="Featured Image" style="max-width: 100px; max-height: 100px;">
                                                <br>
                                                <a href="{{ route('show-pdf', ['filename' => $user->resume]) }}" target="_blank">
                                                    <button type="button" class="btn btn-primary">View PDF</button>
                                                </a>
                                            </td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('F j, Y - g:ia') }}</td>
                                        <td class="text-center">
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

