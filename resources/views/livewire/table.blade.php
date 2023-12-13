<div>
    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            @foreach ($_cols as $_col)
                <th scope="col">{{$_col->name}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
            @foreach ($_rows as $_row)
                <tr>
                    <th scope="row">1</th>
                    @foreach ($_cols as $_col)
                        <td>{{$_row[$_col]}}</td>
                    @endforeach
                </tr>

        </tbody>
    </table>
</div>
