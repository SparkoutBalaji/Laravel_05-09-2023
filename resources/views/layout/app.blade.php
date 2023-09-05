<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Works_with_view</title>
    <style>
        div{
            text-align: center;
        }
        table{

                margin:auto;

        }
        td{
           padding: 10px;
        }
        th{
           padding: 10px;
        }
        button{
            margin:3px;
            padding:3px;
            width: 80px;
        }
        #Show
        {
            background-color:blue;
            border-style:groove;
            border-radius: 5px;
            color:white;
        }
        #Edit
        {
            background-color:yellow;
            border-style:groove;
            border-radius: 5px;
        }
        #Delete
        {
            background-color:red;
            border-style:groove;
            border-radius: 5px;
            color:white;
        }
        #Create
        {
            background-color:green;
            border-style:groove;
            border-radius: 5px;
            color:white;
        }
        #create_table, tr{
           width: 250px;

        }
        #DOJ{
            width: 160px;
        }
        </style>
</head>
<body>
    @yield('content')
</body>
</html>
