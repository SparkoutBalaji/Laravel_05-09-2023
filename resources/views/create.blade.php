@extends('layout.app')
@section('content')

<div>
    <h1>Create New Sparkout Employee</h1>

    <table id="create_table">
        <tr>
            <td>
                <p>
                    <label for="ID">
                        Enter Employee ID <br/>
                        <input type="text" name="ID" id="ID" placeholder="ID">
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="NAME">
                        Enter Employee Name <br/>
                        <input type="text" name="NAME" id="NAME" placeholder="Name">
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="EMAIL">
                        Enter Employee Email <br/>
                        <input type="mail" name="EMAIL" id="EMAIL" placeholder="Email">
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="DOJ">
                        Enter Employee Date of Joining <br/>
                        <input type="date" name="DOJ" id="DOJ">
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label for="Create">
                        <button id="Create">Create</button>
                    </label>
                </p>
            </td>
        </tr>
    </table>
