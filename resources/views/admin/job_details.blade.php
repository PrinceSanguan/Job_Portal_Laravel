@include('admin.header')

        <!-- Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Job Details
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Job Name</th>
                                <th>Address</th>
                                <th>Published Date</th>
                                <th>Salary</th>
                                <th>Vacancy</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Responsibilities</th>
                                <th>Qualification</th>
                                <th>Detail</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->published }}</td>
                                        <td>{{ $user->salary }}</td>
                                        <td>{{ $user->vacancy }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->description }}</td>
                                        <td>{{ $user->responsibilities }}</td>
                                        <td>{{ $user->qualification }}</td>
                                        <td>{{ $user->detail }}</td>
                                        <td><img src="{{ asset('storage/' . $user->image) }}" alt="Featured Image" style="max-width: 100px; max-height: 100px;"></td>
                                        <td class="text-center">
                                            <form  action="{{ route('job.delete', $user->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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