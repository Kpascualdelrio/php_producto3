

@include('partials/header');

<div class="container">
    <h3 style="color: royalblue;">Teachers table</h3>
    <div class="table-responsive">
        <table class="table table-light table-striped table-bordered table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>Id_teacher</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Telephone</th>
                    <th>Nif</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="table-success">
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                            {{ $teacher->id_teacher }}</td>
                        <td>
                            {{ $teacher->name }}</td>
                        <td>
                            {{ $teacher->surname }}</td>
                        <td>
                            {{ $teacher->telephone }}</td>
                        <td>
                            {{ $teacher->nif }}</td>
                        <td>
                            {{ $teacher->email }}</td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>
 @include('partials/footer');
