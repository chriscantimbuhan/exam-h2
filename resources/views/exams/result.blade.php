    <div class='row'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Exam Result
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                @foreach ($data->keys() as $value)
                                    <th>{{ strtoupper($value) }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($data as $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

