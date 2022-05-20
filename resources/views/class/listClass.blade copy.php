 @include('partials/header');

<div class="container">
    <h3 style="color: royalblue;">class table</h3>
    <div class="table-responsive">
        <table class="table table-light table-striped table-bordered table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>id_class</th>
                    <th>id_class</th>
                    <th>id_course</th>
                    <th>id_schedule</th>
                    <th>name</th>
                    <th>color</th>
                </tr>
            </thead>
            <tbody class="table-success">
                @foreach ($class as $class)
                    <tr>
                        <td>
                            {{ $class->id_class }}</td>
                        <td>
                            {{ $class->id_teacher }}</td>
                        <td>
                            {{ $class->id_course }}</td>
                        <td>
                            {{ $class->id_schedule }}</td>
                        <td>
                            {{ $class->name }}</td>
                        <td>
                            {{ $class->color }}</td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>
@include('partials/footer');
