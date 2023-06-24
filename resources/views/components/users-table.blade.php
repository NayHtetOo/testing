<div>
    <!-- He who is contented is rich. - Laozi -->
    <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
            {{-- <tr>
                <td>1</td>
                <td>John</td>
                <td>21</td>
                <td>Yangon</td>
            </tr>
            <tr>
                <td>2</td>
                <td>David</td>
                <td>22</td>
                <td>Mandalay</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Merlin</td>
                <td>23</td>
                <td>Magway</td>
            </tr> --}}
        </tbody>
    </table>
</div>
