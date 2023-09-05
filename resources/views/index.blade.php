@extends('layout.app')
@section('content')

<div>
    <h1>Sparkout Employees</h1>
    <button id="Create">Create</button>
    <table border="1px">
        <tr>
            <th>
                <p>
                    <label for="ID">ID</label>
                </p>
            </th>
            <th>
                <p>
                    <label for="NAME">NAME</label>
                </p>
            </th>
            <th>
                <p>
                    <label for="EMAIL">EMAIL</label>
                </p>
            </th>
            <th>
                <p>
                    <label for="JOINING_DATE">JOINING DATE</label>
                </p>
            </th>
            <th>
                <p>
                    <label for="ACTION">ACTION</label>
                </p>
            </th>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="ID">1111</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="NAME">BALAJI N</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="EMAIL">balaji.n@sparkouttech.com</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="JOINING_DATE">16/08/2023</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="ACTION">
                        <button  id="Show"> Show</button>
                        <button  id="Edit"> Edit</button>
                        <button  id="Delete"> Delete</button>
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="ID">1112</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="NAME">SHEIK DAWOOD</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="EMAIL">sheikdawood@sparkouttech.com</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="JOINING_DATE">16/08/2023</label>
                </p>
            </td>
            <td>
                <p>
                    <label for="ACTION">
                        <button  id="Show"> Show</button>
                        <button  id="Edit"> Edit</button>
                        <button  id="Delete"> Delete</button>
                    </label>
                </p>
            </td>
        </tr>
    </table>
</div>
@endsection
